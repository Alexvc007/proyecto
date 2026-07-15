<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlexController extends Controller
{
    public function index(){
        return view('alex');
    }
}
