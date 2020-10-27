<script src="/js/slick.min.js" type="text/javascript"></script>
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