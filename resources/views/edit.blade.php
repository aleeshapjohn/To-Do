@extends('layouts.app')

@section('content')
    <a href="/todo/{{$todo->id}}" class="btn btn-outline-dark">Go back</a>
    <h1 class="mt-3">Edit To-do</h1>
    <form method="post" action="/todo/{{$todo->id}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{$todo->title}}">
        </div>
        <div class="form-group mt-3">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Enter content" value="{{$todo->content}}">
        </div>
        <div class="form-group mt-3">
            <label for="due">Due date</label>
            <input type="text" class="form-control" name="due" id="due" placeholder="Enter due" value="{{$todo->due}}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection
