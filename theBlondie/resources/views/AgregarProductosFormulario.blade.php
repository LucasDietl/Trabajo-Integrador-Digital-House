@extends('layout')

@section('content')
    <div class="container  slideimages">
        <div class="row padding_SignInAndUp">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Seccion para agregar productos</div>

                    <div class="panel-body">
                        @include('alerts.alerts')
                        <form class="form-horizontal" method="POST" action="/Productos/Agregar">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Nombre del Producto</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sku" class="col-md-4 control-label">SKU</label>

                                <div class="col-md-6">
                                    <input id="sku" type="text" class="form-control" name="sku" value="{{old('sku')}}"  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-md-4 control-label">Color</label>

                                <div class="col-md-6">
                                    <input id="color" type="text" class="form-control" name="color" value="{{old('color')}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stock" class="col-md-4 control-label">Stock</label>

                                <div class="col-md-6">
                                    <input id="stock" type="text" class="form-control" name="stock" value="{{old('stock')}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="precio" class="col-md-4 control-label">Precio</label>

                                <div class="col-md-6">
                                    <input id="precio" type="text" class="form-control" name="precio" value="{{old('precio')}}" >
                                </div>
                            </div>

                            <div class="form-group custom-upload">
                                <label for="imagen" class=" col-md-12 custom-upload-lable">Imagen</label>

                                <div class=" ">
                                    <input id="imagen" type="file"  name="imagen" value="{{old('imagen')}}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Descripcion del Producto:</label>

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
