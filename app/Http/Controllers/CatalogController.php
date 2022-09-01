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
        $productsByCategory =  Product::all();

        return view('layouts.catalog.catalog',
            ['categories' => $categories, 'productsByCategory' => $productsByCategory]
        );

    }
    // for category page
    public function category($id){

        $category = Category::findOrFail($id);
        $categories = Category::all();

        $productsByCategory =  Product::where('Category_id', $id)->get();

        return view('layouts.catalog.catalog',
            ['category' => $category, 'categories' => $categories, 'productsByCategory' =>  $productsByCategory
            ]
        );

    }

    public function detail($id,$product_id){

        $product = Product::where('id', $product_id)->get();
        $category = Category::findOrFail($id);

        return view('layouts.catalog.detail',
            ['product' => $product[0], 'category' => $category]
        );

    }
}
