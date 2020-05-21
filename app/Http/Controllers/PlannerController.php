<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Planner;
use App\Festival;
use App\Profile;
use App\User;

class PlannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Auth::user();
        // $planners = $user->planner;

        // // $planners = DB::table('planner_user')->where('user_id', Auth::id())->get();
        // return view('planner.index', [
        //     'planners' => $planners
        // ]);

        $user = Auth::user();
        $planners = $user->planner;
        if (count($planners) >= 1) {
            return view('planner.index', [
                'planners' => $planners
            ]);
        } else {
            return view('planner.noplanner');
        }
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
    public function show(Planner $planner)
    {
        $users = $planner->load('user.profile')->user;

        return view('planner.show', [
            'festivals' => Festival::all(),
            'currentPlanner' => $planner,
            'users' => $users
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
    public function update(Request $request, Planner $planner)
    {
        $data = $this->validateUpdateData();

        if ($request->has('planner_image')) {
            $path = $request->file('planner_image')->store('/planner/images', 'public');
            $data['planner_image'] = $path;
        }

        $planner->update($data);
        $planner->user()->attach($request->input('user_id'));

        return redirect()->route('planner.show');

        // $users = $planner->load('user.profile')->user;

        // return view('planner.show', [
        //     'currentPlanner' => $planner,
        //     'festivals' => Festival::all(),
        //     'users' => $users
        // ]);
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
            'todo_list' => 'nullable',
            'playlist_1' => 'nullable',
            'playlist_2' => 'nullable',
            'planner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    }

    public function validateUpdateData()
    {
        return request()->validate([
            'festival_id' => 'nullable',
            'info_text' => 'nullable',
            'todo_list' => 'nullable',
            'playlist_1' => 'nullable',
            'playlist_2' => 'nullable',
            'planner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' => 'nullable'
        ]);
    }
}
