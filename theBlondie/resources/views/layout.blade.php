<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- NOTE: incluye el icono en la pestaña del navegador (Favicon)-->
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Sunshiney|Yesteryear|Raleway" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    @yield('title')
</head>
<body>
    @yield('navbar')
    <nav class="navbar navbar-default navbar-fixed-top navbarcolor">
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
                                <ul>
                                    <li class="inlineblock" ><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                        </a></li>
                                    <li class="inlineblock white">Bienvenido {{Auth::user()->name}}</li>
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
                        <div class="col-sm-4 hidden-xs">
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
                        </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
            <div class="row">
                <iframe class="col-sm-12 hidden-xs mapita"id="map-container" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31286.51358666379!2d-58.55486426055731!3d-34.487932968802525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0566329b7d5%3A0xbf5c5047b087981b!2sSan+Isidro+Partido%2C+Buenos+Aires+Province!5e0!3m2!1sen!2sar!4v1504468145306">
                </iframe>
            </div>
            <div class="social-networks">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
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
</body>
</html>