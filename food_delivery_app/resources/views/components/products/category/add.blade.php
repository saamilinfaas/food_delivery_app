@extends('components.layouts.layout')

@section('title','Al-Faa Category page')
@section('content')




<div class="border-2">
    <div >
        <div>
            @if (session('success'))
            <div>
                <h4 class="bg-green-300 text-green-700 font-bold rounded-t-2xl">{{session('success')}}</h4>
            </div>
            @endif
        </div>
        <form method="POST" action="/products/category">
            @csrf
            <div class="w-[400px] flex flex-col bg-gray-500 px-12 py-5">

                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <input type="text" id="category" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter category" required value="{{old('category')}}"/>
                    @error('category')
                    <span>{{$message}}</span>

                    @enderror
                </div>



            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-4">Create</button>
        </form>
    </div>
</div>





@endsection
