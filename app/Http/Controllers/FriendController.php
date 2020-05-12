<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function add()
    {
        return view('friends.add');
    }

    public function edit()
    {
        return view('friends.edit');
    }
}
