<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function profession()
    {
        return $this->belongsTo('App\Profession');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
