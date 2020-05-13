<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    public function planner()
    {
        return $this->hasMany('App\Planner');
    }
}
