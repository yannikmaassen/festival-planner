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
        // $testPlanners = DB::table('planners')->where('id', $planner->planner_id)->get();
        // $festivals = DB::table('festivals')->where('id', $testPlanners->festival_id)->get();
        return view('planner.index', [
            'planners' => $planners,
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
        $data = $this->validateData();

        if ($request->has('planner_image')) {
            $path = $request->file('planner_image')->store('/planner/images', 'public');
            $data['planner_image'] = $path;
        }
        $newPlanner = Planner::create($data);
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
    public function update(Request $request, $id)
    {
        $data = $this->validateData();
        $currentPlanner = Planner::find($id);

        if ($request->has('planner_image')) {
            $path = $request->file('planner_image')->store('/planner/images', 'public');
            $data['planner_image'] = $path;
        }
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
    public function destroy($id)
    {
        $currentPlanner = Planner::find($id);
        $currentPlanner->delete();

        return redirect()->route('planner.index');
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
            'todo_list' => '',
            'playlists' => '',
            'planner_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    }
}
