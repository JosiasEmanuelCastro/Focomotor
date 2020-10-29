@extends('layouts.default')
@section('section')
<hr class="d-none d-md-block">
<div class="px-2 px-md-3 px-lg-4 px-xl-5" style="margin-bottom: 400px">
    
<div class="py-0 py-md-4 mt-md-0 mt-n2 mb-md-0 mb-3 d-md-flex d-block justify-content-between">
    <div class="d-flex"> 
        <img class="rounded-circle mr-3" height="60px" src="{{ auth()->user()->profile_photo_url}}">    
        <h1 class="h4 my-auto font-weight-normal mr-2">{{auth()->user()->name}}</h1>
        <a class="fas fa-cog my-auto pt-1 h5 text-decoration-none focom-mouse-hover-pointer"></a>
    </div>

    <div class="my-auto d-md-flex d-none justify-content-end" style="min-width: 350px">
        <button class="btn btn-outline-primary focom-btn-sm mr-2">Publicar<i class="fas fa-plus fa-sm pl-2"></i></button>
        <button class="btn btn-secondary focom-btn-sm">Configuraciones<i class="fas fa-cog fa-sm pl-2"></i></button>
    </div>
</div>
{{-- BEGIN Si es particular no mostrar --}}
<div class="lead mx-2">Concesionaria - Plan x10 Clasificados</div> 
{{-- END Si es particular no mostrar --}}
<div class="border rounded px-md-4 px-3 py-md-4 py-3 pt-0 mt-md-0 mt-3 d-md-flex d-block justify-content-between">
    <div class="pt-md-1 mb-n4"><span class="h5">2</span> Publicaciones activas</div><br>
    <div class="pt-md-1"><span class="h5">0</span> Publicaciones inactivas</div><br>
    <div class="d-block">  
        <span>Publicaciones disponibles: <span class="h5">15</span><a href=""><sup class="fas fa-question-circle text-black-50 pb-2"></sup></a></span>
        <br class="">
        <a href="" class="small d-flex mt-n2">coseguir más</a>
    </div>
</div>
<article class="border rounded my-3 p-2 p-md-4 focom-articles">

    {{-- BEGIN NO HAVE VEHICLES 
     <div class="text-center">  
        <i class="fas fa-car-crash fa-9x text-secondary"></i>
        <p class="lead">Aún no publicaste ningun vehículo</p>
        <button class="btn btn-outline-primary">Publicá ahora <i class="pl-1 fas fa-chevron-right fa-sm"></i></button>
    </div> 
    END NO HAVE VEHICLES --}}

    @foreach (auth()->user()->articles as $article)
    <div class="row py-3">
        <div class="col-5 col-md-4 col-lg-3 pr-0">
            <img class="rounded d-block focom-img-cover h-100 w-100 focom-img-maxheight" src="/storage/images/thumbnails/{{$article->feature_image}}">  
        </div> 

        <div class="col-7 col-md-8 col-lg-9 row m-0 ">
            
            <div class="col-12 col-md-4 p-0 h-25">
                <h3 class="font-weight-normal pr-3 h5">{{$article->title}}</h3>
                <div class="d-none d-sm-block"> 
                    <p class="focom-list-price font-weight-normal h6">${{$article->price}}</p>

                    <i class="fas fa-map-marker-alt fa-sm"></i>
                    <p class="d-inline-block font-weight-normal">{{ $article->place }}</p>
                </div>
            </div>

            <div class="col-12 col-md-4 p-0 my-md-auto mt-auto">
                <div class="d-flex d-md-block justify-content-start">
                    <div class="mr-5">
                        <span class="h6"><i class="fas fa-eye pr-1 fa-sm"></i>{{ $article->views}}</span>
                    </div>

                    <div class="">
                        <span class="h5 text-success">Activa</span>
                    </div>
                </div>

                <div class="d-block">
                    <span class="small">Finaliza dentro de 60 días<a class="text-decoration-none" href="">
                    <sup class="fas fa-question-circle text-black-50"></sup></a></span>
                </div>
            </div>

            <div id="focom-editCarCard-{{$article->id}}" class="col-12 col-md-4 my-md-auto focom-collapseEditCar flex-column justify-content-end d-md-flex d-none">
                <button class="btn btn-secondary mb-n3">Editar
                    <i class="fas fa-pencil-alt pl-2"></i>
                </button>
                <br>
                <button class="btn btn-danger">Desactivar</button>
            </div>

            <div class="">
                <i id="focom-editCarButton-{{$article->id}}" class="fas fa-ellipsis-v focom-mouse-hover-pointer d-md-none d-block position-absolute"
                style="top: 2px; right: 15px;"></i>
            </div>
            <script type="text/javascript">
            document.getElementById('focom-editCarButton-{{$article->id}}').addEventListener('click', function(){
                 document.getElementById('focom-editCarCard-{{$article->id}}').classList.toggle('focom-editCarOpen');
            });
            </script>

        </div> 

    </div>
    <hr class="focom-lastHide">
    @endforeach  
</article>

</div>


@endsection