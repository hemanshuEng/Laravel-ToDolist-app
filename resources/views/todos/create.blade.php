@extends('layouts.app')
@section('content')

    <h1>Create Todo</h1>
    {!!Form::open(['action' => 'TodosController@store','method'=>'post'])!!}
    {{ Form::bsText('text') }}
    {{ Form::bsTextarea('body') }}
    {{ Form::bsText('due') }}
{{-- <div class="form-group">
  <label for="due">Due</label>
  <input type="date" class="form-control" name="due" id="datetimepicker2"  placeholder="">
</div> --}}
    {{ Form::bsSubmit('submit',['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection
