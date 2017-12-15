@extends('layout')

@section('title')
    <title>The Blondie - Shoes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
@section('content')
    <div class=" slideimages">
        <!--<header class="zapatosmargen">
            <section>
                <h1 class="gold" >Nuestros Zapatos especialemtne diseñados para vos! </h1>
                <p class="gold">Elegi el que mas te guste entre nuestra amplia collecion</p>
            </section>
        </header> -->
        <div class="carusel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item carusel active">
                        <img src="{{asset('images/comingsoon.jpg')}}" alt="" style="width:100%;">
                            <div class="carousel-caption">
                                <h3 style="color: #000;">The Blondie - Shoes</h3>
                                <p style="color: #000;">Thank you!</p>
                            </div>
                    </div>

                    <div class="item carusel">
                        <img src="{{asset('images/summer18.jpg')}}" alt="" style="width:100%;">
                            <div class="carousel-caption">
                                <h3 style="color: #000;">The Blondie - Shoes</h3>
                                <p style="color: #000;" >LOV3</p>
                            </div>
                    </div>

                    <div class="item carusel">
                        <img src="{{asset('images/cactuswide.jpg')}}" alt="" style="width:100%;">
                            <div class="carousel-caption">
                                <h3 style="color: #000;">The Blondie - Shoes</h3>
                                <p style="color: #000;">Good Times!!</p>
                            </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row muestra">
                @foreach($zapatos as $zapato)
                <div class="col-xs-12 col-sm-4 col-md-4 growup ">
                    <div class="panel format">
                        <div class="">
                            <div class="nombre">{{$zapato->name}}</div>
                            <div class="precio">${{$zapato->precio}}</div>
                        </div>
                            <a href="http://127.0.0.1:8000/Producto/{{$zapato->id}}">
                                <div class="panel-bodyZapatos">
                                    <span class="opacity" style="background-color: black"><img src="/{{$zapato->image}}" class="img-responsive" style="width:100%" alt="Imagen"></span>
                                </div>
                            </a>
                        <div class="panel2-footer">
                            {{$zapato->description}}
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
                <div class="container containerpaginator">
                    {{ $zapatos->links('vendor.pagination.bootstrap-4') }}
                </div>
        </div>
    </div><br>
    <br><br>
@endsection