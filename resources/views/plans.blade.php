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
            <div class="col-lg-3 col-md-6 col-sm2 text-center pt-3">
                <div class="bg-primary text-white px-4 py-2 rounded-top">
                    <h4>x10<br>Clasificados</h4>
                </div>
                <div class="border rounded-bottom shadow">
                    <p class="pt-2"><span class="font-weight-bold">$</span><span class="h1 font-weight-bold">550</span><br>por mes</p>
                    <div>
                        <i class="fas fa-check d-inline-block text-success"></i>
                        <p class="d-inline-block small py-4">Publicar hasta 10 clasificados</p>
                    </div>
                    <p class="btn btn-outline-primary rounded-pill px-4 mb-4 focom-price-btn">Conseguir</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm2 text-center pt-3">
                <div class="bg-primary text-white px-4 py-2 rounded-top">
                    <h4>x25<br>Clasificados</h4>
                </div>
                <div class="border rounded-bottom shadow">
                    <p class="pt-2"><span class="font-weight-bold">$</span><span class="h1 font-weight-bold">1100</span><br>por mes</p>
                    <div>
                        <i class="fas fa-check d-inline-block text-success"></i>
                        <p class="d-inline-block small py-4">Publicar hasta 25 clasificados</p>
                    </div>
                    <p class="btn btn-outline-primary rounded-pill px-4 mb-4 focom-price-btn">Conseguir</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm2 text-center pt-3">
                <div class="bg-primary text-white px-4 py-2 rounded-top">
                    <h4>x50<br>Clasificados</h4>
                </div>
                <div class="border rounded-bottom shadow">
                    <p class="pt-2"><span class="font-weight-bold">$</span><span class="h1 font-weight-bold">1650</span><br>por mes</p>
                    <div>
                        <i class="fas fa-check d-inline-block text-success"></i>
                        <p class="d-inline-block small py-4">Publicar hasta 50 clasificados</p>
                    </div>
                    <p class="btn btn-outline-primary rounded-pill px-4 mb-4 focom-price-btn">Conseguir</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm2 text-center pt-3">
                <div class="bg-primary text-white px-4 py-2 rounded-top">
                    <h4>x100<br>Clasificados</h4>
                </div>
                <div class="border rounded-bottom shadow">
                    <p class="pt-2"><span class="font-weight-bold">$</span><span class="h1 font-weight-bold">2750</span><br>por mes</p>
                    <div>
                        <i class="fas fa-check d-inline-block text-success"></i>
                        <p class="d-inline-block small py-4">Publicar hasta 100 clasificados</p>
                    </div>
                    <p class="btn btn-outline-primary rounded-pill px-4 mb-4 focom-price-btn">Conseguir</p>
                </div>
            </div>
        </div>
    </div>

    @include('elements.notification2')

@endsection