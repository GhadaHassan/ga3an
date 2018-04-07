<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Categories;
use App\Http\Resources\Plates;
use App\Category;
use App\Plate;
class CategoryController extends Controller
{
    public function index() {
        return Categories::collection(Category::all())
        ->additional(['status' => 'success'
        ]);
    }
    public function show($id)
    {
        $category = Category::find($id);
        return Plates::collection(Plate::$category->plates)
        ->additional(['status' => 'success'
        ]);
    }
}
