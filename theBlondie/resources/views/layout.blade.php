<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- NOTE: incluye el icono en la pestaña del navegador (Favicon)-->
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Sunshiney|Yesteryear|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    @yield('title')
    <script>
        window.addEventListener("load",function(){

           var load_screen = document.getElementById("load_screen");
           setTimeout(function(){document.body.removeChild(load_screen);},1500)

        });
    </script>
</head>
<body>
<div id="load_screen" >
    <div id="loading">
        <div class="white position">
            THE<br> BLONDIE
        </div>
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
</div>
    @yield('navbar')
    <nav id="navbarEntero" class="navbar navbar-default navbar-fixed-top navbarcolor">
        <div class="">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed hamburgesa" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logoname visible-xs" href="{{ route('home') }}">THE<br>BLONDIE</a>
            </div>


            <div class="collapse navbar-collapse border" id="navbar1">
                <div class="text-center">
                    <a class="hidden-xs" style=" color:grey;" href="{{ route('home') }}">#Neverpony</a>
                </div>
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-sm-4">
                            @if(Auth::check())
                                <ul class="inline">
                                    <li class="inlineblock" >
                                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                        </a>
                                    </li>
                                    <a href="/Opciones"> <li class="inlineblock white">Bienvenido {{Auth::user()->name}}</li></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                            @else
                            <ul>
                                <li class="inlineblock" ><a href="{{ route('login') }}">Log In</a></li>
                                <li class="inlineblock" ><a href="{{ route('register') }}">Register</a></li>
                            </ul>
                                @endif
                        </div>
                        @if(Auth::check())
                            <div class="col-sm-4 hidden-xs paddingtop">
                            <a href="/Opciones"> <li class="inlineblock white">  Opcioes para Administradores </li></a>
                        </div>
                        @endif
                        <!--<div class="col-sm-4 hidden-xs">
                            <div class="">
                                <form class="navbar-form" role="search" method="get" action="{{ route('zapatos') }}">
                                    <div class="inner-addon left-addon">
                                        <button type="submit" class="btn search">
                                            <span class="glyphicon glyphicon-search"></span></button>
                                        <input class="barra_busqueda form-control" type="text" placeholder="Buscar" />
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="carrito text-center">
                                <span class="glyphicon glyphicon-shopping-cart white carrrito_padding"></span>
                                <span class="white sesion ">Carrito</span>
                                <span class="white ">Items(0)</span>
                                <span class="white ">0$</span>

                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="row vertical align">

                    <div class="col-md-2 col-sm-3">
                        <a class="navbar-brand logoname hidden-xs" href="{{ route('home') }}">THE<br>BLONDIE</a>
                    </div>
                    <div class="col-md-8 col-sm-9 center-block">


                        <ul class="nav navbar-nav inline">
                            <li class="active inlineblock"> <span class="sr-only">(current)</span></li>
                            <li class="inlineblock"><a href="{{ route('home') }}">Home</a></li>
                            <li class="inlineblock"><a href="/zapatos">Zapatos</a></li>
                            <li class="inlineblock"><a href="/faq">Preguntas Frecuentes</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm text-center iconos">
                        <div>
                            <a href="https://www.facebook.com/theblondieok/" target="_blank"><i class="fa fa-facebook-square fa-facebook"></i></a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/theblondieok/?hl=es" target="_blank"><i class="fa fa-instagram fa-instagram"></i></a>
                        </div>
                        <div>
                            <a href="https://twitter.com/theblondieok" target="_blank"><i class="fa fa-twitter fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <nav id="navbarPeque" class="navbar navbar-default navbar-fixed-top navbarcolor">
        <div class="container fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed hamburgesa" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logoname visible-xs" href="{{ route('home') }}">THE<br>BLONDIE</a>
            </div>


            <div class="collapse navbar-collapse border" id="navbar1">
                <div class="text-center">
                    <a class="hidden-xs" style=" color:grey;" href="{{ route('home') }}">#Neverpony</a>
                </div>
                <div class="container-fluid">
                </div>
                <div class="row vertical align">

                    <div class="col-md-2 col-sm-3">
                        <a class="navbar-brand logoname hidden-xs" href="{{ route('home') }}">THE<br>BLONDIE</a>
                    </div>
                    <div class="col-md-8 col-sm-9 center-block">


                        <ul class="nav navbar-nav inline">
                            <li class="active inlineblock"> <span class="sr-only">(current)</span></li>
                            <li class="inlineblock"><a href="{{ route('home') }}">Home</a></li>
                            <li class="inlineblock"><a href="/zapatos">Zapatos</a></li>
                            <li class="inlineblock"><a href="/faq">Preguntas Frecuentes</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm text-center iconos">
                        <div>
                            <a href="https://www.facebook.com/theblondieok/"><i class="fa fa-facebook-square fa-facebook"></i></a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/theblondieok/?hl=es"><i class="fa fa-instagram fa-instagram"></i></a>
                        </div>
                        <div>
                            <a href="https://twitter.com/theblondieok"><i class="fa fa-twitter fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')
    <footer class="navbar navbar-default navbar-bottom" role="navigation">
        <div class="container-fluid hidden-xs">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Get started</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('home') }}">Registrarse</a></li>
                        <li><a href="{{ route('home') }}">Iniciar sesión</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3>Productos</h3>
                    <ul>
                        <li><a href="#">Destacados</a></li>
                        <li><a href="#">Temporadas</a></li>
                        <li><a href="#">Buscador</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3>Nosotros</h3>
                    <ul>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Nuestra historia</a></li>
                        <li><a href="#">RRHH</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p>© 2017 - Todos los derechos reservados - Developed by #NeverPony!</p>
                </div>
            </div>
        </div>
    </footer>
    @yield('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7/dist/sweetalert2.all.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
    @include('sweet::alert')
</body>
</html>