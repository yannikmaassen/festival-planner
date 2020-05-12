<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function add()
    {
        return view('playlist.add');
    }

    public function edit()
    {
        return view('playlist.edit');
    }
}
