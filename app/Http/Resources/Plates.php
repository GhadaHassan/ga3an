<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Plates extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'name' => $this->name,
            'Description' => $this->Description,
            'img' => $this->img,
            'time' => $this->time
        ];
    }
}
