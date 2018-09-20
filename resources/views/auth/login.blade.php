@extends('layouts.app')
@section('body-class',"login-page sidebar-collapse")
@section('content')
    <div class="page-header header-filter"
         style="background-image: url('{{asset('img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form class="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Inicio Sesión</h4>
                                <div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="description text-center">Ingresa tus datos</p>
                            <div class="card-body">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                                    </div>
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" placeholder="Email..." required autofocus>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="Password..." required>
                                </div>
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">
                                    Ingresar
                                </button>
                            </div>
                            <!--a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection