<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('components.products.productslist',['products'=>$products]);
    }
    public function add(){
        return view('components.products.addproduct');
    }
    public function show($product){
        return view();
    }
    public function create(Request $request){
        $validated = $request->validate([
            'name'=>['required',]
        ]);

        Product::create($validated);
    }
}
