<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Festival;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
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
        $newProfile = Profile::create([
            'profile_name' => $request->input('profile_name'),
            'profile_image' => $request->input('profile_image'),
            'profile_description' => $request->input('profile_description'),
            'festival_id' => $request->input('festival_id'),
            'profile_list' => $request->input('profile_list')
        ]);
        $newProfile->user()->sync($user);

        return redirect()->url('/planner/' . $newProfile->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ownProfile = Profile::find($id);
        return view('profile.show', [
            'festivals' => Festival::all(),
            'ownProfile' => $ownProfile
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
        $ownProfile = Profile::find($id);
        return view('profile.edit', [
            'ownProfile' => $ownProfile
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
    public function destroy($id)
    {
        //
    }

    public function other()
    {
        return view('profile.other');
    }

    public function validateData()
    {
        return request()->validate([
            'profile_name' => 'required',
            'profile_image' => '',
            'profile_description' => 'required|min:3',
            'festival_id' => '',
            'profile_list' => ''
        ]);
    }
}
