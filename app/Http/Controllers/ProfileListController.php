<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileListController extends Controller
{
    public function add(Profile $profile)
    {
        return view('profile_list.add', [
            'ownProfile' => $profile
        ]);
    }

    public function edit(Profile $profile)
    {
        return view('profile_list.edit', [
            'ownProfile' => $profile
        ]);
    }
}
