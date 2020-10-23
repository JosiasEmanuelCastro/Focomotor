@extends('layouts.lite')
@section('section')
    <div class="text-center bg-primary focom-signin-paddingy">
        <div>
            <a href="../index.html">
                <img height="25px" class="focom-logo" src="../img/focom-white.png">
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <div class="bg-white focom-signin-card border shadow rounded w-100 mx-3">
            <div class="text-center pt-1 pb-3 ">
                {{-- BEGIN RESTORE --}}
                <div id="focom-resetPass-restore" class="d-block">
                    <p class="px-0 px-md-2">Para restablecer tu contraseña, por favor, indica a continuación tu dirección de correo electrónico o nombre de usuario</p>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduce tu correo electrónico">
                    <div class="text-center mb-2 mt-4 pt-3">
                        <button id="focom-resetPass-button" class="btn btn-primary px-4">Restablecer mi contraseña</button>
                    </div>
                </div>
                {{-- END RESTORE--}}
                {{-- BEGIN SEND MAIL --}}
                <div id="focom-resetPass-sendMail" class="d-none">
                    <p class="px-0 px-md-2">Te hemos enviado un enlace de restablecimiento de contraseña a tu correo electrónico. Por favor, comprueba tu bandeja de entrada.</p>
                </div>
                {{-- END SEND MAIL --}}
            </div>
        </div>
    </div>
@endsection