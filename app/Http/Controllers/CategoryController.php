<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Categories;
use App\Category;
class CategoryController extends Controller
{
    public function index() {
        return Categories::collection(Category::all())
        ->additional(['status' => 'success'
        ]);
    }
    public function testCat()
    {
        # code...
        return [
            'test' => 'success test'
        ];
    }
}
