@extends('layouts.email')

@section('content')
    <h1>Inquiry from the Website</h1>

    <p><strong>Name:</strong> {{$data['name']}}</p>

    <p><strong>Email:</strong> {{$data['email']}}</p>

    <p><strong>Message:</strong></p>

    <p>{{$data['message']}}</p>
@endsection
