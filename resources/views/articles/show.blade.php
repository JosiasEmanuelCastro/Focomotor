@extends('layouts.default')


@section('section')


<hr class="d-none d-md-block mt-n1">
<div class="w-100">
    <div class="focom-section p-3 p-md-0 mt-n4 mt-md-0 px-0 px-md-4 px-lg-5">
        <div class="row">
            {{-- BEGIN IMAGES --}}
            @include('articles.partials.images')
            {{-- END IMAGES --}}


            {{-- VEHICLE INFO --}}
            <div class="col-12 col-md-4 focom-reset-padding pl-0 pl-md-3 focom-vehicle-info">
                <div class="shadow-d-md border-d-md pt-3 pb-0 pb-md-5 px-3">
                    <h1 class="h3">{{ $article->title }}</h1>
                    <p class="lead focom-vehicle-price m-1">${{ $article->price }}</p>
                    <div class="pt-1 m-1">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                        <p class="pl-1 lead d-inline-block font-weight-normal">{{ $article->place }}</p>
                        <hr>
                        {{-- VENDEDOR INFO --}}
                        <div class="row text-center focom-reset-padding focom-reset-margin">
                            <div class="col-5 col-md-12">
                                <div class="pt-0 pt-md-2">
                                    <div class="focom-image-profile mx-auto">
                                        <img src="{{ $article->user->profile_photo_url }}">
                                    </div>
                                    <p class="mb-n1">{{ $article->user->name }}</p>
                                    <p><a href="/profile/{{ $article->user->id }}" class="small"><u>Ver
                                                perfil</u></a></p>
                                </div>
                            </div>
                            <div class="col-7 col-md-12 align-self-center">
                                <button class="btn btn-primary fa-sm focom-button-width" data-toggle="modal"
                                    data-target="#focomContactNumberModal"><i
                                        class="fas fa-phone-alt fa-lg pl-1 pr-2"></i> Ver numero</button><br>
                                <button class="btn btn-success focom-button-width mt-2 fa-sm dnone"><i
                                        class="fab fa-whatsapp fa-lg pl-1 pr-2"></i> WhastsApp </button>
                            </div>
                        </div>
                    </div>
                    <hr class="d-block d-md-none mt-n1">
                </div>
            </div>
        </div>
        {{-- VEHICLE DETAILS --}}
        <div class="row mx-0 mx-md-3">
            <div class="col-12 col-md-8 shadow-d-md border-d-md rounded p-3 mt-n3 mt-md-3 ">
                <div class="">
                    <h2 class="h4">Detalles:</h2>
                    <div class="row">
                        <div class="col-6 pb-5">
                            <p class="mb-n2 my-3 font-weight-light">Año:</p>
                            <p class="font-weight-normal focom-vehicle-details">{{ $article->year }}</p>
                            <p class="mb-n2 my-3 font-weight-light">Kilometraje:</p>
                            <p class="font-weight-normal focom-vehicle-details">{{ $article->kilometers }} km</p>
                        </div>
                        <div class="col-6 pb-5">
                            <p class="mb-n2 my-3 font-weight-light">Condición:</p>
                            <p class="font-weight-normal focom-vehicle-details">{{ $article->condition }}</p>
                            <p class="mb-n2 my-3 font-weight-light">Combustible:</p>
                            <p class="font-weight-normal focom-vehicle-details">{{ $article->fuel }}</p>
                        </div>
                    </div>
                </div>
                @if($article->description)
                    <div>
                        <h2 class="h4">Descripción:</h2>
                        <p class="pr-0 pr-md-5 pb-0 pb-md-5">
                            {{ $article->description }}
                        </p>
                    </div>
                @endif
            </div>
        </div>
        <hr class="d-block d-md-none">

    </div>
    {{-- BEGIN CONTACT NUMBER MODAL --}}
    <div class="modal focom-minwidth" id="focomContactNumberModal" tabindex="-1" role="dialog"
        aria-labelledby="focomContactNumberModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenteredLabel">Número de
                        <span>{{ $article->user->name }}</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-5 px-3 px-sm-4 px-md-5 d-flex">
                    <i class="fas fa-phone-alt fa-2x pr-3 pt-1"></i>
                    <span class="h3 font-weight-normal">{{ $article->user->telephone }}</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    {{-- END CONTACT NUMBER MODAL --}}
    {{-- END SECTION --}}

</div>

@endsection

@section('scripts')
    <script type="text/javascript" src="/js/focom-pageVehicle.js"></script>
@endsection
