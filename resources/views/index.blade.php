@extends('layouts.default')


@section('section')
    @include('elements.slider')
    <div class="focom-section mx-3 mx-lg-5">
        <h1 class="h4 mt-4">Ultimas publicaciones:</h1>
        <div class="row mt-1">

            @foreach ($articles as $article)
                @include('elements.card-vehicle')    
            @endforeach
            
        </div>


        @include('elements.advertisement')

        <h1 class="h4 mt-n2">Te puede interesar:</h1>
        <div class="row">

            @foreach ($articles as $article)
                @include('elements.card-vehicle')    
            @endforeach
            
        </div>

    </div>

    @include('elements.notification')

@endsection