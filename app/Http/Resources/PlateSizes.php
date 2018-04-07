<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PlateSizes extends Resource
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
            'plate_id' => $this->plate_id,
            'size_id' => $this->size_id,
            'name' => $this->name,
            'size' => $this->size,
            'price' => $this->price
        ];
    }
}
