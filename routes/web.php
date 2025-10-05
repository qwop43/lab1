<?php

use App\Http\Controllers\LabController;
use Illuminate\Support\Facades\Route;

Route::middleware(['query.mode'])->group(function () {
    Route::get('/', [LabController::class, 'index'])->name('home');
    Route::get('/about', [LabController::class, 'about'])->name('about');
    Route::get('/status', [LabController::class, 'status'])->name('status');
    Route::get('/echo', [LabController::class, 'echo'])->name('echo');
});
