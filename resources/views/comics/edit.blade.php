@extends('layout.app')

@section('title', 'Home page')

@section('content')

<div class="container">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" requiredaria-describedby="helperTitle" value='{{$comic->title}}'>
          <small id="helperTitle" class="text-muted">Edit the title of the comic here</small>
        </div>
        <div class="form-group">
            <label for="cover">Cover image URL</label>
            <input type="text" name="cover" id="cover" class="form-control" requiredaria-describedby="helperImage" value='{{$comic->cover}}'>
            <small id="helperImage" class="text-muted">Edit the URL of the cover image here</small>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" requiredaria-describedby="helperImage" step="0.01" value='{{$comic->price}}'>
            <small id="helperImage" class="text-muted">Edit price here</small>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>    
</div>

@endsection