@extends('layout')

@section('content')
    @foreach($contacts as $contact)
        <p>
        	{{ $contact->first_name }}
            {{ $contact->last_name }}
            {{ $contact->phone_number }}
        </p>
    @endforeach
@stop
