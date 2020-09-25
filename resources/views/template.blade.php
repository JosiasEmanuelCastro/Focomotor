<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/252250494d.js" crossorigin="anonymous"></script>
    <!-- Focom styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/focom-style.css')}}">
    <title>Focomotor - Vehículos</title>
</head>

<body class="focom-minwidth">
    <!-- BEGIN HEADER DESKTOP --->
    <header class="d-none d-md-block my-3 mx-md-4 mx-lg-5">
        <div class="d-flex align-items-center">
            <div class="flex-grow-0">
                <div class="pt-1 mb-n1">
                    <a href="{{ route('inicio')}}">
                        <img height="20px" src="../img/focom-primary.png">
                    </a>
                </div>
                <div class="pt-4">
                    <span href="html/" class="text-decoration-none focom-header-desktop-ubication"></span>
                </div>
            </div>
            <div class="flex-grow-1 mx-md-4 mx-lg-5">
                <div class="input-group focom-nav-desktop-search">
                    <input type="text" class="form-control focom-nav-desktop-input" placeholder="Buscar en Focomotor">
                    <div class="input-group-append">
                        <button class="focom-nav-desktop-searchbutton bg-primary input-group-text fas fa-search fa-lg text-white" id=""></button>
                    </div>
                </div>
                <div class="focom-nav-desktop">
                    <a href="{{ route('inicio')}}" class="text-primary">Inicio</a>
                    <a href="{{ route('listado') }}" class="text-black-50">Listado</a>
                    <a href="{{ route('publicar') }}" class="text-black-50">Publicar</a>
                    <a href="{{ route('planes') }}" class="text-black-50">Consesionarias</a>
                    <a href="{{ route('ayuda') }}" class="text-black-50">Ayuda</a>
                </div>
            </div>
            <div class="flex-grow-0">
                <a href="{{ route('ingresar') }}" class="font-weight-normal text-black-50 px-1">Ingresar</a>
                <a href="{{ route('registro') }}">
                    <button class="btn btn-primary">Registrarse</button>
                </a>
            </div>
        </div>
    </header>
    <div></div>
    <!-- END HEADER DESKTOP --->
    <!-- BEGIN HEADER MOBILE --->
    <div id="focom-mobile-navbar" class="focom-nav-transition fixed-top d-flex d-md-none bg-primary text-white align-items-center justify-content-between shadow-sm focom-minwidth px-3 py-3">
        <a id="focom-nav-mobile-logo-search" href="{{ route('inicio')}}">
            <img src="../img/focom-white.png" height="20px" class="mr-3">
        </a>
        <!-- BEGIN SEARCH -->
        <a id="focom-nav-arrowback" class="text-decoration-none focom-mouse-hover-pointer" style="display: none">
            <i class="fas fa-arrow-left fa-lg text-white pr-3"></i>
        </a>
        <form class="w-100 d-flex justify-content-end">
            <input id="focom-nav-mobile-input-search" type="search" class="form-control focom-nav-mobile-input" style="display: none" name="" placeholder="Busca en Focomotor">
            <a id="focom-nav-mobile-icon-search" class="focom-mouse-hover-pointer">
                <i class="fas fa-search fa-lg text-white"></i>
            </a>
        </form>
        <!-- END SEARCH -->
    </div>
    <div class="d-block d-md-none focom-mobile-nav-padding w-100"></div>
    <!-- END HEADER MOBILE --->
    <!-- BEGIN NAV MOBILE --->
    <div id="focom-nav-mobile" class="focom-mobile-nav w-100 fixed-bottom bg-white d-md-none focom-minwidth border-top">
        <div class="d-flex font-weight-bold text-dark text-center">
            <a href="{{ route('inicio')}}" class="m-auto text-decoration-none">
                <i class="fas fa-home focom-mobile-nav-icon text-primary"></i>
                <p class="focom-mobile-nav-text text-primary">Inicio</p>
            </a>
            <a href="{{ route('listado') }}" class="m-auto text-decoration-none">
                <i class="fas fa-car focom-mobile-nav-icon"></i>
                <p class="focom-mobile-nav-text">Vehículos</p>
            </a>
            <a href="{{ route('publicar') }}" class="m-auto text-decoration-none">
                <i class="fab fa-wpforms fa-2x focom-mobile-nav-icon"></i>
                <p class="focom-mobile-nav-text">Publicar</p>
            </a>
            <a href="{{ route('planes') }}" class="m-auto text-decoration-none">
                <i class="fas fa-arrow-circle-up fa-2x focom-mobile-nav-icon"></i>
                <p class="focom-mobile-nav-text">Planes</p>
            </a>
            <a href="{{ route('ingresar') }}" class="m-auto text-decoration-none">
                <i class="fas fa-user fa-2x focom-mobile-nav-icon"></i>
                <p class="focom-mobile-nav-text">Usuario</p>
            </a>
        </div>
    </div>
    <!-- END NAV MOBILE --->




    <!-- BEGIN SECTION -->
    @yield('section')
    <!-- END SECTION -->






    <!-- BEGIN FOOTER --->
    <div class="mt-5 bg-dark text-white p-5 d-none d-md-block">
        <div class="row">
            <div class="col-3">
                <img src="../img/focom-white.png" height="20px">
            </div>
            <div class="col-3">
                <h5 class="mr-n5">SOBRE NOSOTROS</h5>
                <p class="small">Focomotor es el nuevo mercado en línea para compradores y vendedores de vehículos nuevos o usados. Concesionarias y vendedores privados pueden publicar en Focomotor con planes de precios asequibles.</p>
            </div>
            <div class="col-3 pl-5">
                <h5>SITIOS</h5>
                <a href="{{ route('inicio')}}" class="small text-white">
                    <u>Inicio</u>
                </a>
                <br>
                <a href="{{ route('listado') }}" class="small text-white">
                    <u>Listado</u>
                </a>
                <br>
                <a href="{{ route('ingresar') }}" class="small text-white">
                    <u>Iniciar sesión</u>
                </a>
                <br>
                <a href="{{ route('registro')}}" class="small text-white">
                    <u>Registrarse</u>
                </a>
                <br>
                <a href="{{ route('publicar') }}" class="small text-white">
                    <u>Publicar</u>
                </a>
                <br>
                <a href="{{ route('planes')}}" class="small text-white">
                    <u>Planes</u>
                </a>
                <br>
                <a href="{{ route('ayuda') }}" class="small text-white">
                    <u>Ayuda</u>
                </a>
                <br>
            </div>
            <div class="col-3 pr-4">
                <h5>CONTACTO</h5>
                <p class="small text-white">
                    ¿Tenés alguna pregunta?
                    <a href="{{ route('contacto') }}" class="text-white"><br>
                        <u>Contáctanos</u>
                    </a>
                    <br>
                    <br>O envíanos un correo electrónico<br>
                    ayuda@focomotor.com.ar
                </p>
            </div>
        </div>
    </div>
    <!-- END FOOTER --->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- Focom Scripts -->
    <script src="{{asset('js/focom-headerMobile.js')}}" type="text/javascript"></script>
    <!-- More Scripts -->
    @yield('scripts')
</body>

</html>