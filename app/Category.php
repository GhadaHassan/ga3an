<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'img',
    ];
    public function plate()
    {
        return $this->hasMany('App\Plate');
    }
}
