<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Google Sheets API Credentials
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Google Sheets API credentials.
    |
    */

    'credentials' => [
        'client_id' => env('GOOGLE_SHEETS_CLIENT_ID'),
        'client_secret' => env('GOOGLE_SHEETS_CLIENT_SECRET'),
        'redirect_uri' => env('GOOGLE_SHEETS_REDIRECT_URI'),
        'scopes' => [
            Google_Service_Sheets::SPREADSHEETS_READONLY,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Google Sheets Spreadsheet ID
    |--------------------------------------------------------------------------
    |
    | Here you may configure the ID of the Google Sheets spreadsheet you want
    | to interact with.
    |
    */

    'spreadsheet_id' => env('GOOGLE_SHEETS_SPREADSHEET_ID'),

    /*
    |--------------------------------------------------------------------------
    | Google Sheets API Credentials Path
    |--------------------------------------------------------------------------
    |
    | Here you may configure the path to the Google Sheets API credentials
    | JSON file.
    |
    */

    /* 'credentials_path' => storage_path('app/google-sheets/credentials.json'), */
];
