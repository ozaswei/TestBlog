@extends('Frontend.master')

@section('title')
    Contact
@endsection

@section('content')

        <div class="title m-b-md">
            Contact
        </div>
        <h3>{{$name}}</h3>
        <p>Contact Number:: {{$contact}}</p>
        <p>Email :: {{$email}}</p>

@endsection

