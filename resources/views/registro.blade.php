@extends('templateLite')

@section('section')

    

    <div class="text-center bg-primary focom-signin-paddingy">
        <div>
            <a href="{{ route('inicio') }}">
                <img height="25px" class="focom-logo" src="../img/focom-white.png">
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="bg-white focom-signin-card border shadow rounded w-100 mx-3">
            <div class="text-center pt-1 pb-4">
                <a href="{{ route('ingresar') }}">Ingresar</a>
                <a href="{{ route('registro') }}" class="pl-3 font-weight-bold">Registro</a>
            </div>
            <label for="exampleInputEmail1" class="pt-2">Nombre y Apellido</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="mt-3">Correo electrónico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="mt-3">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="mt-3">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary px-5 mt-4">Registrarse</button>
            </div>
        </div>
    </div>
    <p class="small pt-5 mb-4 px-4 text-center">Al registrarte estas aceptando los <a href="terminos-y-condiciones.html"><u>Términos y Condiciones</u></a> y la <a href="politica-de-privacidad.html"><u>Política de Privacidad</u></a> de Focomotor.</p>
    </div>

@endsection