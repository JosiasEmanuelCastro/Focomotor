@extends('template')


@section('section')
    <!-- BEGIN SLIDE -->
    <div id="focomSlideHome" class="carousel slide mt-n4 mt-md-0" data-ride="carousel" data-pause="false" data-interval="4500" keyboard="false" data-touch="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="{{ route('publicar') }}">
                    <img src="img/Banner (1).jpg" class="w-100 d-none d-md-block" alt="...">
                    <img src="img/Banner Mobile (1).jpg" class="w-100 d-block d-md-none" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('preguntas') }}">
                    <img src="img/Banner (2).jpg" class="w-100 d-none d-md-block" alt="...">
                    <img src="img/Banner Mobile (2).jpg" class="w-100 d-block d-md-none" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('publicar') }}">
                    <img src="img/Banner (3).jpg" class="w-100 d-none d-md-block" alt="...">
                    <img src="img/Banner Mobile (3).jpg" class="w-100 d-block d-md-none" alt="...">
                </a>
            </div>
        </div>
        <a class="carousel-control-prev focom-opacity-mobile-none" href="#focomSlideHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
        <a class="carousel-control-next focom-opacity-mobile-none" href="#focomSlideHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
    </div>
    <!-- END SLIDE -->
    <h1 class="h4 mt-4 pl-2 mx-1 mx-md-3 mx-lg-5">Ultimas publicaciones:</h1>
    <div class="row focom-section mt-1 mx-1 mx-md-3 mx-lg-5">
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
            <a href="{{ route('vehiculo') }}" class="text-dark">
                <div class="border rounded shadow bg-white rounded focom-list">
                    <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" width="100%">
                    <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                    <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                    <div class="pt-3 m-1">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                        <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
            <a href="html/" class="text-dark">
                <div class="border rounded shadow bg-white rounded focom-list">
                    <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" width="100%">
                    <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                    <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                    <div class="pt-3 m-1">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                        <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
            <a href="html/" class="text-dark">
                <div class="border rounded shadow bg-white rounded focom-list">
                    <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" width="100%">
                    <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                    <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                    <div class="pt-3 m-1">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                        <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
            <a href="html/" class="text-dark">
                <div class="border rounded shadow bg-white rounded focom-list">
                    <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" width="100%">
                    <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                    <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                    <div class="pt-3 m-1">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                        <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
            <a href="html/" class="text-dark">
                <div class="border rounded shadow bg-white rounded focom-list">
                    <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" width="100%">
                    <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                    <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                    <div class="pt-3 m-1">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                        <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
            <a href="html/" class="text-dark">
                <div class="border rounded shadow bg-white rounded focom-list">
                    <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" width="100%">
                    <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                    <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                    <div class="pt-3 m-1">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                        <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                    </div>
                </div>
            </a>
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