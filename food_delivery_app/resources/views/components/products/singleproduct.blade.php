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
                    @if ($cart == null )
                    <form action="/purchase" method="post">
                        @csrf
                        <div>

                            <label for="quantity" class="font-bold">Quantity : </label>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="number" name="quantity" id="quantity" class="rounded-xl w-[75px] bg-purple-300" value="1">
                            <button class="bg-purple-200 text-puple-700 font-bold text-lg px-4 py-2 rounded-full mt-2 hover:bg-purple-300" type="submit">Add to Cart</button>

                        </div>
                    </form>
                    @endif

                    @if ($cart)
                    <form action="{{route('purchase.destroy',$cart->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="bg-purple-300 px-4 py-2 rounded-full hover:bg-purple-600 mt-2">Remove Cart</button>
                        </form>
                    @endif

                </div>

            </div>

        </div>
        <div class="m-4">
            <p class="w-full overflow-hidden">{{$product->description}}</p>
        </div>


    </div>
@endisset

<script>
    const addcart = ()=>{

    }
</script>

@endsection









