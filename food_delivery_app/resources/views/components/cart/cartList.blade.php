@extends('components.layouts.layout')
@section('title','Cart List')
@section('content')

<div class="text-white ">

    <table class="border">
        <thead class="border">
            <tr >
                <th class="border">Product Name</th>
                <th class="border">Product ID</th>
                <th class="border">Unit price</th>
                <th class="border">Quantity</th>
                <th class="border">Amount</th>
                <th class="border">DELETE</th>
            </tr>
        </thead>
        <tbody class="odd:bg-gray-200">
            @foreach ($carts as $cart)

            <tr class="border ">
                <td class="border">{{$cart->product->name}}</td>
                <td class="border text-center">{{$cart->product->weight}}g </td>
                <td class="border text-center">Rs: {{$cart->product->price}}</td>
                <td class="border text-center">{{$cart->quantity}}</td>
                <td class="border text-center">Rs: {{$cart->quantity*$cart->product->price}}</td>
                <td class="border ">
                    <form action="/purchase/cart/{{$cart->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="bg-red-600 px-4 py-2 w-full rounded-full hover:bg-red-900">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <tr>

                <td></td>
                <td></td>
                <td></td>
                <td class="border-r">Total</td>
                <td class="">Rs: {{$total}}</td>
            </tr>

        </tbody>

    </table>
    <div class="flex flex-col items-center justify-center">
        <div>
            {{$carts->links()}}
        </div>
    </div>




</div>

@endsection
