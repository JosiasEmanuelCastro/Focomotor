@extends('layouts.default')
@section('section')
<hr>
<div class="container" style="margin-bottom: 400px">
    
<div class="py-4 d-flex justify-content-between">
    <div class="d-flex"> 
        <img class="rounded-circle mr-3" height="60px" src="{{ auth()->user()->profile_photo_url}}">    
        <h1 class="h4 my-auto font-weight-normal mr-2">{{auth()->user()->name}}</h1>
        <a class="fas fa-cog my-auto pt-1 h5 text-decoration-none focom-mouse-hover-pointer"></a>
    </div>

    <div class="my-auto">
        <button class="btn btn-outline-primary">Publicar<i class="fas fa-plus fa-sm pl-2"></i></button>
        <button class="btn btn-secondary">Configuraciones<i class="fas fa-cog fa-sm pl-2"></i></button>
    </div>
</div>
<!-- BEGIN Si es particular no mostrar -->
<span class="lead pl-2">Concesionaria - Plan x10 Clasificados</span> 
<!-- END Si es particular no mostrar -->
<div class="border rounded px-4 py-4 pt-0 d-flex justify-content-between">
    <span class="pt-1"><span class="h5">2</span><a href=""></a> Publicaciones activas</span>
    <span class="pt-1"><span class="h5">0</span><a href=""></a> Publicaciones inactivas</span>
    <div class="d-block">  
        <span>Publicaciones disponibles: <span class="h5">15</span><a href=""><sup class="fas fa-question-circle text-black-50 pb-2"></sup></a></span>
        <br class="">
        <a href="" class="small d-flex mt-n2">coseguir más</a>
    </div>
</div>
<div class="border rounded my-3 px-4 py-4">

    {{-- BEGIN NO HAVE VEHICLES --}}
<!--     <div class="text-center">  
        <i class="fas fa-car-crash fa-9x text-secondary"></i>
        <p class="lead">Aún no publicaste ningun vehículo</p>
        <button class="btn btn-outline-primary">Publicá ahora <i class="pl-1 fas fa-chevron-right fa-sm"></i></button>
    </div> -->
    {{-- END NO HAVE VEHICLES --}}

    @foreach (auth()->user()->articles as $article)
    <div class="d-block">    
        <div class="d-flex justify-content-start">
            <img class="rounded d-block focom-img-cover" width="200px" src="/storage/images/thumbnails/{{$article->feature_image}}">  
            <div class="ml-4 w-25 my-auto">
                <h3 class="h5 font-weight-normal">{{$article->title}}</h3>
                <p class="focom-list-price font-weight-normal h6">${{$article->price}}</p>

                <i class="fas fa-map-marker-alt fa-sm"></i>
                <p class="d-inline-block font-weight-normal">{{ $article->place }}</p>

            </div>
            <div class="ml-4 w-25 my-auto">
                <span class=""><i class="fas fa-eye pr-1 fa-sm"></i>{{ $article->views}}</span><br>
                <div class="py-2 mb-0"><span class="h4 text-success">Activa</span></div>
                <span class="">Finaliza dentro de 60 días</span>
            </div>
            <div class="ml-4 w-25 my-auto">
                <button class="btn btn-outline-secondary font-weight-bold mb-2">Editar publicación<i class="fas fa-pencil-alt pl-2"></i></button>
                <button class="btn btn-danger">Desactivar publicación</button>
            </div>
        </div>
    </div>
    @endforeach

</div>

</div>


@endsection