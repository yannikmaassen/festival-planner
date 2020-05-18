<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'profile_name', 'profile_image', 'profile_description', 'festival_id', 'profile_list'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
