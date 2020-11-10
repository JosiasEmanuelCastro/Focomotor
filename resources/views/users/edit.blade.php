@extends('layouts.default')
@section('section')

<hr class=" d-none d-md-block mt-n1">
<div class="focom-section mt-4 mx-3 mx-sm-5" id="app">
    <h1 class="h2">Ajustes de perfil</h1>
    <form-edit-user user="{{auth()->user()}}"/>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">
@endsection
