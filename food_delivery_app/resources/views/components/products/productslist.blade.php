@extends('components.layouts.layout')

@section('title','Home Page | Ampara Food delivery')
@section('content')

<div class="flex flex-col gap-2">
    <div class="flex flex-row justify-end items-center fixed right-0">
        {{-- <p>Products Page content</p> --}}
    <a href="/products/add" class="bg-purple-700 px-6 py-2 rounded-full ml-4 hover:bg-purple-950 border font-semibold hover:border-purple-400">ADD</a>
    </div>
<div class="flex flex-col md:flex-row gap-2 flex-wrap">
@isset($products)
@foreach ($products as $product)

    <div class="bg-purple-500 px-5 py-2 rounded-xl w-[300px] border-2 hover:border-purple-800 md:w-[500px]">
        <div class="flex flex-col items-center justify-around ">
            <div class="w-24">
                <a href="{{"/products"."/".$product->id}}"><img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->image }}" ></a>

            </div>
            <div class="flex items-center">
                <h3 class="font-bold text-3xl">{{$product->name}}</h3>
                <span class="font-bold text-2xl ml-2 mt-1.5">{{$product->weight}}g</span>
            </div>
            <span class="text-xl font-bold">Rs: {{$product->price}}</span>
        </div>
        <p class="text-center"><span class="font-bold">Available QTY: </span>{{$product->quantity}}</p>
        <p class="w-full h-24 overflow-hidden">{{$product->description}}</p>

    </div>
@endforeach

@endisset
</div>
</div>
@endsection
