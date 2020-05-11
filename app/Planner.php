<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    protected $fillable = ['festival_id', 'todo_list', 'playlist', 'planner_image'];

    public function planner()
    {
        return $this->belongsTo('App\Festival');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
