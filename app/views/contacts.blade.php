@extends('layout')

@section('content')
    @foreach($contacts as $contact)
        <p>
        	{{ $contact->first_name }}
            {{ $contact->last_name }}
            {{ $contact->phone_number }}
            <a href="{{route('edit')}}/{{$contact->id}}">Edit</a>
        </p>
    @endforeach
@stop
