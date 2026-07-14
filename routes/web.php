<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlexController;

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/alex', function (){
    return view('alex');
});*/

Route::get('/alex', [AlexController::class, 'index']);

Route::get('/joaquin', function (){
    return view('joaquin');
});
Route::get('/gabriel', function (){
    return view('gabriel');
});
Route::get('/yordy', function (){
    return view('yordy');
});
