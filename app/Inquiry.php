<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    public function profession()
    {
        return $this->belongsTo('App\Profession');
    }

    public function user()
    {
        return $this->belongsTo('App\Profession');
    }
    
}
