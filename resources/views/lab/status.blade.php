@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    
    <h3>Інформація про систему:</h3>
    <ul>
        @foreach($status as $key => $value)
            <li><strong>{{ $key }}:</strong> {{ $value }}</li>
        @endforeach
    </ul>
@endsection
