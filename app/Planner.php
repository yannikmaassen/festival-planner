<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    protected $fillable = ['festival_id', 'info_text', 'todo_list', 'playlist_1', 'playlist_2', 'planner_image'];

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

        return '/images/blog_festival_Main.jpg';
    }
}
