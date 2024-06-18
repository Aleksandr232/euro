<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\MatchSchedule;
use App\Models\GroupStage;
use App\Models\PlayOff;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $matches = MatchSchedule::whereDate('date', '>=', today())
                        ->orderBy('date', 'asc')
                        ->orderBy('time', 'asc')
                        ->take(4)
                        ->get();




        $match_date = MatchSchedule::all();



        $groups = ['A', 'B', 'C', 'D', 'E', 'F'];
        $group = GroupStage::whereIn('group', $groups)
                   ->selectRaw('MIN(id) as id, `group`')
                   ->groupBy('group')
                   ->orderBy('group')
                   ->take(6)
                   ->get();



        $groups_team = GroupStage::whereIn('group', ['A', 'B', 'C', 'D', 'E', 'F'])
                        ->orderByDesc('point')
                        ->take(24)
                        ->get();

        $playOff = PlayOff::all();

        return view('site.page.index', compact('matches', 'match_date', 'group', 'groups_team', 'playOff'));
    }
}
