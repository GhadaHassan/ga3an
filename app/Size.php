<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    //
    public function plates()
    {
        return $this->belongsToMany('App\Plate');
    }
}
