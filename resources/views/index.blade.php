@extends('layouts.default')
@section('section')
    @include('elements.slider')
    <div class="mx-3 mx-md-5 mx-lg-5">
        <h2 class="py-3 h4">Ultimas publicaciones:</h2>

        <div class="row mt-1 d-flex">

            @foreach ($articles as $article)
                @include($device . 'elements.card-vehicle')    
             @endforeach
            
        </div>

        <section class="py-5">
        @include('elements.section-category')
        </section>
        @include('elements.carrusel-vehicles')
    </div>
    @include('elements.advertisement')
    @include('elements.notification')

@endsection


@section('scripts')
    @include('elements.carrousel-scripts')
@endsection