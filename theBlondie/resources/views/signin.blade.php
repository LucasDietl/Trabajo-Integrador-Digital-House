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
    <div class="container altominimo slideimages" >
        <div class="row margen">
            <div class="col-xs-12 col-sm-4 col-md-4">

                <form class="form-horizontal" role="form" action="signin" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <h2 class="form-signin-heading">Sign in</h2>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <label for="email" class="sr-only">Email address</label>

                        <input type="email" id="email" name="email" class="form-control signup-form-input" placeholder="Correo Electronico" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="sr-only">Password</label>

                        <input type="password" id="password" name="password" class="form-control signup-form-input" placeholder="Contraseña" required>


                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-lg btn-primary btn-block btnbuscar">
                                    Sign in
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>


                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
<!-- NOTE: introduccion end -->

<!-- NOTE: Footer start -->
@section('footer')
@endsection
<!-- NOTE: Footer end -->



