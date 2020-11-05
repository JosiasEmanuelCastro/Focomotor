@extends('layouts.default')

@section('section')

    <form-publish />

@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">
<style>

.v-select input[type=search], .v-select input[type=search]:focus {
    width: 10px;
}
</style>

@endsection
