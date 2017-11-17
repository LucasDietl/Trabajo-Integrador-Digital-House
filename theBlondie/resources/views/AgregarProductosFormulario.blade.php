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
                                    <input id="name" type="text" class="form-control" name="name" value=""  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sku" class="col-md-4 control-label">SKU</label>

                                <div class="col-md-6">
                                    <input id="sku" type="text" class="form-control" name="sku" value=""  autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="color" class="col-md-4 control-label">Color</label>

                                <div class="col-md-6">
                                    <input id="color" type="text" class="form-control" name="color" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stock" class="col-md-4 control-label">Stock</label>

                                <div class="col-md-6">
                                    <input id="stock" type="number" class="form-control" name="stock" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="precio" class="col-md-4 control-label">Precio</label>

                                <div class="col-md-6">
                                    <input id="precio" type="number" class="form-control" name="precio" >
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
