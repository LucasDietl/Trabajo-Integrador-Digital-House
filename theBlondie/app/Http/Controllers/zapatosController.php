<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class zapatosController extends Controller
{
    public function show(){
        $zapatos = Product::paginate(12);
        $zapato1 = Product::find(25);
        $zapato2 = Product::find(26);
        $zapato3 = Product::find(27);
        return view('zapatos')->with(['zapatos'=>$zapatos,'zapato1'=>$zapato1,'zapato2'=>$zapato2,'zapato3'=>$zapato3]);
    }

}
