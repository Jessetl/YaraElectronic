@extends('layouts.app')

@section('content')
    
    <p class="login-box-msg">INICIO DE SESIÓN</p>

    <form class="form" method="POST" action="{{ route('login') }}">
        <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                    </label>
                </div>
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div>
        </div>
        
        ¿No tiene una cuenta?<a href="{{ route('register') }}" class="text-center"> Registrarme</a><br>
        <a class="text-center" href="{{ route('password.request') }}"> He olvidado mi contraseña</a>
    </form>

@endsection
