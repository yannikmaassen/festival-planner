<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FriendController extends Controller
{
    public function searchFriends()
    {
        $query = request()->input('searchFriends');
        $friends = User::where('user_name', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%")
            ->get();

        return view('friends.search', [
            'query' => $query,
            'friends' => $friends
        ]);
    }

    public function add()
    {
        return view('friends.add');
    }

    public function edit()
    {
        return view('friends.edit');
    }
}
