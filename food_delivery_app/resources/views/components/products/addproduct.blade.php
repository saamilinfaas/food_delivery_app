@extends('components.layouts.layout')
@section('title','Add products')
@section('content')

<div class=" bg-purple-400 px-5 py-5 rounded-xl">
    <div>
        @if (session('success'))
        <p>
            <span class="bg-green-200 text-green-900">{{session('success')}}</span>
        </p>

        @endif
    </div>



    <form action="/products" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input value="{{old('name')}}" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required name="name"/>
            </div>
            @error('name')
            <div>
                <span class="text-red-600">{{$message}}</span>
            </div>

            @enderror
        </div>
        <div>
            <div>
                <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight (g)</label>
                <input value="{{old('weight')}}" type="number" id="weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required name="weight"/>
            </div>
            @error('weight')
            <div>
                <span class="text-red-600">{{$message}}</span>
            </div>

            @enderror
        </div>
        <div>
            <div class="flex flex-row justify-center items-center gap-2 my-3">
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select name="category_id" id="category" class="bg-purple-300">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" class="bg-purple-300"
                            @if(old('category_id') == $category->id) selected @endif>
                            {{$category->id}} ->{{$category->name}}
                        </option>
                    @endforeach
                </select>

            </div>
            @error('category_id')
            <div>
                <span class="text-red-600">{{$message}}</span>
            </div>

            @enderror
        </div>
        <div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <input value="{{old('description')}}" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required name="description"/>
            </div>
            @error('description')
                <div>
                    <span class="text-red-600">{{$message}}</span>
                </div>

                @enderror
        </div>
        <div>
            <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                <input value="{{old('price')}}" type="number" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required name="price"/>
            </div>
            @error('price')
                <div>
                    <span class="text-red-600">{{$message}}</span>
                </div>

                @enderror
        </div>
       <div>
        <div>
            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
            <input value="{{old('quantity')}}" type="number" id="qunatity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required name="quantity"/>
        </div>
        @error('quantity')
        <div>
            <span class="text-red-600">{{$message}}</span>
        </div>

        @enderror
       </div>
        <div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Image</label>
    <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file">
            </div>
            @error('image')
        <div>
            <span class="text-red-600">{{$message}}</span>
        </div>

        @enderror
        </div>


    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-4">Submit</button>


    </form>
</div>

@endsection
