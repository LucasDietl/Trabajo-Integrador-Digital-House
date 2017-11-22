@extends('layout')
@section('title')
    <title>The Blondie - Shoes</title>
@endsection
@section('content')
    <div class="container  slideimages">
        <h1>Selecione el Id del Producto a Modificar</h1>
        <form class="form-horizontal" method="POST" action="/Productos/Modificar" >
            <div class="form-group">
                <input id="id" name="id" type="text">
                <button type="submit"> Enviar </button>
            </div>
        </form>

    </div>
@endsection