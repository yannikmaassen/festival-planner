<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Planner;

class FriendController extends Controller
{
    public function add(Planner $planner)
    {
        return view('friends.add', [
            'currentPlanner' => $planner
        ]);
    }

    public function searchFriends(Planner $planner)
    {
        $query = request()->input('searchFriends');
        $friends = User::where('user_name', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%")
            ->get();

        return view('friends.search', [
            'query' => $query,
            'friends' => $friends,
            'currentPlanner' => $planner
        ]);
    }
}
