@extends('layout')
@section('title')
    <title>The Blondie - Shoes</title>
@endsection
@section('content')
    <div class="container  slideimages">
        <div class="row padding_SignInAndUp">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default option">
                    <div  class="panel-heading black">
                        <h3 class="black">Seccion para agregar productos</h3>
                    </div>

                    <div class="panel-body">
                        @include('alerts.alerts')
                        <form class="form-horizontal" method="POST" action="/Productos/Agregar" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label black">Nombre del Producto</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sku" class="col-md-4 control-label black">SKU</label>

                                <div class="col-md-6">
                                    <input id="sku" type="text" class="form-control" name="sku" value="{{old('sku')}}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-md-4 control-label black">Color</label>

                                <div class="col-md-6">
                                    <input id="color" type="text" class="form-control" name="color" value="{{old('color')}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stock" class="col-md-4 control-label black">Stock</label>

                                <div class="col-md-6">
                                    <input id="stock" type="text" class="form-control" name="stock" value="{{old('stock')}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="precio" class="col-md-4 control-label black">Precio</label>

                                <div class="col-md-6">
                                    <input id="precio" type="text" class="form-control" name="precio" value="{{old('precio')}}" >
                                </div>
                            </div>

                            <div class="form-group custom-upload">
                                <label for="imagen" class=" col-md-12 custom-upload-lable black">Imagen</label>

                                <div class="hidden">
                                    <input id="imagen" type="file"  name="imagen" value="{{old('imagen')}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label black">Descripcion del Producto:</label>

                                <div class="col-md-6">
                                    <textarea  class="form-control" name="description" value="{{old('description')}}">{{old('description')}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Agregar Producto
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
