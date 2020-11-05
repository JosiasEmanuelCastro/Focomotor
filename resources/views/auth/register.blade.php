@extends('layouts.lite')
@section('section')
<div class="text-center bg-primary focom-signin-paddingy">
    <div>
        <a href="{{ route('home') }}">
            <img height="25px" class="focom-logo" src="/img/focom-white.png">
        </a>
    </div>
</div>

<form-register />

<p class="small pt-5 mb-4 px-4 text-center">Al registrarte estas aceptando los <a
        href="terminos-y-condiciones.html"><u>Términos y Condiciones</u></a> y la <a
        href="politica-de-privacidad.html"><u>Política de Privacidad</u></a> de Focomotor.</p>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@endsection
