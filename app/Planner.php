<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    protected $fillable = ['info_text', 'todo_list', 'playlists', 'planner_image'];

    public function festival()
    {
        return $this->belongsTo('App\Festival');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
