@extends('components.layouts.layout')
@section('title','Al Faa Products Category')
@section('content')

<div>
    <div>
        <button><a href="/products/category/add">ADD</a></button>
    </div>
    <div>
        @foreach ($categories as $category)
        <div>
            <h3> {{$category->name}} </h3>
        </div>
        @endforeach
    </div>
</div>

@endsection
