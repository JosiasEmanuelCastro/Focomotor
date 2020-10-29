@extends('layouts.default')


@section('section')

<hr class=" d-none d-md-block mt-n1">
{{-- BEGIN MOBILE FILTERS SECTION --}}
<div id="focom-mobile-navbar-filters"
    class="d-flex d-md-none bg-white shadow-sm text-dark justify-content-end px-2 fixed-top focom-mobile-list-filter focom-nav-transition">
    {{--  NO DELETE
        <span class="d-flex align-items-center text-decoration-none">
            <i class="fas fa-map-marker-alt fa-lg"></i>
            <p class="pt-3 mx-1">Olavarria</p>
        </span>
        --}}
    <a data-toggle="collapse" href="#focomFiltersCollapse" aria-expanded="true" aria-controls="focomFiltersCollapse"
        class="d-flex align-items-center text-decoration-none">
        <i class="fas fa-filter fa-lg"></i>
        <p class="pt-3 mx-1">Filtros</p>
        <i class="fas fa-chevron-down fa-sm pt-1"></i>
    </a>
</div>
{{-- END MOBILE FILTERS SECTION --}}
<div class="row focom-section mt-1 mx-1 mx-md-3 mx-lg-5">


    <!-- BEGIN LIST --->

    {{-- BEGIN FILTERS --}}
    @include($device . 'articles.filters')
    {{-- END FILTERS --}}
    {{-- BEGIN LIST --}}

    <div class="col-12 col-md-9 row focom-reset-padding focom-reset-margin focom-vehicles-list mt-md-n2">

        
        <ul class="nav justify-content-end">

            <li class="nav nav-link active"><a
                    href="/listado?{{ http_build_query(request()->except("order", "sort")) }}">Newest</a>
            </li>
            <li class="nav nav-link"><a
                    href="/listado?{{ http_build_query(array_merge(request()->all(), ['order' => 'price', 'sort' => 'ASC'])) }}">Price
                    (low)</a></li>
            <li class="nav nav-link"><a
                    href="/listado?{{ http_build_query(array_merge(request()->all(), ['order' => 'price', 'sort' => 'DESC'])) }}">Price
                    (high)</a></li>
        </ul>

        <div class="container">
            <div class="row">

                @foreach($articles as $article)
                    @include('articles.list.card')
                @endforeach

            </div>

        </div>



    </div>

    <!-- END LIST --->
    {{ $articles->withQueryString()->links() }}

</div>



{{-- MODALS --}}

{{-- MODAL UBICATION --}}
<div class="modal bd-example-modal-lg" id="focom-modal-filters-location" tabindex="-1" role="dialog"
    aria-labelledby="focom-modal-filters-location" aria-hidden="true">
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
