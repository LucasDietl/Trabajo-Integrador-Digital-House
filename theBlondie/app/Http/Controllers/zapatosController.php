<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class zapatosController extends Controller
{
    public function show(){
        return view('zapatos');
    }
}
