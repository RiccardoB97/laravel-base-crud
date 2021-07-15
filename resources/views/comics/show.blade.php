@extends('layout.app')

@section('title', 'Home page')

@section('content')
    <div class="container">
        <div class="card text-center d-flex flex-column align-items-center" style="width: 20rem">
            <h4>{{$comic->title}}</h4>
            <img src="{{$comic->cover}}" width='200' alt="">
            <small>{{$comic->price}}</small>
        </div>
    </div>

@endsection