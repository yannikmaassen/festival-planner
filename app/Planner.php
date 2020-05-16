<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    protected $fillable = ['festival_id', 'info_text'];

    public function festival()
    {
        return $this->belongsTo('App\Festival');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
