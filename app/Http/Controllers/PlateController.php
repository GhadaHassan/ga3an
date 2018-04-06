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
    public function index()
    {
        //
    } 
    public function store(Request $request)
    {
        return PlateSizes::collection(Plate::all())->sizes()
        ->additional(['status' => 'success'
        ]);
    }

  
}
