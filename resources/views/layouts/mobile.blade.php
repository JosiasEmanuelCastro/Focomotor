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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('css')

    <title>Focomotor - Vehículos</title>
</head>

<body style="min-width: 265px">
    
    
    {{-- BEGIN HEADER MOBILE --}}
    @include('layouts.partials.mobile.header')
    {{-- END HEADER MOBILE --}}

    {{-- BEGIN NAV MOBILE --}}
    @include('layouts.partials.mobile.nav')
    {{-- END NAV MOBILE --}}

    {{-- BEGIN SECTION --}}
    @yield('section')
    {{-- END SECTION --}}

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