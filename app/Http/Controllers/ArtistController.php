<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function search()
    {
        return view('artist.search');
    }
}
