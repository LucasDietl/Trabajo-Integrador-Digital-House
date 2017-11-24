@extends('layout')
@section('title')
    <title>The Blondie - Shoes</title>
@endsection
@section('content')
    <div class="container  slideimages">
        <div class="centrado">
            <h1>Selecione el Id del Producto a Eliminar</h1>
            <p>Una vez eliminado el mismo no se podra rescatar</p>
            <form class="form-horizontal" method="POST" action="/Productos/Borrar" >
                {{csrf_field()}}
                <div class="form-group">
                    <input id="id" name="id" type="text" value=" ">
                    <button type="submit" class="btn btn-primary" > Borrar </button>
                </div>
            </form>
        </div>
    </div>
@endsection