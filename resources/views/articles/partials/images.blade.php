<div class="col-12 col-md-8">
    <div class="d-flex focom-vehicle-images-section">
        <!-- MIN IMAGES DESKTOP -->
        <div class="d-none d-md-block focom-reset-padding pr-3">
            <div class="focom-vehicle-min-images mb-3 focom-mouse-hover-pointer">
                <a id="image{{$article->id}}">
                    <img class="rounded" src="/storage/images/thumbnails/{{$article->feature_image}}">
                </a>
                @foreach ($article->gallery as $image)
                    <a id="image{{$article->id}}-{{$image->id}}">
                        <img class="rounded" src="/storage/images/thumbnails/{{$image->image_path}}">
                    </a>
                @endforeach
            </div>
        </div>
        <!-- GALLERY PRINCIPAL -->
        <div class="focom-reset-padding mt-n3 mx-n3 mt-md-0 mx-md-0">
            <span class="badge badge-dark font-weight-normal focom-gallery-indicator d-block d-md-none">5 Fotos</span>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
                <div class="carousel-inner focom-vehicle-image-principal focom-mouse-hover-pointer">              
                    <div id="slide{{$article->id}}" class="carousel-item active" data-toggle="modal" data-target="#focomImagesFullWidth">
                        <img class="" src="/storage/images/{{$article->feature_image}}" data-src="" alt="" data-holder-rendered="true">
                    </div>
                    @foreach ($article->gallery as $image)
                        <div id="slide{{$article->id}}-{{$image->id}}" class="carousel-item active" data-toggle="modal" data-target="#focomImagesFullWidth">
                            <img class="" src="/storage/images/{{$image->image_path}}" data-src="" alt="" data-holder-rendered="true">
                        </div>
                    @endforeach
                    
                </div>
                <a class="carousel-control-prev d-flex d-md-none" href="#carouselExampleIndicators" role="button" data-slide="prev">
                </a>
                <a class="carousel-control-next d-flex d-md-none" href="#carouselExampleIndicators" role="button" data-slide="next">
                </a>
                </a>
            </div>
        </div>
    </div>
</div>

 <!-- BEGIN GALLERY FULL WIDTH -->
 <div class="modal focom-full-gallery-backgroud focom-minwidth" id="focomImagesFullWidth" tabindex="-1" role="dialog" aria-labelledby="focomImagesFullWidth" aria-hidden="true">
    <i class="fas fa-times fa-2x text-white focom-full-gallery-close carousel-control-next focomjsClose" data-dismiss="modal" aria-label="Close"></i>
    <div id="focomImagesFullWidthGallery" class="carousel slide" data-ride="carousel" data-interval="false" data-touch="true" data-wrap="true">
        <div class="carousel-inner focom-full-gallery d-flex align-items-center">
            <div id="fullImage{{$article->id}}" class="carousel-item focomjsClose" data-dismiss="modal" aria-label="Close">
                <img src="/storage/images/{{$article->feature_image}}" data-src="" alt="" data-holder-rendered="true">
            </div>
            @foreach ($article->gallery as $image)
                <div id="fullImage{{$article->id}}-{{$image->id}}" class="carousel-item focomjsClose" data-dismiss="modal" aria-label="Close">
                    <img src="/storage/images/thumbnails/{{$image->image_path}}" data-src="" alt="" data-holder-rendered="true">
                </div>
            @endforeach
        </div>
        <a id="fullImageGalleryPrev" class="carousel-control-prev d-none d-md-flex" href="#focomImagesFullWidthGallery" role="button" data-slide="prev">
            <i class="fas fa-chevron-left text-white fa-2x" aria-hidden="true"></i>
            <span class="sr-only">Siguiente</span>
        </a>
        <a id="fullImageGalleryNext" class="carousel-control-next d-none d-md-flex" href="#focomImagesFullWidthGallery" role="button" data-slide="next">
            <i class="fas fa-chevron-right text-white fa-2x" aria-hidden="true"></i>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-prev d-flex d-md-none" href="#focomImagesFullWidthGallery" role="button" data-slide="prev">
            <span class="sr-only">Siguiente</span>
        </a>
        <a class="carousel-control-next d-flex d-md-none" href="#focomImagesFullWidthGallery" role="button" data-slide="next">
            <span class="sr-only">Anterior</span>
        </a>
    </div>
</div>