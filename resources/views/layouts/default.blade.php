<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Required meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/252250494d.js" crossorigin="anonymous"></script>
    {{-- Focom styles --}}
    <link rel="stylesheet" type="text/css" href="/css/focom-style.css">

    @yield('css')

    <title>Focomotor - Vehículos</title>
</head>

<body class="focom-minwidth">

    {{-- BEGIN HEADER DESKTOP --}}

    @include('layouts.partials.header')

    {{-- END HEADER DESKTOP --}}
    
    {{-- BEGIN HEADER MOBILE --}}
    <div id="focom-mobile-navbar" class="focom-nav-transition fixed-top d-flex d-md-none bg-primary text-white align-items-center justify-content-between shadow-sm focom-minwidth px-3 py-3">
        <a id="focom-nav-mobile-logo-search" href="{{ route('home')}}">
            <img src="/img/focom-white.png" height="20px" class="mr-3">
        </a>
        {{-- BEGIN SEARCH --}}
        <a id="focom-nav-arrowback" class="text-decoration-none focom-mouse-hover-pointer" style="display: none">
            <i class="fas fa-arrow-left fa-lg text-white pr-3"></i>
        </a>
        <form class="w-100 d-flex justify-content-end">
            <input id="focom-nav-mobile-input-search" type="search" class="form-control focom-nav-mobile-input" style="display: none" name="" placeholder="Busca en Focomotor">
            <a id="focom-nav-mobile-icon-search" class="focom-mouse-hover-pointer">
                <i class="fas fa-search fa-lg text-white"></i>
            </a>
        </form>
        {{-- END SEARCH --}}
    </div>
    <div class="d-block d-md-none focom-mobile-nav-padding w-100"></div>
    {{-- END HEADER MOBILE --}}

    {{-- BEGIN NAV MOBILE --}}
    @include('layouts.partials.mobile.nav')
    {{-- END NAV MOBILE --}}


    {{-- BEGIN SECTION --}}
    @yield('section')
    {{-- END SECTION --}}


    {{-- BEGIN FOOTER --}}
    @include('layouts.partials.footer')
    {{-- END FOOTER --}}

    {{-- jQuery first, then Popper.js, then Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    {{-- Focom Scripts --}}
    <script src="/js/focom-headerMobile.js" type="text/javascript"></script>
    {{-- More Scripts --}}
    @yield('scripts')
</body>

</html>