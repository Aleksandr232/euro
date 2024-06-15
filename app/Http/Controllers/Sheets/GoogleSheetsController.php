<?php

namespace App\Http\Controllers\Sheets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Sheets;
use App\Models\Data;

class GoogleSheetsController extends Controller
{
    public function importData()
    {
        // Настройка клиента Google API
        $client = new Google_Client();
        $client->setApplicationName('Euro');
        $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
        $client->setAuthConfig(storage_path('app/credentials.json'));
        $client->setHttpClient(new \GuzzleHttp\Client(['verify' => storage_path('app/cacert.pem')]));

        // Создание сервиса Google Sheets
        $service = new Google_Service_Sheets($client);

        // ID таблицы Google Sheets
        $spreadsheetId = '17otQdYBnn2zhq4-lTpnseduV0JH_K5jhjSdWB766zjs';

        // Диапазон ячеек, которые вы хотите загрузить
        $range = 'Расписание матчей!A2:G5';

        // Получение данных из Google Sheets
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $values = $response->getValues();

        // Сохранение новых данных в базу данных
        $savedCount = 0;
        $updatedCount = 0;
        foreach ($values as $row) {
            $data = [
                'date' => $row[0],
                'time' => $row[1],
                'status' => $row[2],
                'team_1' => $row[3],
                'team_2' => $row[4],
                'score' => $row[5],
                'reference_view' => $row[6]
            ];

            // Проверяем, существует ли уже такая запись в базе данных
            $existingRecord = Data::where($data)->first();
            if ($existingRecord) {
                // Обновляем существующую запись
                $existingRecord->update($data);
                $updatedCount++;
            } else {
                // Создаем новую запись
                Data::create($data);
                $savedCount++;
            }
        }

        return response()->json(['message' => 'Data imported successfully. ' . $savedCount . ' new records were saved, and ' . $updatedCount . ' records were updated.']);
    }
}
