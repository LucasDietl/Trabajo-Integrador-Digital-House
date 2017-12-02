@extends('layout')
@section('title')
    <title>{{$producto->name}} </title>
@endsection
@section('content')
    <div class="container  slideimages altominimo">
        <div class="row">
            <h1 class="">{{$producto->name}}</h1>
            <div class="col-md-7">
                <img style="width: 100%; max-height: 2%; " src="/{{$producto->image}}">
            </div>
            <div class="col-md-5">
                <ul>
                    <li>{{$producto->precio}}</li>
                    <li>{{$producto->color}}</li>
                    <li>{{$producto->stock}}</li>
                    <li>{{$producto->description}}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection