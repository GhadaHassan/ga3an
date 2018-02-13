<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function sizes()
    {
        return $this->belongsToMany('App\Size');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
