<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Planner;

class FriendControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_addFriends_shows_search_for_friends(Planner $planner)
    {
        $response = $this->get(route('friends.add', ['planner' => $planner]));

        $response->assertStatus(200);
        $response->assertViewIs('friends.add');
    }
}
