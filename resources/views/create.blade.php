@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-outline-dark">Go back</a>
    <h1 class="mt-3">Create a new To-do</h1>
    <form method="post" action="/todo">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{old('title')}}">
        </div>
        <div class="form-group mt-3">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Enter content" value="{{old('content')}}">
        </div>
        <div class="form-group mt-3">
            <label for="due">Due date</label>
            <input type="text" class="form-control" name="due" id="due" placeholder="Enter due" value="{{old('due')}}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection
