<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function add()
    {
        return view('todos.add');
    }

    public function edit()
    {
        return view('todos.edit');
    }
}
