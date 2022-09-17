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

        if($categories){
            return view('layouts.catalog.catalog',
                ['categories' => $categories]
            );
        }else{
            return 'Нету категорий';
        }



    }
    // for category page
    public function category($slug){

        $category = Category::where('slug',$slug)->firstOrfail();
        $categories = Category::all();

        return view('layouts.catalog.catalog',
            ['category' => $category, 'categories' => $categories
            ]
        );

    }

    public function detail($slug,$product_id){

        $product = Product::where('id', $product_id)->get();

        return view('layouts.catalog.detail',
            ['product' => $product[0]]
        );

    }
}
