<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    //
    public function myList (){
        $user_id = auth()->user()->id;
        $carts = Cart::where('user_id',$user_id)->get();
        $cartList = Cart::where('user_id',$user_id)->paginate(2);
        $total = 0;
        foreach($carts as $cart){
            $total += ($cart->quantity* $cart->product->price);
        }
        return view('components.cart.cartList',['carts'=>$cartList,'total'=>$total]);
    }

    public function create(Request $request){
        $validated = $request->validate([
            'quantity'=>['numeric','required'],
            'product_id'=>['required','numeric']
        ]);

        $validated['user_id'] = auth()->user()->id;

            $cart = Cart::where('product_id',$request->product_id)->where('user_id',auth()->user()->id)->first();
            if($cart === null){

                $cart = Cart::create($validated);
                return back();
            }

         return to_route('login');

    }
    public function destroy($id){
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return back();
    }
}
