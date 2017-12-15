@extends('layout')
@section('title')
    <title>Opcion Landia</title>
@endsection
@section('content')
    <div class="container  slideimages altominimo">
        <div class="centrado option">
            <h1 id="optionH1">Opciones del administrador :</h1>
                @if (session("status"))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
                    </div>
                @endif

            <ul>
                <li class="optionLi">
                    <h3><a class="optionAdmin" href="/Productos/Agregar"><img style="height: 50px; width: 50px; margin-right: 10px" src="../images/add.svg" />Agregar</a></h3>
                    <a class="optionAdmin" href="/Productos/Agregar"><p>En esta seccion va a poder agregar un producto</p></a>
                </li>

                <li class="optionLi">
                    <h3><a class="optionAdmin" href="/Productos/Modificar"><img style="height: 50px; width: 50px; margin-right: 10px" src="../images/modify.jpg" />Modificar</a></h3>
                    <a class="optionAdmin" href="/Productos/Modificar"><p>En esta seccion va a poder modificar un producto existentepor numero de ID</p></a>
                </li>

                <li>
                    <h3><a class="optionAdmin" href="/Productos/Borrar"><img style="height: 50px; width: 50px; margin-right: 10px" src="../images/delete.png" />Borrar</a></h3>
                    <a  class="optionAdmin" href="/Productos/Borrar"><p>En esta seccion va a poder borrar un producto existente por numero de ID</p></a>
                </li>

            </ul>
        </div>
    </div>
@endsection