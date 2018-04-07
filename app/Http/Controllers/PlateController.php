<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Plates;
use App\Http\Resources\PlateSizes;
use App\Plate;
use App\Size;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($plate_id,$size_id)
    {
        $plate = Plate::find($plate_id);
        $size = Size::find($size_id);
        return new PLateSizes($plate,$size);
    } 
    public function store(Request $request)
    {
        return PlateSizes::collection(Plate::all())->sizes()
        ->additional(['status' => 'success'
        ]);
    }

  
}
