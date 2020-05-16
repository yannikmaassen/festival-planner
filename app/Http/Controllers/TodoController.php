<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planner;

class TodoController extends Controller
{
    public function add()
    {
        return view('todos.add');
    }

    // public function addToPlanner(Planner $planner)
    // {
    //     $this->validateData();

    //     return redirect()->route('planner.show');
    // }

    // public function edit(Planner $planner)
    // {
    //     return view('todos.edit');
    // }

    // public function validateData()
    // {
    //     return request()->validate([
    //         'todo_list' => 'min:3'
    //     ]);
    // }
}
