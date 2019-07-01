@extends('layouts.app')

@section('content')
<a href="/" class="btn btn-outline-success">Go back</a>
    <div class="display-4">{{$todo->text}}</div>
    <div class="badge badge-warning"><h4>{{$todo->due}}</h4></div>
    <hr>
    <p>{{$todo->body}}</p>
    <br>
<div class ="d-flex justify-content-between">
<a href="{{$todo->id}}/edit"><i class="fas fa-edit fa-2x  "></i></a>
{!!Form::open(['action' =>[ 'TodosController@destroy',$todo->id],'method'=>'post'])!!}
{{ Form::hidden('_method','DELETE') }}
{{ Form::bsSubmit('delete',['class'=>'btn btn-danger']) }}
{!! Form::close() !!}
</div>
@endsection
