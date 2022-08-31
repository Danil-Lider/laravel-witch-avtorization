<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){

        $categories = Category::all();

        return view('layouts.catalog.catalog-header',
            ['categories' => $categories]
        );
    }

    public function category($id){

        $category = Category::findOrFail($id);
        $categories = Category::all();

        return view('layouts.catalog.catalog-header',
            ['category' => $category, 'categories' => $categories
            ]
        );

    }
}
