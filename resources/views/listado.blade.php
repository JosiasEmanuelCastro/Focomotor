@extends('template')


@section('section')

    <hr class=" d-none d-md-block mt-n1">
    <!-- BEGIN MOBILE FILTERS SECTION -->
    <div id="focom-mobile-navbar-filters" class="d-flex d-md-none bg-white shadow-sm text-dark justify-content-between px-2 fixed-top focom-mobile-list-filter focom-nav-transition">
        <span class="d-flex align-items-center text-decoration-none">
            <i class="fas fa-map-marker-alt fa-lg"></i>
            <p class="pt-3 mx-1">Olavarria</p>
        </span>
        <a data-toggle="collapse" href="#focomFiltersCollapse" aria-expanded="true" aria-controls="focomFiltersCollapse" class="d-flex align-items-center text-decoration-none">
            <i class="fas fa-filter fa-lg"></i>
            <p class="pt-3 mx-1">Filtros</p>
            <i class="fas fa-chevron-down fa-sm pt-1"></i>
        </a>
    </div>
    <!-- END MOBILE FILTERS SECTION -->
    <div class="row focom-section mt-1 mx-1 mx-md-3 mx-lg-5">
        <!-- BEGIN FILTERS --->
        <div id="focomFiltersCollapse" class="d-md-block col-12 col-md-3 collapse card card-body focom-filters-mobile focom-nav-transition mb-auto" style="">
            <div class="d-none d-md-block">
                <h1>Listado</h1>
            </div>
            <!-- BUSCAR --->
            <!-- ORDENAR POR --->
            <div class="pt-md-3 my-1">
                <label>Ordenar por</label>
                <select class="custom-select">
                    <option selected>Mas relevantes</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <!-- CATEGORIA --->
            <div class="pt-2 my-1">
                <label>Categoria</label>
                <select class="custom-select">
                    <option selected>Todas las Categorias</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <!-- LOCALIDAD --->
            <div class="pt-2 my-1">
                <label>Localidad</label>
                <select class="custom-select">
                    <option selected>Todas las Localidades</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <!-- PRECIO --->
            <div class="pt-2 my-1">
                <label>Precio</label>
                <input type="range" class="form-control-range">
            </div>
        </div>
        <!-- END FILTERS --->
        <!-- BEGIN LIST --->
        <div class="col-12 col-md-9 row focom-reset-padding focom-reset-margin focom-vehicles-list mt-md-n2">
            <div class="col-6 col-sm-4 col-md-4 col-xl-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
                <a href="{{ route('vehiculo') }}" class="text-dark">
                    <div class="border rounded shadow-sm bg-white rounded focom-list h-100">
                        <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg">
                        <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                        <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                        <div class="pt-3 m-1">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                            <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-xl-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
                <a href="" class="text-dark">
                    <div class="border rounded shadow-sm bg-white rounded focom-list h-100">
                        <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg">
                        <h4 class="m-1 h5 font-weight-normal">Irure eliLorem ipsum mollit sunt occaecat quis ut aute dolore officia sunt id laborum excepteur velit.t ut ad quis ea reprehenderit in sint elit</h4>
                        <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                        <div class="pt-3 m-1">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                            <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-xl-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
                <a href="" class="text-dark">
                    <div class="border rounded shadow-sm bg-white rounded focom-list h-100">
                        <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg">
                        <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                        <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                        <div class="pt-3 m-1">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                            <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-xl-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
                <a href="" class="text-dark">
                    <div class="border rounded shadow-sm bg-white rounded focom-list h-100">
                        <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg">
                        <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea rLorem ipsum cupidatat cillum ut cupidatat qui anim ad dolor incididunt mollit amet. Lorem ipsum aliquip minim ea quis non veniam excepteur dolor in.eprehenderit in sint elit</h4>
                        <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                        <div class="pt-3 m-1">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                            <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-xl-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
                <a href="" class="text-dark">
                    <div class="border rounded shadow-sm bg-white rounded focom-list h-100">
                        <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg">
                        <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                        <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                        <div class="pt-3 m-1">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                            <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END LIST --->
    </div>

@endsection