        <link rel="stylesheet" type="text/css" href="/css/slick.css">

           <h2 class="py-3 h3">Más vistos:</h2>
          <section class="focom-slider slider mx-n3">
            @foreach ($articles as $article)
                @include('elements.card-carrusel-vehicle')  
                @include('elements.card-carrusel-vehicle')  
                @include('elements.card-carrusel-vehicle')
            @endforeach
          </section>
        