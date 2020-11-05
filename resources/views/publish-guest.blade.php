@extends('layouts.default')

@section('section')
  <div class="focom-slide position-relative d-none d-md-inline-block w-100">
        <img src="/img/Slide13.jpg" class="d-block" alt="Publicar">
        <h1 class="text-white display">Publicar</h1>
    </div>

    <div class="container focom-section pt-3">
        <h2 class="text-center pb-5 mb-5">¡Hola! Para publicar <br class="d-none d-sm-block">primero debes registrarte</h2>
        <p class="text-center focom-section-paddingx">Es simple, solo llená unos datos.</p>
        <div class="d-block pt-2">

            <div id="app">

                <form-register />

            </div>

        </div>
    </div>
@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>
@endsection
