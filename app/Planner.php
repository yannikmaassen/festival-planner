<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    protected $fillable = ['festival_id', 'info_text', 'todo_list', 'playlist_href', 'playlist_id', 'playlist_images', 'playlist_name', 'playlist_uri', 'playlist_owner', 'playlist_tracks', 'planner_image'];

    public function festival()
    {
        return $this->belongsTo('App\Festival');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function getImageAttributePlanner($value)
    {
        if ($value) {
            return Storage::url($value);
        }

        return '/images/blog_festival_Main_original.jpg';
    }
}
