<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel Lab' }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; }
        .nav { background: #f8f9fa; padding: 15px; margin-bottom: 20px; }
        .nav a { margin-right: 15px; text-decoration: none; color: #007bff; }
        .content { padding: 20px; border: 1px solid #dee2e6; border-radius: 5px; }
        .debug-info { background: #fff3cd; padding: 10px; margin: 10px 0; border-radius: 3px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="{{ route('home') }}">Головна</a>
            <a href="{{ route('about') }}">Про нас</a>
            <a href="{{ route('status') }}">Статус</a>
            <a href="{{ route('echo') }}">Echo API</a>
            <a href="{{ route('about', ['mode' => 'debug']) }}">Debug Mode</a>
        </div>
        
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
