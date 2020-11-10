<div id="focomSlideHome" class="carousel slide @if(Agent::isMobile() || Agent::isTablet()) mt-n4 @else mt-0 @endif"
    data-ride="carousel" data-pause="false" data-interval="4500" keyboard="false" data-touch="true">
    <div class="carousel-inner">
        @if(Agent::isMobile() || Agent::isTablet())
            <div class="carousel-item active">
                <a href="{{ route('articles.create') }}">
                    <img src="/img/BannerMobile1.jpg" class="w-100" alt="Publish">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('info.faq') }}">
                    <img src="/img/BannerMobile2.jpg" class="w-100" alt="Faq">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('articles.create') }}">
                    <img src="/img/BannerMobile3.jpg" class="w-100" alt="Publish">
                </a>
            </div>
        @else
            <div class="carousel-item active">
                <a href="{{ route('articles.create') }}">
                    <img src="/img/Banner1.jpg" class="w-100" alt="Publish">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('info.faq') }}">
                    <img src="/img/Banner2.jpg" class="w-100" alt="Faq">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('articles.create') }}">
                    <img src="/img/Banner3.jpg" class="w-100" alt="Publish">
                </a>
            </div>
        @endif
    </div>
    
    <a class="carousel-control-prev focom-opacity-mobile-none" href="#focomSlideHome" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
    <a class="carousel-control-next focom-opacity-mobile-none" href="#focomSlideHome" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
</div>
