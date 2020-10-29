<div id="focomFiltersCollapse"
        class="d-md-block col-12 col-md-3 collapse card card-body focom-filters-mobile focom-nav-transition mb-auto">
        <div>
            <h1 class="h3 mb-1">Listado</h1>
            <p class="small">{{$articles->total()}} resultados</p>
        </div>
        <div>

            {!! Filter::display() !!}
            
        </div>
        {{-- BUSCAR --}}
        
        {{-- UBICACION --}}
        
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