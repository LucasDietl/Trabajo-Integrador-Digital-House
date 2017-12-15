@extends('layout')
@section('title')
    <title>{{$producto->name}} </title>
@endsection
@section('content')
    <link href="https://fonts.googleapis.com/css?family=Allerta" rel="stylesheet">

    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/css/mdb.css" />-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/detalledeproducto.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/js/mdb.min.js"></script>

    <div class="prod_page slideimages">
        <div class="container altominimo">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="img-detalle-1">
                            <div class="nombre2">{{$producto->name}}</div>
                            <div class="precio2">${{$producto->precio}}</div>
                            <img style="width: 100%;" src="/{{$producto->image}}" class="img-detalle-2"/>
                        </div>
                    </div>
                    <!--Product Detail-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="product_detail_view">
                            <div class="pro_heading">
                                <h1>Modelo: {{$producto->name}}</h1>
                                <span class="new_coll">
                                 New Collection !!
                                </span>

                                <span id="stock_available">
                                     Stock : {{$producto->stock}} pares.
                                </span>
                                <button class="comprar">Comprar</button>
                            </div>

                            <div class="pro_rate">
                                $ {{$producto->precio}}
                            </div>

                            <div class="color_quantity">
                                <div class="color">
                                     <h3>Color:  {{$producto->color}}</h3>
                                </div>
                                <!--<div class="quantity">
                                    <form>
                                        <div class="from-group">
                                            <input type="text" width="70"/>

                                        </div>
                                    </form>
                                </div>-->
                            </div>

                            <!---->

                            <div class="col-md-12">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tabs-3 red" role="tablist">
                                    <li class="nav-item ">
                                        <a class=" black nav-link active" data-toggle="tab" href="#panel1" role="tab">Descripción</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class=" black nav-link" data-toggle="tab" href="#panel2" role="tab">Promociones</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="black nav-link" data-toggle="tab" href="#panel3" role="tab">Poductos Relacionados</a>
                                    </li>
                                </ul>
                                <!-- Tab panels -->
                                <div class="tab-content card">
                                    <!--Panel 1-->
                                    <div class="tab-pane fade in active" id="panel1" role="tabpanel">
                                        <br>
                                        <p class="black">{{$producto->description}}</p>
                                        <br>
                                    </div>
                                    <!--/.Panel 1-->
                                    <!--Panel 2-->
                                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                                        <br>
                                        <p class="black">Aquí irían las promociones y formas de pago</p>
                                        <br>
                                    </div>
                                    <!--/.Panel 2-->
                                    <!--Panel 3-->
                                    <div class="tab-pane fade" id="panel3" role="tabpanel">
                                        <br>
                                        <p class="black">Aquí debería ir cualquier otra cosa que aún no se nos ocurrio!!! \_O_/</p>
                                        <br>
                                    </div>
                                    <!--/.Panel 3-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection