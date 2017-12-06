@extends('layout')

@section('title')
    <title>The Blondie - Shoes</title>
@endsection
@section('content')
    <div class="container slideimages">
        <header class="zapatosmargen">
            <h1 class="gold" >Nuestros Zapatos especialemtne diseñados para vos! </h1>
            <p class="gold">Elegi el que mas te guste entre nuestra amplia collecion</p>
        </header>
        <div class="row muestra ">
            @foreach($zapatos as $zapato)
            <div class="col-xs-12 col-sm-4 col-md-2 growup ">
                <div class="panel">
                    <div class="panel-heading">{{$zapato->name}}</div>
                        <a href="http://127.0.0.1:8000/Producto/{{$zapato->id}}">
                            <div class="panel-bodyZapatos">
                                <img src="/{{$zapato->image}}" class="img-responsive" style="width:100%" alt="Image">
                            </div>
                        </a>
                    <div class="panel-footer">
                        {{$zapato->description}}
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        {{ $zapatos->links() }}
    </div><br>
    <br><br>
@endsection