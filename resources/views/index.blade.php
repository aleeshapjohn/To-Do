@extends('layouts.app')

@section('content')
    @include('inc.navbar')

     @if (count($todos) > 0)
         @foreach( $todos as $todo)
             <div class="card p-2 mt-2">
                 <a href="todo/{{$todo->id}}" class="text-decoration-none text-black">
                     <h2>{{ $todo->title }}</h2>
                     <span class="label label-danger">{{ $todo->due }}</span>
                 </a>
             </div>
         @endforeach
    @endif
@endsection
