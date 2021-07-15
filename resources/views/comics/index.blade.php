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
                    <a href="{{route('comics.show',$comic->id)}}">View</a>
                    <a href="{{route('comics.edit',$comic->id)}}">Edit</a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
</div>
<div class="container">
    <a href="{{route('comics.create')}}" type="button" class="btn btn-primary btn-block">Add new Comic</a>
</div>
@endsection