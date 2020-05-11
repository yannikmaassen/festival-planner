<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    protected $fillable = ['name', 'start_date', 'end_date', 'genres', 'headliner', 'description'];

    public function planner()
    {
        return $this->hasMany('App\Planner');
    }
}
