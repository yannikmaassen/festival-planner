<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planner;
use App\Festival;

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
        $festivals = Festival::all();
        return view('planner.create', [
            'festivals' => $festivals,
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
        $festivals = Festival::all();
        $data = $this->validateData();
        Planner::create($data);

        return redirect()->route('planner.show', [
            'festivals' => $festivals,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Planner $planner)
    {
        $festivals = Festival::all();
        return view('planner.show', [
            'festivals' => $festivals
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
            'festival_id' => 'required',
            'info_text' => 'required|min:3',
            'todo_list' => '',
            'playlist' => '',
        ]);
    }
}
