<div id="focom-mobile-navbar-filters" class="d-flex bg-white shadow-sm text-dark justify-content-end px-2 fixed-top focom-mobile-list-filter focom-nav-transition" style="z-index: 200">
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

<div id="focomFiltersCollapse" class="collapse card card-body focom-filters-mobile focom-nav-transition">
        <div>
            <h1 class="h3 mb-1">Listado</h1>
            <p class="small">{{$articles->total()}} resultados</p>
        </div>
        <div>
            {!! Filter::display() !!}
        </div>
        {{-- BUSCAR --}}
        
        {{-- SHORT BY --}}
        @include('articles.filters.shortby')

        @include('articles.filters.location')

        {{-- CATEGORIA --}}
        @include('articles.filters.categories')
        

        {{-- Precio --}}
        @include('articles.filters.price')

        {{-- Kilometraje --}}
        @include('articles.filters.kilometer')

        {{-- Combustible --}}
        @include('articles.filters.fuel')

        {{-- Condición --}}
        @include('articles.filters.condition')
        
        {{-- Año --}}
        @include('articles.filters.date')

    </div>
