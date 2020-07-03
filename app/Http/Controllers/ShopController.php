<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->category){
            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('name', request()->category);
            })->get();
            
            $categories = Category::all;
        }else{
            $products = Product::inRandomOrder()->get();
            $categories = Category::all();
        }
        
        return view('pages.shop')->with([
            'products' => $products, 
            'categories' => $categories,
        ]);

    }

   
}
