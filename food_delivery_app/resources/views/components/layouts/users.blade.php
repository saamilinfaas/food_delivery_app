@extends('components.layouts.layout')
@section('title','Al-Faa customers List')
@section('content')

<section>
    <div>
        @foreach ($users as $user)
        <div>
            <h4>{{$user->name}}</h4>
        </div>

        @endforeach
    </div>
</section>

@endsection
