<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');

    }
    public function category()
    {
        return $this->hasOne('App\Category');

    }
}
