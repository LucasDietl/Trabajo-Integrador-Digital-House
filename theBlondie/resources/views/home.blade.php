@extends('layout')
    @section('title')
        <title>The Blondie - Shoes</title>
    @endsection

<!-- NOTE: Navbar start -->
@section('navbar')

@endsection
<!-- NOTE: Navbar end -->

<!-- NOTE: introduccion start -->
@section('content')
    <div class="slideimages" style="display: flex;">
        <div class="slideshow" style="">
            <img src="{{asset('images/dorada.jpg')}}" class="izquierda" style="" alt="">
            <img src="{{asset('images/blackwhite.jpg')}}" class="derecha" alt="">
            <img src="{{asset('images/comingsoon.jpg')}}" class="medio" alt="">
            <img src="{{asset('images/skate.jpg')}}" class="izquierda" alt="">
            <img src="{{asset('images/piernasyzapatos.jpg')}}" class="derecha" alt="">
            <img src="{{asset('images/cactuswide.jpg')}}" class="medio" alt="">
        </div>
    </div>
@endsection
<!-- NOTE: introduccion end -->

<!-- NOTE: Footer start -->
@section('footer')

@endsection
<!-- NOTE: Footer end -->




