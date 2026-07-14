<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('gabriel');
    //return view('joaquin');
    return view('alex');
    return view('welcome');
});
Route::get('/alex', function (){
    return view('alex');
});
Route::get('/joaquin', function (){
    return view('joaquin');
});
Route::get('/gabriel', function (){
    return view('gabriel');
});
