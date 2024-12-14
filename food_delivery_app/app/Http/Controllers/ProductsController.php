<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
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
        $categories = Category::all();
        return view('components.products.addproduct',['categories'=>$categories]);
    }

    public function category($name){

        return view('components.products.category.category');
    }

    public function show($id){
        $product = Product::find($id);
        $user_id = auth()->user()->id;
        $cart = Cart::where('user_id',$user_id)->where('product_id',$id)->first();

        return view('components.products.singleproduct',['product'=>$product,'cart'=>$cart]);
    }

    public function create(Request $request){
        $validated = $request->validate([
            'name'=>['required'],
            'weight'=>['required','numeric'],
            'category_id'=>['required','numeric'],
            'description'=>['required','min:20'],
            'price'=>['required','numeric'],
            'image'=>['required','image','max:2024'],
            'quantity'=>['required','numeric'],


        ]);

        if($request->file('image')->isValid() && $request->hasFile('image')){
            $imageName = now()->format('d_m_Y_H_i_s') . '_' . $request->file('image')->getClientOriginalName();

        // Store the image in the 'products' folder in the public disk
        $path = $request->file('image')->storeAs('products', $imageName, 'public');

        // Add the image path to the validated data array
        $validated['image'] = $path;
        }

        Product::create($validated);
        return back()->with('success','Product Created Success');
    }
}
