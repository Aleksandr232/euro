<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PlayOff;
use Illuminate\Http\Request;

class PlayOffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $playOff = PlayOff::all();

        return view('admin.playoff.index', compact('playOff'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'stage' => 'required',
            'team_1' => 'required',
            'team_2' => 'required',
            'score' => 'required',
        ]);


        $playOff = new PlayOff();
        $playOff->stage = $validatedData['stage'];
        $playOff->team_1 = $validatedData['team_1'];
        $playOff->team_2 = $validatedData['team_2'];
        $playOff->score = $validatedData['score'];

        $playOff->save();


        return redirect()->route('playoff.index')->with('success', 'Этап добавлен');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update_playoff(Request $request, $id)
    {


        $playOff = PlayOff::find($id);

        if ($request->has('score')) {
            $playOff->score = $request->score;
        }

        if ($request->has('team_1')) {
            $playOff->team_1 = $request->team_1;
        }

        if ($request->has('team_2')) {
            $playOff->team_2 = $request->team_2;
        }

        $playOff->save();

        return redirect()->route('playoff.index')->with('success', 'Информация о этапе обновлена');
    }

    public function deleteAll()
    {
        PlayOff::query()->delete();

        return redirect()->route('playoff.index')->with('success', 'Плей-офф очищен');
    }

}
