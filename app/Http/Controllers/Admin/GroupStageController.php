<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GroupStage;
use Illuminate\Http\Request;

class GroupStageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $group = GroupStage::all();

        return view('admin.group.index', compact('group'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'group' => 'required',
        'team' => 'required',
        'matches' => 'nullable|integer',
        'win' => 'nullable|integer',
        'draw' => 'nullable|integer',
        'losses' => 'nullable|integer',
        'point' => 'nullable|integer',
    ]);

    $group = new GroupStage();
    $group->team = $validatedData['team'];
    $group->group = $validatedData['group'];
    $group->win = $validatedData['win'] ?? 0;
    $group->matches = $validatedData['matches'] ?? 0;
    $group->draw = $validatedData['draw'] ?? 0;
    $group->losses = $validatedData['losses'] ?? 0;
    $group->point = $validatedData['point'] ?? 0;

    $group->save();

    return redirect()->route('group.index')->with('success', 'Команда добавлена в группу');
}


    /**
     * Update the specified resource in storage.
     */
    public function update_group(Request $request, $id)
    {


        $group = GroupStage::find($id);

        if ($request->has('point')) {
            $group -> point = $request->point;
        }

        if ($request->has('losses')) {
            $group -> losses = $request->losses;
        }

        if ($request->has('draw')) {
            $group -> draw = $request->draw;
        }

        if ($request->has('matches')) {
            $group -> matches = $request->matches;
        }

        if ($request->has('win')) {
            $group -> win = $request->win;
        }

        $group -> save();

        return redirect()->route('group.index')->with('success', 'Информация о команде обновлена.');
    }

}
