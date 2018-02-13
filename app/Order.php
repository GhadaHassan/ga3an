<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function chief()
    {
        return $this->belongsTo('App\Chief');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function delivery()
    {
        return $this->belongsTo('App\Delivery');
    }

    public function plates()
    {
        return $this->belongsToMany('App\Plate')->withPivot('size_id', 'quantity')->as('details');
    }
}
