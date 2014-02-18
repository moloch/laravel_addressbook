@extends('layout')

@section('content')
   {{ Form::open(array('route' => 'edit')) }}
    <p>
    	{{ Form::label('first_name', 'First name:') }}
    	{{ Form::text('first_name') }}
    </p>
    <p>
    	{{ Form::label('last_name', 'Last name:') }}
		{{ Form::text('last_name') }}
    </p>
    <p>
    	{{ Form::label('phone_number', 'Phone number:') }}
    	{{ Form::text('phone_number') }}
    </p>
    {{ Form::submit('Submit') }}
    {{ Form::close() }}  
@stop