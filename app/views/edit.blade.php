@extends('layout')

@section('content')
   {{ Form::model($contact, array('route' => 'edit', $contact->id)) }}
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
    {{ Form::submit('Click Me!') }}
    {{ Form::close() }}  
@stop