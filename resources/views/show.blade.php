@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-outline-dark">Go back</a>
    <h1 class="mt-3">{{$todo->title}}</h1>
    <div class="text-danger col-form-label border-bottom ">{{$todo->due}}</div>
    <br>
    <p>{{$todo->content}}</p>
    <div class="d-flex flex-row">
        <a href="/todo/{{$todo->id}}/edit" class="btn btn-secondary" style="margin-right: 16px;">Edit</a>
        <form method="post" action="/todo/{{$todo->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
