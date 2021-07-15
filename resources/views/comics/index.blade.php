@extends('layout.app')

@section('title', 'Home page')

@section('content')
<div class="container d-flex justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Cover</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->title}}</td>
                <td><img src="{{$comic->cover}}" width="100" alt=""></td>
                <td>{{$comic->price}}</td>
                <td>
                    <a href="">View</a>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
</div>
@endsection