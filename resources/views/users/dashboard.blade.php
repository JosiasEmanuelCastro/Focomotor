@extends('layouts.default')
@section('section')
<hr class="d-none d-md-block">
<div class="px-2 px-md-3 px-lg-4 px-xl-5" style="margin-bottom: 400px">
    
<div class="py-0 py-md-4 mt-md-0 mt-n2 mb-md-0 mb-3 d-md-flex d-block justify-content-between">
    <div class="d-flex"> 
        <img class="rounded-circle mr-3" height="60px" src="{{ auth()->user()->profile_photo_url}}">    
        <h1 class="h4 my-auto font-weight-normal mr-2">{{auth()->user()->name}}</h1>
        <a href="{{ route('user.config') }}" class="fas fa-cog my-auto pt-1 h5 text-decoration-none focom-mouse-hover-pointer"></a>
    </div>

    <div class="my-auto d-md-flex d-none justify-content-end" style="min-width: 350px">
        <a href="{{route('articles.create')}}"><button class="btn btn-outline-primary focom-btn-sm mr-2">Publicar<i class="fas fa-plus fa-sm pl-2"></i></button></a>
        <a href="{{ route('user.config') }}"><button class="btn btn-secondary focom-btn-sm">Configuraciones<i class="fas fa-cog fa-sm pl-2"></i></button></a>
    </div>
</div>
@if(auth()->user()->role->name == 'Concesionaria')
    <div class="lead mx-2">{{auth()->user()->role->name}} - {{auth()->user()->plan->name}}</div> 
@endif
<div class="border rounded px-md-4 px-3 py-md-4 py-3 pt-0 mt-md-0 mt-3 d-md-flex d-block justify-content-between">
    <div class="pt-md-1 mb-n4"><span class="h5">{{auth()->user()->publicationsActive}}</span> Publicaciones activas</div><br>
    <div class="pt-md-1"><span class="h5">{{auth()->user()->publicationsInactive}}</span> Publicaciones inactivas</div><br>
    <div class="d-block">  
        <span>Publicaciones disponibles: <span class="h5">{{auth()->user()->publicationsAvailable}}</span><a href=""><sup class="fas fa-question-circle text-black-50 pb-2"></sup></a></span>
        <br class="">
        <a href="{{route('plans')}}" class="small d-flex mt-n2">coseguir más</a>
    </div>
</div>
<article class="border rounded my-3 p-2 p-md-4 focom-articles">

    @if(auth()->user()->articles->count() == 0)
     <div class="text-center">  
        <i class="fas fa-car-crash fa-9x text-secondary"></i>
        <p class="lead">Aún no publicaste ningun vehículo</p>
        <button class="btn btn-outline-primary">Publicá ahora <i class="pl-1 fas fa-chevron-right fa-sm"></i></button>
    </div> 
    @else
   

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
                        <span class="h5 text-success">{{ $article->published_at ? 'Activa' : 'Inactiva' }}</span>
                    </div>
                </div>

                <div class="d-block">
                    <span class="small">Finaliza dentro de 60 días<a class="text-decoration-none" href="">
                    <sup class="fas fa-question-circle text-black-50"></sup></a></span>
                </div>
            </div>

            <div class="col-12 col-md-4 my-md-auto focom-collapseEditCar flex-column justify-content-end d-md-flex d-none">
                <button class="btn btn-secondary mb-2">Editar<i class="fas fa-pencil-alt pl-2"></i>
                </button>
                <form action="{{route('articles.activate', ['article' => $article, 'activate' => $article->published_at ? false : true])}}" method="POST">
                    @csrf
                    @method('patch')
                    <button type="submit" class="btn btn-danger btn-sm mb-2">{{ $article->published_at ? 'Desactivar' : 'Activar' }}</button>
                </form>
                <button  data-title="{{$article->title}}" data-href="/articles/{{ $article->id }}" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm">Eliminar<i class="fas fa-trash pl-2"></i>
                </button>
            </div>

            <div>
                <i class="fas fa-ellipsis-v focom-mouse-hover-pointer d-md-none d-block position-absolute"
                style="top: 2px; right: 15px;"></i>
            </div>
            

        </div> 

    </div>
    <hr class="focom-lastHide">

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Confirmar eliminación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
            
                <div class="modal-body">
                    <p>Esta a punto de eliminar su vehículo <span class="article-title"></span> de Focomotor</p>
                    <p>¿Estas seguro que desea continuar?</p>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <form class="delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-ok">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif  
</article>

</div>


@endsection

@section('scripts')

<script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.delete').attr('action', $(e.relatedTarget).data('href'));
        
        //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.delete').attr('action') + '</strong>');
        $('.article-title').html('<strong>' + $(e.relatedTarget).data('title') + '</strong>');
    });
</script>
@endsection