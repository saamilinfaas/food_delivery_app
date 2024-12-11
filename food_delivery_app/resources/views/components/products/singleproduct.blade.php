@extends('components.layouts.layout')
@section('title','Al Faa '.$product->name)
@section('content')
@isset($product)


    <div class="bg-purple-600 px-5 py-2 rounded-xl  border-2 hover:border-purple-800 ">
        <div class="flex flex-row ">

            <div class="w-1/4">
                <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->image }}" >
            </div>

            <div class="flex flex-col items-center  mx-auto border border-purple-300 rounded-xl px-5 bg-purple-700">
                <div class="flex items-center mt-2">
                    <h3 class="font-bold text-3xl">{{$product->name}}</h3>
                    <span class="font-bold text-2xl ml-2 mt-1.5">{{$product->weight}}g</span>
                </div>
                <span class="text-xl font-bold">Rs: {{$product->price}}</span>
                <p class="text-center"><span class="font-bold">Available QTY: </span>{{$product->quantity}}</p>

                <div>
                    <button class="bg-purple-200 text-puple-700 font-bold text-lg px-4 py-2 rounded-full mt-2 hover:bg-purple-400">Add to Cart</button>
                </div>

            </div>


        </div>
        <div class="m-4">
            <p class="w-full overflow-hidden">{{$product->description}}</p>
        </div>


    </div>
@endisset

@endsection
