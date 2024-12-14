<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    //
    public function index(){
        $category = Category::all();
        return view('components.products.category.category',['catogeries'=>$category]);
    }
    public function add(){
        return view('components.products.category.add');
    }
    public function show($name){
        $category = Category::where('name',$name)->get();
        return $category;
    }
    public function create(Request $request){
       $validated = $request->validate([
            'name'=>['string'],
        ]);
        $user = Auth::check();
        if($user){
            $category = Category::create($validated);
            return back()->with('success','Category created successfully');
        }else{
            return response('You are not authenticated to create category',400);
        }
    }

}
