<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function inquiries()
    {
        return $this->hasMany('App\Inquiry');
    }

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }
}
