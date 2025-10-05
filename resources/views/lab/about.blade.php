@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    
    @if($mode === 'debug')
        <div class="debug-info">
            <h3>Debug Information:</h3>
            <pre>{{ json_encode($debug_info, JSON_PRETTY_PRINT) }}</pre>
        </div>
    @endif
    
    <p>Це сторінка "Про нас".</p>
    <p>Режим: {{ $mode ?? 'normal' }}</p>
@endsection
