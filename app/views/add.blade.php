@extends('layout')

@section('content')
    {{ Form::open(array('route' => 'add')) }}
    {{ Form::submit('Click Me!') }}
    {{ Form::close() }}  
@stop