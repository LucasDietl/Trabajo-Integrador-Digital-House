@extends('layout')
@section('title')
    <title>The Blondie - Shoes</title>
@endsection
@section('content')
    <div class="container  slideimages altominimo">
        <div class="row padding_SignInAndUp">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default ">
                    <div class="panel-heading">Seccion para Modificar productos</div>

                    <div class="panel-body">
                        @include('alerts.alerts')
                        <form class="form-horizontal" method="POST" action="/Productos/Modificar/{{$producto->id}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input id="id" type="" class="hidden " name="id" value="{{$producto->id}}"  autofocus>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label black">Nombre del Producto</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{$producto->name}}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sku" class="col-md-4 control-label black">SKU</label>

                                <div class="col-md-6">
                                    <input id="sku" type="text" class="form-control" name="sku" value="{{$producto->sku}}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-md-4 control-label black">Color</label>

                                <div class="col-md-6">
                                    <input id="color" type="text" class="form-control" name="color" value="{{$producto->color}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stock" class="col-md-4 control-label black">Stock</label>

                                <div class="col-md-6">
                                    <input id="stock" type="text" class="form-control" name="stock" value="{{$producto->stock}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="precio" class="col-md-4 control-label black">Precio</label>

                                <div class="col-md-6">
                                    <input id="precio" type="text" class="form-control" name="precio" value="{{$producto->precio}}" >
                                </div>
                            </div>

                            <div class="form-group custom-upload">
                                <label for="imagen" class=" col-md-12 custom-upload-lable black">Imagen</label>

                                <div class="hidden">
                                    <input id="imagen" type="file"  name="imagen" value="{{$producto->image}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label black">Descripcion del Producto:</label>

                                <div class="col-md-6">
                                    <textarea  class="form-control" name="description" value="">{{$producto->description}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Modificar Producto
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
