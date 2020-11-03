@extends('layouts.default')
@section('section')
<hr class="@if(Agent::isMobile() || Agent::isTablet()) d-none @else d-block @endif">
<div class="px-2 px-md-3 px-lg-4 px-xl-5" style="margin-bottom: 400px">
    
<div class="py-0 py-md-4 mt-md-0 mt-n2 mb-md-0 mb-3">
    <div class="d-flex"> 
        <img class="rounded-circle mr-3" height="60px" src="{{ auth()->user()->profile_photo_url}}">    
        <h1 class="h4 my-auto font-weight-normal mr-2">{{auth()->user()->name}}</h1>
    </div>
</div>
<hr>

<div class="row mx-1 d-flex">
    <!-- ACÁ DEBES LLAMAR A MANDAR LOS VEHICULOS DEL USUARIO Y MANDARLOS ASÍ, (NO CREAR CARDS NUEVOS):
        @foreach ($articles as $article)
            @include($device . 'elements.card-vehicle')    
         @endforeach
     -->
    <article class="col-4 col-xl-3 p-2 align-self-stretch">
        <a href="" class="text-dark text-decoration-none" >
            <div class="border rounded shadow bg-white rounded focom-hover h-100" style="max-width: 250px;">
                <img src="img/add_car.png" width="100%" style="max-height: 200px; object-fit: cover;">
                <div class="px-1 px-md-2">
                    <h4 class="m-1 h5 focom-vehicle-title">Este es un vehiculo de prueba</h4>
                    <p class="m-1 font-weight-normal h3 focom-vehicle-price" style="overflow: hidden;"></p>
                    <div class="pt-3 m-1 d-flex">
                        <i class="fas fa-map-marker-alt fa-lg align-self-center mb-2"></i>
                        <p class="pl-1 h5 font-weight-normal pr-1 focom-vehicle-place">Ciudad de prueba</p>
                    </div>
                    <div class="">
                        
                    </div>
                </div>
            </div>
        </a>
    </article>

</div>

</div>

@endsection