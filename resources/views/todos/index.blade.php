@extends('layouts.app')
@section('content')
<h1>ToDos</h1>
@if (count($todos)>0)
    @foreach ($todos as $todo)
        <div class="card mb-2">
            <div class="card-body d-flex justify-content-between">
            <h5 class="card-title"><a href="todo/{{$todo->id}}">{{$todo->text}}</a><span class="badge badge-warning">{{$todo->due}}</span></h5>
            <form method="POST" action="todo/{{$todo->id}}">
                @csrf
                @method('DELETE')
                <button type="submit" style="border: 0; background: none;"><i class="fas fa-trash-alt fa-2x"></i></button>
            </form>


            </div>
        </div>

    @endforeach

@endif
@endsection

