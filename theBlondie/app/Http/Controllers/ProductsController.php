<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    protected function validator(array $data)
    {
        dd($_POST);
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'sku'=>'required|string|max:255|unique:products',
            'color' => 'required|string|max:255',
            'stock' => 'required|integer',
            'precio' => 'required|float',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Product::create([
            'name' => $data['name'],
            'sku' => $data['sku'],
            'color' => $data['color'],
            'stock' => $data['stock'],
            'precio' => $data['precio'],

        ]);
    }


    public function showForm(){
        return view('AgregarProductosFormulario');
    }
}
