@extends('template')

@section('section')


    <div class="focom-slide position-relative d-none d-md-inline-block w-100">
        <img src="../img/Slide (4).jpg" class="d-block" alt="...">
        <h1 class="text-white display">Ayuda</h1>
    </div>

    <div class="container focom-section pt-3">
        <h2 class="text-center">¿En que te podemos ayudar?</h2>
        <p class="text-center focom-section-paddingx">Nosotros estamos para resolver tus dudas.</p>
        <div class="d-block pt-4">
            <a href="{{ route('preguntas') }}" class="text-dark">
                <i class="fas fa-question fa-2x d-inline pl-1"></i>
                <p class="lead pl-3 font-weight-normal d-inline">Preguntas frecuentes</p>
            </a>
            <br>
            <hr color="#999">
            <a href="{{ route('contacto') }}" class="text-dark">
                <i class="fas fa-user fa-2x d-inline"></i>
                <p class="lead pl-3 font-weight-normal d-inline">Contacto</p>
            </a>
            <hr color="#999">
            <a href="{{ route('terminos') }}" class="text-dark">
                <i class="fas fa-info fa-2x d-inline pl-2"></i>
                <p class="lead pl-4 font-weight-normal d-inline">Términos y condiciones</p>
            </a>
            <hr color="#999">
            <a href="{{ route('politica') }}" class="text-dark">
                <i class="fas fa-asterisk fa-2x d-inline"></i>
                <p class="lead pl-3 font-weight-normal d-inline">Política de privacidad</p>
            </a>
        </div>
    </div>

@endsection