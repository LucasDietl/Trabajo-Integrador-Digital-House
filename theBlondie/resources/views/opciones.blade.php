@extends('layout')
@section('title')
    <title>Opcion Landia</title>
@endsection
@section('content')
    <div class="container  slideimages">
        <h1>Estas son la Opciones que posee el administrador:</h1>
        <ul>
            <a href="/Productos/Modificar"><li>Modificar un Producto por su nuemero de ID</li></a>
            <a href="/Productos/Agregar"><li>Agregar un Producto nuevo</li></a>
            <a href="/Productos/Borrar"><li>Borrar un Producto</li></a>
        </ul>
    </div>
@endsection