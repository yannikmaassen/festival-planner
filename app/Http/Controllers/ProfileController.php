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
        //
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
        if ($request->has('profile_image')) {
            $path = $request->file('profile_image')->store('/profile/images', 'public');
            $data['profile_image'] = $path;
        }
        $data['user_id'] = $user->id;
        $newProfile = Profile::create($data);

        $user->profile()->save($newProfile);
        $festival = Festival::find($request->input('festival_id'));

        return view('profile.show', [
            'ownProfile' => $newProfile,
            'festival' => $festival
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        if (is_null($user->profile)) {
            return view('profile.noprofile');
        } else {
            $ownProfile = Profile::find($user->profile)->where('user_id', '=', $user->id)->first();
            $festival_id = $ownProfile->festival_id;
            $festival = Festival::find($festival_id);

            return view('profile.show', [
                'festival' => $festival,
                'ownProfile' => $ownProfile
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profile.edit', [
            'ownProfile' => $profile,
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
    public function update(Request $request, Profile $profile)
    {
        $data = $this->validateUpdateData();
        if ($request->has('profile_image')) {
            $path = $request->file('profile_image')->store('/profile/images', 'public');
            $data['profile_image'] = $path;
        }
        $profile->update($data);


        return redirect()->route('profile.show', $profile);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('planner');
    }

    public function other(Profile $profile)
    {
        return view('profile.other', [
            'profile' => $profile
        ]);
    }

    public function validateData()
    {
        return request()->validate([
            'profile_name' => 'required',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile_description' => 'required|min:3',
            'festival_id' => 'nullable',
            'profile_list' => 'nullable',
            'artist_uri' => 'nullable',
            'artist_genres' => 'nullable',
            'artist_href' => 'nullable',
            'artist_id' => 'nullable',
            'artist_images' => 'nullable',
            'artist_name' => 'nullable',
        ]);
    }

    public function validateUpdateData()
    {
        return request()->validate([
            'profile_name' => 'nullable',
            'profile_image' => 'nullable',
            'profile_description' => 'nullable',
            'festival_id' => 'nullable',
            'profile_list' => 'nullable',
            'artist_uri' => 'nullable',
            'artist_genres' => 'nullable',
            'artist_href' => 'nullable',
            'artist_id' => 'nullable',
            'artist_images' => 'nullable',
            'artist_name' => 'nullable',
        ]);
    }
}
