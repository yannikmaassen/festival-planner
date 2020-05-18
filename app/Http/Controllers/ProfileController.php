<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\Festival;
use App\User;
use Illuminate\Support\Facades\DB;

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
        return view('profile.create', [
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
        $data['user_id'] = $user->id;
        $newProfile = Profile::create($data);
        $user->profile()->save($newProfile);

        return view('profile.show', [
            'ownProfile' => $newProfile
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = Auth::user();



        if (isset($user->profile)) {
            $ownProfile = Profile::find($user->id);
            $festival_id = $ownProfile->festival_id;
            $festival = Festival::find($festival_id);
            return view('profile.show', [
                'festival' => $festival,
                'ownProfile' => $ownProfile
            ]);
        } else {
            return view('profile.noprofile');
        }
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
            'ownProfile' => $ownProfile,
            'festivals' => Festival::all()
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
        $ownProfile = Profile::find($id);
        $ownProfile->update($data);

        return redirect()->route('profile.show', $ownProfile);
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
            'profile_image' => 'nullable',
            'profile_description' => 'required|min:3',
            'festival_id' => 'nullable',
            'profile_list' => 'nullable'
        ]);
    }
}
