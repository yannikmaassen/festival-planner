<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Planner;
use App\Festival;
use Illuminate\Support\Facades\DB;

class PlannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planners = DB::table('planner_user')->where('user_id', Auth::id())->get();
        // $testPlanners = DB::table('planners')->where('id', $planners->planner_id)->get();
        // $festivals = DB::table('festivals')->where('id', $testPlanners->festival_id)->get();
        return view('planner.index', [
            'planners' => $planners,
            // 'festivals' => $festivals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planner.create', [
            'festivals' => Festival::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $this->validateData();
        $newPlanner = Planner::create([
            'festival_id' => $request->input('festival_id'),
            'info_text' => $request->input('info_text'),
            'planner_image' => $request->input('planner_image')
        ]);
        $newPlanner->user()->sync($user);

        return redirect()->route('planner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentPlanner = Planner::find($id);
        return view('planner.show', [
            'festivals' => Festival::all(),
            'currentPlanner' => $currentPlanner
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentPlanner = Planner::find($id);
        return view('planner.edit', [
            'currentPlanner' => $currentPlanner,
            'festivals' => Festival::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = $this->validateData();
        $currentPlanner = Planner::find($id);
        $currentPlanner->update($data);

        return redirect()->route('planner.show', [
            'currentPlanner' => $currentPlanner,
            'festivals' => Festival::all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planner $planner)
    {
        $planner->delete();

        return redirect()->route('planner');
    }

    public function finished()
    {
        return view('planner.show_finished');
    }

    public function validateData()
    {
        return request()->validate([
            'festival_id' => 'required',
            'info_text' => 'required|min:3',
            'planner_image' => '',
            // 'todo_list' => '',
            // 'playlists' => '',
        ]);
    }
}
