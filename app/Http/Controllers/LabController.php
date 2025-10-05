<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        return view('lab.index', [
            'title' => 'Головна сторінка',
            'message' => 'Ласкаво просимо до лабораторної роботи!'
        ]);
    }

    public function about(Request $request)
    {
        $mode = $request->query('mode');
        
        return view('lab.about', [
            'title' => 'Про нас',
            'mode' => $mode,
            'debug_info' => $mode === 'debug' ? [
                'timestamp' => now(),
                'url' => $request->fullUrl(),
                'user_agent' => $request->userAgent()
            ] : null
        ]);
    }

    public function status()
    {
        return view('lab.status', [
            'title' => 'Статус системи',
            'status' => [
                'app' => config('app.name'),
                'environment' => config('app.env'),
                'debug' => config('app.debug'),
                'time' => now()->format('Y-m-d H:i:s'),
                'php_version' => PHP_VERSION
            ]
        ]);
    }

    public function echo(Request $request)
    {
        if ($request->query('mode') === 'debug') {
            return response()->json([
                'message' => 'Debug mode active',
                'request_data' => [
                    'query_params' => $request->query(),
                    'headers' => $request->headers->all(),
                    'method' => $request->method(),
                    'ip' => $request->ip()
                ],
                'timestamp' => now()->toISOString()
            ]);
        }

        return response()->json([
            'message' => 'Hello from Laravel!',
            'timestamp' => now()->toISOString(),
            'status' => 'success'
        ]);
    }
}
