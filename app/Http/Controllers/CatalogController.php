<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    // for main page
    public function index(){

        $categories = Category::all();

        return view('layouts.catalog.catalog',
            ['categories' => $categories]
        );

    }
    // for category page
    public function category($id){

        $category = Category::findOrFail($id);
        $categories = Category::all();

        return view('layouts.catalog.catalog',
            ['category' => $category, 'categories' => $categories
            ]
        );

    }

    public function detail($id,$product_id){

        $product = Product::where('id', $product_id)->get();

        return view('layouts.catalog.detail',
            ['product' => $product[0]]
        );

    }
}
