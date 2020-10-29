@extends('layouts.default')

@section('section')

    @if(Agent::isDesktop())
        <div class="focom-slide position-relative d-inline-block w-100">
            <img src="/img/Slide4.jpg" class="d-block" alt="Ayuda">
            <h1 class="text-white display">Ayuda</h1>
        </div>
    @endif

    <div class="container focom-section pt-3">
        <h2 class="text-center">¿En que te podemos ayudar?</h2>
        <p class="text-center focom-section-paddingx">Nosotros estamos para resolver tus dudas.</p>
        <div class="d-block pt-4">
            <a href="{{ route('info.faq') }}" class="text-dark text-decoration-none">
                <i class="fas fa-question fa-2x d-inline pl-1"></i>
                <p class="lead pl-3 font-weight-normal d-inline">Preguntas frecuentes</p>
            </a>
            <br>
            <hr color="#999">
            <a href="{{ route('contact') }}" class="text-dark text-decoration-none">
                <i class="fas fa-user fa-2x d-inline"></i>
                <p class="lead pl-3 font-weight-normal d-inline">Contacto</p>
            </a>
            <hr color="#999">
            <a href="{{ route('info.terms') }}" class="text-dark text-decoration-none">
                <i class="fas fa-info fa-2x d-inline pl-2"></i>
                <p class="lead pl-4 font-weight-normal d-inline">Términos y condiciones</p>
            </a>
            <hr color="#999">
            <a href="{{ route('info.policy') }}" class="text-dark text-decoration-none">
                <i class="fas fa-asterisk fa-2x d-inline"></i>
                <p class="lead pl-3 font-weight-normal d-inline">Política de privacidad</p>
            </a>
        </div>
    </div>

@endsection