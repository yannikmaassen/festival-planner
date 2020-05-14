<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    public function planner()
    {
        return $this->hasMany('App\Planner');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
