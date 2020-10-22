@extends('layouts.default')


@section('section')
    @include('elements.slider')
    <div class="mx-3 mx-lg-5">
        <h2 class="py-3 h3">Ultimas publicaciones:</h2>

        <div class="row mt-1">

            @foreach ($articles as $article)
                @include('elements.card-vehicle')    
            @endforeach
            
        </div>

        @include('elements.section-category')



        @include('elements.advertisement')
    </div>

    @include('elements.notification')

@endsection