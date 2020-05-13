<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    protected $fillable = ['name', 'start_date', 'end_date', 'genre_1', 'genre_2', 'genre_3', 'genre_4', 'genre_5', 'headliner_1', 'headliner_2', 'headliner_3', 'headliner_4', 'headliner_5', 'description', 'todo_list', 'playlist', 'planner_image'];


    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
