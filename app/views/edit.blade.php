@extends('layout')

@section('content')
   {{ Form::model($contact, array('route' => 'edit', $contact->id)) }}
   {{ Form::hidden('id', $contact->id) }}
   <ul>
     <li>
    	{{ Form::label('first_name', 'First name:') }}
    	{{ Form::text('first_name') }}
      </li>
      <li>
    	{{ Form::label('last_name', 'Last name:') }}
		{{ Form::text('last_name') }}
      </li>
      <li>
    	{{ Form::label('phone_number', 'Phone number:') }}
    	{{ Form::text('phone_number') }}
      </li>
    </ul>
    {{ Form::submit('Submit') }}
    {{ Form::close() }}  
@stop