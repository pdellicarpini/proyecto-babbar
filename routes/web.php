<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/nosotros', [\App\Http\Controllers\HomeController::class, 'about']);
