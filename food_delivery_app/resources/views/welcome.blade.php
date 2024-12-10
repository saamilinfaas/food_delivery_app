@extends('components.layouts.layout')

@section('title','Al-Faa Foods Kalmunai')

@section('content')
<section class="w-full text-white px-6">

<h1>Hi, This is Al-Faa Foods Welcome Page </h1>
@if (auth()->user())

<p>{{auth()->user()->email}}</p>

@endif

@if ($errors->any())
<div>
    @foreach ($errors as $error)

    <p>{{$error}}</p>

    @endforeach
</div>

@endif

<div class="flex  flex-row relative">

    <div class="w-11/12 flex flex-row flex-1 mt-14 ml-2">
        <div class=" w-1/2 justify-start flex-1 bg-purple-400 rounded-xl">

        </div>

    </div>
</div>
</section>



@endsection
