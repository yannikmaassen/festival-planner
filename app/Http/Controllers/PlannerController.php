<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planner;

class PlannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Planner $planner)
    {
        $planner = Planner::all();
        return view('planner.index', [
            'planners' => $planner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validateData();
        Planner::create($data);
        return redirect()->route('planner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Planner $planner)
    {
        return view('planner.show', [
            'planners' => $planner
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Planner $planner)
    {
        return view('planner.edit', [
            'planners' => $planner
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
        //
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

        return redirect()->route('planner.overview');
    }

    public function finished()
    {
        return view('planner.show_finished');
    }

    public function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'genre_1' => 'min:3',
            'genre_2' => 'min:3',
            'genre_3' => 'min:3',
            'genre_4' => 'min:3',
            'genre_5' => 'min:3',
            'headliner_1' => 'min:3',
            'headliner_2' => 'min:3',
            'headliner_3' => 'min:3',
            'headliner_4' => 'min:3',
            'headliner_5' => 'min:3',
            'description' => 'required|min:3',
            'todo_list',
            'playlist',
            // 'planner_image' => 'image|mimes:jpeg,png,jpg,gif'
        ]);
    }
}
