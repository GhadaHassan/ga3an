<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chief extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
