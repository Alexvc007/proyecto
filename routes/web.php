<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlexController;
use App\Http\Controllers\yordyController;

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta de Alex 
Route::get('/alex', [AlexController::class, 'index']);

// Ruta de Joaquin
Route::get('/joaquin', function () {
    return view('joaquin');
});

// Ruta de Gabriel 
Route::get('/gabriel', function () {
    return view('gabriel');
});

// Ruta de Yordy 
Route::get('/yordy', [yordyController::class, 'index']);

