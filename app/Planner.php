<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    public function planner()
    {
        return $this->belongsTo('App\Festival');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
