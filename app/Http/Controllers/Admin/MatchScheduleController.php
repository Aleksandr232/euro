<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MatchSchedule;
use Illuminate\Http\Request;

class MatchScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matchs = MatchSchedule::all();

        return view('admin.matchschedule.index', compact('matchs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'date' => 'required',
            'time' => 'required',
            'status' => 'required',
            'team_1' => 'required',
            'team_2' => 'required',
            'score' => 'required',
        ]);


        $matchSchedule = new MatchSchedule();
        $matchSchedule->date = $validatedData['date'];
        $matchSchedule->time = $validatedData['time'];
        $matchSchedule->status = $validatedData['status'];
        $matchSchedule->team_1 = $validatedData['team_1'];
        $matchSchedule->team_2 = $validatedData['team_2'];
        $matchSchedule->score = $validatedData['score'];
        /* if ($request->has('reference_view')) {
            $matchSchedule->reference_view = $request->reference_view;
        } else {
            $matchSchedule->reference_view = null;
        } */
        $matchSchedule->reference_view = $request->reference_view;


        $matchSchedule->save();

        
        return redirect()->route('schedule.index')->with('success', 'Матч добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(MatchShedule $matchShedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MatchShedule $matchShedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $match = MatchSchedule::find($id);

        if ($request->has('status')) {
            $match->status = $request->status;
        }

        if ($request->has('score')) {
            $match->score = $request->score;
        }

        $match->save();

        return redirect()->route('schedule.index')->with('success', 'Информация о матче успешно обновлена.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MatchShedule $matchShedule)
    {
        //
    }
}
