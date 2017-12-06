<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class zapatosController extends Controller
{
    public function show(){
        $zapatos = Product::paginate(12);
        return view('zapatos')->with('zapatos',$zapatos);
    }

}
