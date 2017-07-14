@extends('layouts.app')

@section('content')
    
    <p class="login-box-msg">NUEVO REGISTRO</p>

    <form class="form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
        <div class="form-group has-feedback">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control" name="email" placeholder="E-mail" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                </div>
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">CREAR</button>
            </div>
        </div>
        
        No deseo registrarme<a href="{{ route('login') }}" class="text-center"> Volver atras</a><br>
    </form>

@endsection
