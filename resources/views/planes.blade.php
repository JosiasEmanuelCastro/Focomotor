@extends('template')

@section('section')

    <div class="focom-slide position-relative d-none d-md-inline-block">
        <img src="../img/Slide (1).jpg" class="d-block" alt="...">
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
                    <p class="pt-2"><span class="font-weight-bold">$</span><span class="h1 font-weight-bold">499</span><br>por mes</p>
                    <div>
                        <i class="fas fa-check d-inline-block text-success"></i>
                        <p class="d-inline-block small py-4">Publicar hasta 10 clasificados</p>
                    </div>
                    <p class="btn btn-outline-primary rounded-pill px-4 mb-4 focom-price-btn">Conseguir</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm2 text-center pt-3">
                <div class="bg-primary text-white px-4 py-2 rounded-top">
                    <h4>x10<br>Clasificados</h4>
                </div>
                <div class="border rounded-bottom shadow">
                    <p class="pt-2"><span class="font-weight-bold">$</span><span class="h1 font-weight-bold">499</span><br>por mes</p>
                    <div>
                        <i class="fas fa-check d-inline-block text-success"></i>
                        <p class="d-inline-block small py-4">Publicar hasta 10 clasificados</p>
                    </div>
                    <p class="btn btn-outline-primary rounded-pill px-4 mb-4 focom-price-btn">Conseguir</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm2 text-center pt-3">
                <div class="bg-primary text-white px-4 py-2 rounded-top">
                    <h4>x10<br>Clasificados</h4>
                </div>
                <div class="border rounded-bottom shadow">
                    <p class="pt-2"><span class="font-weight-bold">$</span><span class="h1 font-weight-bold">499</span><br>por mes</p>
                    <div>
                        <i class="fas fa-check d-inline-block text-success"></i>
                        <p class="d-inline-block small py-4">Publicar hasta 10 clasificados</p>
                    </div>
                    <p class="btn btn-outline-primary rounded-pill px-4 mb-4 focom-price-btn">Conseguir</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm2 text-center pt-3">
                <div class="bg-primary text-white px-4 py-2 rounded-top">
                    <h4>x10<br>Clasificados</h4>
                </div>
                <div class="border rounded-bottom shadow">
                    <p class="pt-2"><span class="font-weight-bold">$</span><span class="h1 font-weight-bold">499</span><br>por mes</p>
                    <div>
                        <i class="fas fa-check d-inline-block text-success"></i>
                        <p class="d-inline-block small py-4">Publicar hasta 10 clasificados</p>
                    </div>
                    <p class="btn btn-outline-primary rounded-pill px-4 mb-4 focom-price-btn">Conseguir</p>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN NOTIFICATION --->
    <div class="pb-5 pb-md-0">
        <div class="bg-primary mb-md-n5 mb-5 p-md-5 p-4 mt-n5 mt-md-5 text-white justify-content-center">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <h3>¡Focomotor esta hecho para tu consesionaria!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-3 col-12 d-flex justify-content-start">
                    <a href="{{ route('planes') }}" class="btn btn-outline-light p-3 px-4 rounded-pill d-flex justify-content-start focom-notification-bottom-width">
                        <i class="far fa-clipboard fa-lg pr-2 pt-1"></i>
                        <span>
                            <b>Ver planes</b>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END NOTIFICATION --->

@endsection