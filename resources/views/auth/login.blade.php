@extends('layouts.lite')

@section('section')

    
    <div class="text-center bg-primary focom-signin-paddingy">
        <div>
            <a href="{{ route('home') }}">
                <img height="25px" class="focom-logo" src="../img/focom-white.png">
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <div class="bg-white focom-signin-card border shadow rounded w-100 mx-3">
            <div class="text-center pt-1 pb-4">
                <a href="{{ route('login') }}" class="pr-3 font-weight-bold">Ingresar</a>
                <a href="{{ route('register') }}">Registro</a>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
            <label for="email" class="pt-2">E-mail</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <label for="password" class="mt-3">Contraseña</label>
            <input type="password" class="form-control" id="password" aria-describedby="passwordHelp">
            <div class="form-group form-check pt-4">º
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label text-muted" for="exampleCheck1">Mantenerme conectado</label>
                <div class="text-center">
                    <button class="btn btn-primary px-4 mt-4">Iniciar sesión</button>
                </div>
                <div class="text-center pt-3">
                    <a href="restablecer.html" class="text-muted small">¿Has olvidado tu contraseña?</a>
                </div>
            </div>
            </form>
        </div>
    </div>

@endsection