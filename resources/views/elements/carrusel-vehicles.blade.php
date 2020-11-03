<link rel="stylesheet" type="text/css" href="/css/slick.css">

<h2 class="py-3 h4">Más vistos:</h2>
<section class="focom-slider slider mx-n3">
    @foreach($articles as $article)
        @include('elements.card-carrusel-vehicle')
        <!-- DOS INCLUDE PARA PRUEBA, BORRAR EL DE ABAJO!!!! -->
        @include('elements.card-carrusel-vehicle')
    @endforeach
</section>
