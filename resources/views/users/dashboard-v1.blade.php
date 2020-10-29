@extends('layouts.default')
@section('section')
<hr class=" d-none d-md-block mt-n1">
<div class="row focom-section mt-4 mx-1 mx-md-3 mx-lg-5">
        <div class="col-12 text-center focom-reset-padding mb-3">
            <div class="focom-user-profile-image mx-auto">
                <img class="focom-vehicle-profile-image" src="{{ auth()->user()->profile_photo_url}}">
            </div>
        <h1 class="h3 font-weight-normal">{{auth()->user()->name}}</h1>
            <div class="mt-3">
                <a href="{{route('user.config')}}">
                    <button type="button" class="btn btn-primary px-3 px-sm-4 mx-0 mx-sm-3">Configuracion</button>
                </a>
                <a href="{{route('info.help')}}">
                    <button class="btn btn-primary px-4 px-sm-5 mx-0 mx-sm-3">Ayuda</button>
                </a>
            </div>
        </div>
        <hr class="w-100">

        {{-- BEGIN LIST --}}
        <div class="col-12 row focom-reset-padding focom-reset-margin focom-vehicles-list mt-3">
            <h3 class="col-12 h4">Tus publicaciones ({{ auth()->user()->articles()->count() }}):</h3>

            @foreach (auth()->user()->articles as $article)
                @include('users.article')    
            @endforeach
            
        </div>
    </div>
@endsection