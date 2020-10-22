@extends('layouts.default')


@section('section')

    <hr class=" d-none d-md-block mt-n1">
    {{-- BEGIN MOBILE FILTERS SECTION --}}
    <div id="focom-mobile-navbar-filters" class="d-flex d-md-none bg-white shadow-sm text-dark justify-content-end px-2 fixed-top focom-mobile-list-filter focom-nav-transition">
        {{--  NO DELETE
        <span class="d-flex align-items-center text-decoration-none">
            <i class="fas fa-map-marker-alt fa-lg"></i>
            <p class="pt-3 mx-1">Olavarria</p>
        </span>
        --}}
        <a data-toggle="collapse" href="#focomFiltersCollapse" aria-expanded="true" aria-controls="focomFiltersCollapse" class="d-flex align-items-center text-decoration-none">
            <i class="fas fa-filter fa-lg"></i>
            <p class="pt-3 mx-1">Filtros</p>
            <i class="fas fa-chevron-down fa-sm pt-1"></i>
        </a>
    </div>
    {{-- END MOBILE FILTERS SECTION --}}
    <div class="row focom-section mt-1 mx-1 mx-md-3 mx-lg-5">
        {{-- BEGIN FILTERS --}}
        <div id="focomFiltersCollapse" class="d-md-block col-12 col-md-3 collapse card card-body focom-filters-mobile focom-nav-transition mb-auto class">
            <div>
                <h1 class="h3 mb-1">Listado</h1>
                <p class="small">15.024 resultados</p>
            </div>
            <div>
                <a class="badge badge-primary font-weight-bold focom-mouse-hover-pointer">Toyota<i class="fas fa-times pl-2"></i></a>
                <a class="badge badge-primary font-weight-bold focom-mouse-hover-pointer">Nafta<i class="fas fa-times pl-2"></i></a>
                <a class="badge badge-primary font-weight-bold focom-mouse-hover-pointer">Toyota<i class="fas fa-times pl-2"></i></a>
                <a class="badge badge-primary font-weight-bold focom-mouse-hover-pointer">Nafta<i class="fas fa-times pl-2"></i></a>
            </div>
            {{-- BUSCAR --}}
            {{-- ORDENAR POR --}}
            <div class="pt-3 my-1">
                <label class="focom-label-filters mb-0">Ordenar por</label>
                <select class="d-block custom-select-sm pl-0 ml-n1 pr-2 border-0">
                    <option selected>Mas relevantes</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            {{-- UBICACION --}}
            <div class="pt-4 my-1">
                <label class="focom-label-filters">Ubicación</label>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Olavarría (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Azul (12)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Tandil (11)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Mar del plata (10)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Bs.As. Interior. (4)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Sierras Bayas (4)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Santiago (2)</a>
                <a href="" class="focom-filters-locationref fa-sm" data-toggle="modal" data-target="#focom-modal-filters-location"><i class="fas fa-search fa-sm pr-1 "></i>Buscar ciudad</a>
            </div>

            {{-- CATEGORIA --}}
            <div class="pt-4 my-1">
                <label class="focom-label-filters">Categorías</label>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Autos y camionetas (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Motos (12)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Camiones (11)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Nautica (10)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Otros (4)</a>
            </div>

            {{-- Precio --}}
            <div class="pt-4 my-1">
                <label class="focom-label-filters">Precio</label>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Hasta $500.000 (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Hasta $700.000 (12)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Hasta $1.000.000 (10)</a>
                <select class="d-inline-block custom-select-sm pl-0 ml-n1 pr-2 border-0 focom-mouse-hover-pointer">
                    <option selected>Desde</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <i class="pr-1 font-weight-bolder h5">─</i>
                <select class="d-inline-block custom-select-sm pl-0 ml-n1 pr-2 border-0 focom-mouse-hover-pointer">
                    <option selected>Hasta</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            <a class="pl-2 fas fa-search text-primary text-decoration-none focom-mouse-hover-pointer"></a>
            </div>


            {{-- MARCA --}}
            <div class="pt-4 my-1">
                <label class="focom-label-filters">Marcas</label>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Renault (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Toyota (12)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Volskwagen (11)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Audi (10)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Chevrolet (4)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Ford (4)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Chery (2)</a>
                <a href="" class="focom-filters-locationref fa-sm" data-toggle="modal" data-target="#focom-modal-filters-brand"><i class="fas fa-search fa-sm pr-1 "></i>Buscar marca</a>
            </div>

            {{-- Modelo --}}
            <div class="pt-4 my-1">
                <label class="focom-label-filters">Modelo</label>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Etios (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Qq (12)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Civic (11)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Mustang (10)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Freedom (4)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Agile (4)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Steapway (2)</a>
                <a href="" class="focom-filters-locationref fa-sm" data-toggle="modal" data-target="#focom-modal-filters-model"><i class="fas fa-search fa-sm pr-1 "></i>Buscar modelo</a>
            </div>

            {{-- Kilometraje --}}
            <div class="pt-4 my-1">
                <label class="focom-label-filters">Kilometraje</label>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">0km (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Hasta 35.000km (12)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Hasta 75.000km (10)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Hasta 100.000km (8)</a>
                <select class="d-inline-block custom-select-sm pl-0 ml-n1 pr-2 border-0 focom-mouse-hover-pointer">
                    <option selected>Desde</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <i class="pr-1 font-weight-bolder h5">─</i>
                <select class="d-inline-block custom-select-sm pl-0 ml-n1 pr-2 border-0 focom-mouse-hover-pointer">
                    <option selected>Hasta</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            <a class="pl-2 fas fa-search text-primary text-decoration-none focom-mouse-hover-pointer"></a>
            </div>

            {{-- Combustible --}}
            <div class="pt-4 my-1">
                <label class="focom-label-filters">Combustible</label>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Nafta (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Diesel (12)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Nafta y GNC
 (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Eléctrico (12)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Híbrido (11)</a>
            </div>

            {{-- Condición --}}
            <div class="pt-4 my-1">
                <label class="focom-label-filters">Condición</label>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Nuevo (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">Usado (12)</a>
            </div>

            {{-- Año --}}
            <div class="pt-4 my-1">
                <label class="focom-label-filters">Año</label>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">2020 (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">2019 (12)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">2015 (11)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">2014 (9)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">2008 (7)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">2001 (2)</a>
            <select class="d-inline-block custom-select-sm pl-0 ml-n1 pr-2 border-0 focom-mouse-hover-pointer">
                <option selected>Desde</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <i class="pr-1 font-weight-bolder h5">─</i>
            <select class="d-inline-block custom-select-sm pl-0 ml-n1 pr-2 border-0 focom-mouse-hover-pointer">
                <option selected>Hasta</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <a class="pl-2 fas fa-search text-primary text-decoration-none focom-mouse-hover-pointer"></a>
            </div>

            {{-- Puertas --}}
            <div class="pt-4 my-1">
                <label class="focom-label-filters">Puertas</label>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">2 (18)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">3 (12)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">4 (10)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">5 (8)</a>
                <a href="" class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">6 (4)</a>
            </div>
   




        </div>
        {{-- END FILTERS --}}
        {{-- BEGIN LIST --}}
        <div class="col-12 col-md-9 row focom-reset-padding focom-reset-margin focom-vehicles-list mt-md-n2">
            @foreach ($articles as $article)
                @include('articles.list.card')
            @endforeach

            

        </div>
        {{-- END LIST --}}
        {{ $articles->links() }}    
        
    </div>

    

{{-- MODALS --}}

{{-- MODAL UBICATION --}}
<div class="modal bd-example-modal-lg" id="focom-modal-filters-location" tabindex="-1" role="dialog" aria-labelledby="focom-modal-filters-location" aria-hidden="true">
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
<div class="modal bd-example-modal-lg" id="focom-modal-filters-brand" tabindex="-1" role="dialog" aria-labelledby="focom-modal-filters-brand" aria-hidden="true">
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
<div class="modal bd-example-modal-lg" id="focom-modal-filters-model" tabindex="-1" role="dialog" aria-labelledby="focom-modal-filters-model" aria-hidden="true">
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