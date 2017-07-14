@extends('layouts.app')

@section('content')

    <p class="login-box-msg">RESTABLECER CONTRASEÑA</p>

    <form class="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="row">
            <div class="col-xs-8">
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar</button>
            </div>
        </div>
    </form>
               
@endsection
