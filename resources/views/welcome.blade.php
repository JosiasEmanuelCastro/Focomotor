@extends('layouts.default')

@section('section')

    <div class="focom-slide position-relative d-none d-md-inline-block justify-content-center">
        <img src="/img/Slide3.jpg" class="d-block" alt="Planes">
        <h1 class="text-white">¡Bienvenido a Focomotor!</h1>
    </div>



    <div class="container focom-section pt-3">
        <h2 class="text-center">Tu cuenta fue creada con éxito.</h2>
        <p class="text-center focom-section-paddingx">Tú decides como empezar. ¡Buen viaje conductor!</p>
        <div class="d-block pt-4">
            <a href="{{ route('info.faq') }}" class="text-dark">
                <i class="fas fa-car-side fa-2x d-inline"></i>
                <p class="lead pl-3 font-weight-normal d-inline">Publicar mi primer vehículo</p>
            </a>
            <br>
            <hr color="#999">
            <a href="{{ route('contact') }}" class="text-dark">
                <i class="fas fa-user fa-2x d-inline"></i>
                <p class="lead pl-4 font-weight-normal d-inline">Ir a mi cuenta</p>
            </a>
            <hr color="#999">
            <a href="{{ route('info.terms') }}" class="text-dark">
                <i class="fas fa-home fa-2x d-inline ml-n1"></i>
                <p class="lead pl-3 font-weight-normal d-inline">Ir al inicio</p>
            </a>
            <hr color="#999">
            <a href="{{ route('info.policy') }}" class="text-dark">
                <i class="fas fa-question fa-2x d-inline"></i>
                <p class="lead pl-4 font-weight-normal d-inline">Necesito ayuda</p>
            </a>
        </div>
    </div>



    @include('elements.notification')

@endsection