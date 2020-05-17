<?php

namespace App;

use Illuminate\Support\Facades\Storage;
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

    public function getImageAttribute($value)
    {
        if ($value) {
            return Storage::url($value);
        }

        return 'https://via.placeholder.com/500x350';
    }
}
