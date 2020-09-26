@extends('layouts.lite')
@section('section')
<div class="text-center bg-primary focom-signin-paddingy">
    <div>
        <a href="{{ route('home') }}">
            <img height="25px" class="focom-logo" src="/img/focom-white.png">
        </a>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="bg-white focom-signin-card border shadow rounded w-100 mx-3">
        @if($errors)
            @foreach($errors as $error)
                <div>{{ dump($error) }}</div>
            @endforeach
        @endif
        <div class="text-center pt-1 pb-4">
            <a href="{{ route('login') }}">Ingresar</a>
            <a href="{{ route('register') }}" class="pl-3 font-weight-bold">Registro</a>
        </div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="name" class="pt-2">Nombre y Apellido</label>
            <input type="text" class="form-control" name="name" aria-describedby="nameHelp">
            <label for="email" class="mt-3">Correo electrónico</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            <label for="password" class="mt-3">Contraseña</label>
            <input type="password" class="form-control" name="password" aria-describedby="passwordHelp">
            <label for="password_confirmation" class="mt-3">Confirmar Contraseña</label>
            <input type="password" class="form-control" name="password_confirmation" aria-describedby="passwordConfirmationHelp">
            <label for="location" class="pt-2">Localidad</label>
            <input type="text" class="form-control" name="location" aria-describedby="locationHelp">
            <label for="telephone" class="pt-2">Telefono</label>
            <input type="text" class="form-control" name="telephone" aria-describedby="telephoneHelp">
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary px-5 mt-4">Registrarse</button>
            </div>
        </form>
    </div>
</div>
<p class="small pt-5 mb-4 px-4 text-center">Al registrarte estas aceptando los <a href="terminos-y-condiciones.html"><u>Términos y Condiciones</u></a> y la <a href="politica-de-privacidad.html"><u>Política de Privacidad</u></a> de Focomotor.</p>
</div>
@endsection
