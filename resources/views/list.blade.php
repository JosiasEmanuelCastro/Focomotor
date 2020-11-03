@extends('layouts.default')


@section('section')

<hr class=" d-none d-md-block mt-n1">
<div class="row focom-section mt-1 mx-1 mx-md-3 mx-lg-5">



    {{-- BEGIN FILTERS --}}
    @include($device . 'articles.filters')
    {{-- END FILTERS --}}
    {{-- BEGIN LIST --}}


    @if(Agent::isMobile() || Agent::isTable())
    <div class="col-12 mt-3 row p-0 m-0 focom-vehicles-list align-self-start d-flex">
        @foreach($articles as $article)
            @include($device . 'articles.list.card')
        @endforeach
    </div>
    @else
    <div class="col-9 row p-0 m-0 mt-n2 align-self-start d-flex">
        @foreach($articles as $article)
            @include($device . 'articles.list.card')
        @endforeach
    </div>    @endif

    {{ $articles->withQueryString()->links() }}

</div>



{{-- MODALS --}}

{{-- MODAL UBICATION --}}
<div class="modal bd-example-modal-lg" id="focom-modal-filters-location" tabindex="20" role="dialog"
    aria-labelledby="focom-modal-filters-location" aria-hidden="true" style="z-index: 5000">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Ubicación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="name" class="form-control" name="" placeholder="Buscar...">
                <div class="pt-4 pl-1">
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Olavarría (18)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Azul (12)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Tandil (11)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Mar del Plata (10)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Bs.As. (4)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Sierras Bayas (4)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Santiago (2)</a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- MODAL BRANDS --}}
<div class="modal bd-example-modal-lg" id="focom-modal-filters-brand" tabindex="-1" role="dialog"
    aria-labelledby="focom-modal-filters-brand" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Marca</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="name" class="form-control" name="" placeholder="Buscar...">
                <div class="pt-4 pl-1">
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Toyora (18)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Renault (12)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Chery (11)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Chevrolet (10)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Fiat (4)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Dodge (4)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Honda (2)</a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- MODAL MODEL --}}
<div class="modal bd-example-modal-lg" id="focom-modal-filters-model" tabindex="-1" role="dialog"
    aria-labelledby="focom-modal-filters-model" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Modelos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="name" class="form-control" name="" placeholder="Buscar...">
                <div class="pt-4 pl-1">
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Etios (18)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Qq (12)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Civic (11)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Mustang (10)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Freedom (4)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Agile (4)</a>
                    <hr>
                    <a href="" class="d-block text-dark text-decoration-none pb-2">Steapway (2)</a>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
