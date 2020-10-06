@extends('layouts.default')

@section('section')

    <div class="focom-slide position-relative d-none d-md-inline-block">
        <img src="/img/Slide1.jpg" class="d-block" alt="Planes">
        <h1 class="text-white display">Planes</h1>
    </div>

    <div class="container focom-section  pt-3">
        <h2 class="text-center">Focomotor a tu disposición.</h2>
        <p class="text-center focom-section-paddingx">Nuestros planes se adaptan a tu necesidad para que puedas publicar en Focomotor con un precio asequible. ¡Impulsá tus ventas de vehículos ahora!</p>
        <div class="row pt-3">

            @foreach ($plans as $plan)
                
                @include('elements.plan')    
            @endforeach

        </div>
    </div>

    @include('elements.notification2')

@endsection