@extends('layouts.default')
@section('section')

    @include('elements.slider')
    
    <div class="mx-3 mx-md-5 mx-lg-5">
        <h2 class="py-3 h4">Ultimas publicaciones:</h2>

        <div class="row mt-1 d-flex">

            @foreach ($articles as $article)
                @include($device . 'elements.card-vehicle')    
             @endforeach
            
        </div>

        <section class="py-5">
            @include('elements.section-category')
        </section>
        @include('elements.carrusel-vehicles')
    </div>

    @include('elements.advertisement')
    @include('elements.notification')

@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<style type="text/css">
    @charset 'UTF-8';
    slick-prev,
    .slick-next, .slick-prev
    {
        position: absolute;
        top: 50%;
        display: block;
        cursor: pointer;
        z-index: 50000;

    }
    .slick-prev:hover:before,
    .slick-prev:focus:before,
    .slick-next:hover:before,
    .slick-next:focus:before
    {
        opacity: 1;
    }
    .slick-prev.slick-disabled,
    .slick-next.slick-disabled
    {
        opacity: .0;
        cursor: default;
    }

    .slick-prev:before,
    .slick-next:before
    {
        opacity: .75;
    }

    @media (min-width: 768px) {
        .slick-prev
        {
            left: -25px; 
        }

        .slick-next
        {
            right: -25px;
        }
    }

    @media (max-width: 768px) {
        .slick-prev
        {
            left: 0px;
            display: none;
        }

        .slick-next
        {
            right: 0px;
            display: none;
        }
    }
    .slick-track, .slick-list{
        display: flex;
    }
</style>
@endsection

@section('scripts')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $('.focom-slider').slick({
      dots: false,
      arrows: true,
      infinite: false,
      speed: 300,
      slidesToShow: 5.3,
      slidesToScroll: 5,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            arrows: true,
            slidesToShow: 4.3,
            slidesToScroll: 4,
          }
        },
        {
          breakpoint: 992,
          settings: {
            arrows: true,
            slidesToShow: 3.5,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            slidesToShow: 3.3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            arrows: true,
            slidesToShow: 2.2,
            slidesToScroll: 2
          }
        },
      ]
    });

    //Add Bootstrap styles to the slick buttons
    addBootstraptoButtons();
    function addBootstraptoButtons(){
        var nextButton = document.getElementsByClassName('slick-next');
        nextButton[0].innerHTML = '';
        nextButton[0].classList.add('fas', 'fa-arrow-right', 'fa-lg', 'btn', 'btn-primary', 'rounded-circle', 'p-3');
        var nextButton = document.getElementsByClassName('slick-prev');
        nextButton[0].innerHTML = '';
        nextButton[0].classList.add('fas', 'fa-arrow-left', 'fa-lg', 'btn', 'btn-primary', 'rounded-circle', 'p-3');
    };

    //Cuando se rescala la ventana slick crea devuelta los botones. Aqui le asignamos las clases nuevamente cuando eso ocurre
   $(window).resize(function () 
   {
       addBootstraptoButtons();
   });

</script>
@endsection