<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    protected $fillable = ['user_id', 'profile_name', 'profile_image', 'profile_description', 'festival_id', 'profile_list', 'artist_uri', 'artist_genres', 'artist_href', 'artist_id', 'artist_images', 'artist_name'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getImageAttributeProfile($value)
    {
        if ($value) {
            return Storage::url($value);
        }

        return '/images/platzhalter_img_150x150.jpg';
    }
}
