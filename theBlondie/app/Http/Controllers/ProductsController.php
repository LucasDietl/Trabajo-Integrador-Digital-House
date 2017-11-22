<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {

        $rules=  [
            'name' => 'required|string|max:255',
            'sku' =>'required|string|max:255|unique:products',
            'color' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'precio' => 'required|integer|min:0',
            'imagen' => 'required',
            'description' => 'required|string|max:1000',


        ];

        $messages = [
            "required" => "El campo :attribute es requerido",
            "numeric" => "El campo :attribute debe ser un número",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "max" => "El campo :attribute tiene un máximo de :max",
            "imagen" => "El campo :attribute debe ser una imagen",
        ];

        $this->validate($request, $rules, $messages);

        $photo = $request->file("imagen");

        $photoName = $photo->store("public/products");

        $photoName = str_replace("public", "storage", $photoName);

        $producto = new Product();
        $producto->name = $request["name"];
        $producto->sku = $request["sku"];
        $producto->color = $request["color"];
        $producto->stock = $request["stock"];
        $producto->precio = $request["precio"];
        $producto->description = $request["description"];
        $producto->image = $photoName;

        $producto->save();


        return redirect("/Productos/Agregar")->with("status", "Exito");
    }

    public function show($id){
        $product = Product::find($id);
        return view('producto')->with('producto',$product);

    }

    public function showForm(){
        return view('AgregarProductosFormulario');
    }
    public function showModify($id){
        $product = Product::find($id);
        return view('ModificarProductos')->with('producto',$product);
    }
    protected function modify(Request $request)
    {

        $rules=  [
            'name' => 'required|string|max:255',
            'sku' =>'required|string|max:255',
            'color' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'precio' => 'required|integer|min:0',

            'description' => 'required|string|max:1000',


        ];

        $messages = [
            "required" => "El campo :attribute es requerido",
            "numeric" => "El campo :attribute debe ser un número",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "max" => "El campo :attribute tiene un máximo de :max",
            "imagen" => "El campo :attribute debe ser una imagen",
        ];

        $this->validate($request, $rules, $messages);

        if($request->file("imagen")!= null){
            $photo = $request->file("imagen");

            $photoName = $photo->store("public/products");

            $photoName = str_replace("public", "storage", $photoName);
        }

        $producto = Product::find($request["id"]);

        $producto->name = $request["name"];

        $producto->color = $request["color"];
        $producto->stock = $request["stock"];
        $producto->precio = $request["precio"];
        $producto->description = $request["description"];
        if($request->file("imagen")!= null){$producto->image = $photoName;}

        $producto->save();
        $id = $request["id"];

        return redirect("/Productos/Modificar/$id");
    }

    public function opciones(){
        return view('opciones');
    }

    public function showModifyId(){
        return view('seleccionarId');
    }

    public function desvio(Request $request){
        $id = $request["id"];
       return redirect("/Productos/Modificar/$id");
    }
}
