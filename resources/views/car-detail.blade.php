@extends('layouts.default')


@section('section')


    <hr class="d-none d-md-block mt-n1">
    <div class="w-100">
        <div class="focom-section p-3 p-md-0 mt-n4 mt-md-0 px-0 px-md-4 px-lg-5">
            <div class="row">
                <!-- BEGIN IMAGES -->
                <div class="col-12 col-md-8">
                    <div class="d-flex focom-vehicle-images-section">
                        <!-- MIN IMAGES DESKTOP -->
                        <div class="d-none d-md-block focom-reset-padding pr-3">
                            <div class="focom-vehicle-min-images mb-3 focom-mouse-hover-pointer">
                                <a id="image1">
                                    <img class="rounded" src="https://focomotor.com.ar/wp-content/uploads/2020/08/Car-1.png">
                                </a>
                            </div>
                            <div class="focom-vehicle-min-images mb-3 focom-mouse-hover-pointer">
                                <a id="image2">
                                    <img class="rounded" src="https://focomotor.com.ar/wp-content/uploads/2020/08/Car-5.jpg">
                                </a>
                            </div>
                            <div class="focom-vehicle-min-images mb-3 focom-mouse-hover-pointer ">
                                <a id="image3">
                                    <img class="rounded" src="https://focomotor.com.ar/wp-content/uploads/2020/08/Car-7-1.jpg">
                                </a>
                            </div>
                            <div class="focom-vehicle-min-images mb-3 focom-mouse-hover-pointer ">
                                <a id="image4">
                                    <img class="rounded" src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg">
                                </a>
                            </div>
                            <div class="focom-vehicle-min-images mb-3 focom-mouse-hover-pointer ">
                                <a id="image5">
                                    <img class="rounded" src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-14-1-oth3xq5i7ty2p02zxcgvjlpqq7llrebs2bx55m5o2o.jpg">
                                </a>
                            </div>
                        </div>
                        <!-- GALLERY PRINCIPAL -->
                        <div class="focom-reset-padding mt-n3 mx-n3 mt-md-0 mx-md-0">
                            <span class="badge badge-dark font-weight-normal focom-gallery-indicator d-block d-md-none">5 Fotos</span>
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
                                <div class="carousel-inner focom-vehicle-image-principal focom-mouse-hover-pointer">
                                    <div id="slide1" class="carousel-item active" data-toggle="modal" data-target="#focomImagesFullWidth">
                                        <img class="" src="https://focomotor.com.ar/wp-content/uploads/2020/08/Car-1.png" data-src="" alt="" data-holder-rendered="true">
                                    </div>
                                    <div id="slide2" class="carousel-item" data-toggle="modal" data-target="#focomImagesFullWidth">
                                        <img src="https://focomotor.com.ar/wp-content/uploads/2020/08/Car-5.jpg" alt="" data-holder-rendered="true">
                                    </div>
                                    <div id="slide3" class="carousel-item" data-toggle="modal" data-target="#focomImagesFullWidth">
                                        <img src="https://focomotor.com.ar/wp-content/uploads/2020/08/Car-7-1.jpg" alt="" data-holder-rendered="true">
                                    </div>
                                    <div id="slide4" class="carousel-item" data-toggle="modal" data-target="#focomImagesFullWidth">
                                        <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" alt="" data-holder-rendered="true">
                                    </div>
                                    <div id="slide5" class="carousel-item" data-toggle="modal" data-target="#focomImagesFullWidth">
                                        <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-14-1-oth3xq5i7ty2p02zxcgvjlpqq7llrebs2bx55m5o2o.jpg" alt="" data-holder-rendered="true">
                                    </div>
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
                <!-- END IMAGES -->
                <!-- BEGIN GALLERY FULL WIDTH -->
                <div class="modal focom-full-gallery-backgroud focom-minwidth" id="focomImagesFullWidth" tabindex="-1" role="dialog" aria-labelledby="focomImagesFullWidth" aria-hidden="true">
                    <i class="fas fa-times fa-2x text-white focom-full-gallery-close carousel-control-next focomjsClose" data-dismiss="modal" aria-label="Close"></i>
                    <div id="focomImagesFullWidthGallery" class="carousel slide" data-ride="carousel" data-interval="false" data-touch="true" data-wrap="true">
                        <div class="carousel-inner focom-full-gallery d-flex align-items-center">
                            <div id="fullImage1" class="carousel-item focomjsClose" data-dismiss="modal" aria-label="Close">
                                <img class="" src="https://focomotor.com.ar/wp-content/uploads/2020/08/Car-1.png" data-src="" alt="" data-holder-rendered="true">
                            </div>
                            <div id="fullImage2" class="carousel-item focomjsClose" data-dismiss="modal" aria-label="Close">
                                <img src="https://focomotor.com.ar/wp-content/uploads/2020/08/Car-5.jpg" alt="" data-holder-rendered="true">
                            </div>
                            <div id="fullImage3" class="carousel-item focomjsClose" data-dismiss="modal" aria-label="Close">
                                <img src="https://focomotor.com.ar/wp-content/uploads/2020/08/Car-7-1.jpg" alt="" data-holder-rendered="true">
                            </div>
                            <div id="fullImage4" class="carousel-item focomjsClose" data-dismiss="modal" aria-label="Close">
                                <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" alt="" data-holder-rendered="true">
                            </div>
                            <div id="fullImage5" class="carousel-item focomjsClose" data-dismiss="modal" aria-label="Close">
                                <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-14-1-oth3xq5i7ty2p02zxcgvjlpqq7llrebs2bx55m5o2o.jpg" alt="" data-holder-rendered="true">
                            </div>
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
                <!--
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenteredLabel">Número de <span>Mario Hernandez</span></h5>
                  
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body py-5 px-3 px-sm-4 px-md-5 d-flex">
                  
                        <i class="fas fa-phone-alt fa-2x pr-3 pt-1"></i>
                        <span class="h3 font-weight-normal">+54 5684 2348756</span>
                  
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                      </div>-->
                <!-- END IMAGEN FULL WIDTH -->
                <!-- VEHICLE INFO -->
                <div class="col-12 col-md-4 focom-reset-padding pl-0 pl-md-3 focom-vehicle-info">
                    <div class="shadow-d-md border-d-md pt-3 pb-0 pb-md-5 px-3">
                        <h1 class="h3">Chevrolet 400 45980km 2016 Diésel</h1>
                        <p class="lead focom-vehicle-price m-1">$856200</p>
                        <div class="pt-1 m-1">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                            <p class="pl-1 lead d-inline-block font-weight-normal">Tortuguitas</p>
                            <hr>
                            <!-- VENDEDOR INFO -->
                            <div class="row text-center focom-reset-padding focom-reset-margin">
                                <div class="col-5 col-md-12">
                                    <div class="pt-0 pt-md-2">
                                        <div class="focom-image-profile mx-auto">
                                            <img src="https://static.ellahoy.es/r/845X0/www.ellahoy.es/img/perfil-del-hombre-infiel.jpg">
                                        </div>
                                        <p class="mb-n1">Mario Hernandez</p>
                                        <p><a href="usuario.html" class="small"><u>Ver perfil</u></a></p>
                                    </div>
                                </div>
                                <div class="col-7 col-md-12 align-self-center">
                                    <button class="btn btn-primary fa-sm focom-button-width" data-toggle="modal" data-target="#focomContactNumberModal"><i class="fas fa-phone-alt fa-lg pl-1 pr-2"></i> Ver numero</button><br>
                                    <button class="btn btn-success focom-button-width mt-2 fa-sm dnone"><i class="fab fa-whatsapp fa-lg pl-1 pr-2"></i> WhastsApp </button>
                                </div>
                            </div>
                        </div>
                        <hr class="d-block d-md-none mt-n1">
                    </div>
                </div>
            </div>
            <!-- VEHICLE DETAILS -->
            <div class="row mx-0 mx-md-3">
                <div class="col-12 col-md-8 shadow-d-md border-d-md rounded p-3 mt-n3 mt-md-3 ">
                    <div class="">
                        <h2 class="h4">Detalles:</h2>
                        <div class="row">
                            <div class="col-6 pb-5">
                                <p class="mb-n2 my-3 font-weight-light">Año:</p>
                                <p class="font-weight-normal focom-vehicle-details">2016</p>
                                <p class="mb-n2 my-3 font-weight-light">Kilometraje:</p>
                                <p class="font-weight-normal focom-vehicle-details">45980km</p>
                            </div>
                            <div class="col-6 pb-5">
                                <p class="mb-n2 my-3 font-weight-light">Condición:</p>
                                <p class="font-weight-normal focom-vehicle-details">Usado</p>
                                <p class="mb-n2 my-3 font-weight-light">Combustible:</p>
                                <p class="font-weight-normal focom-vehicle-details">Diésel</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="h4">Descripción:</h2>
                        <p class="pr-0 pr-md-5 pb-0 pb-md-5">Occaecat adipisicing ullamco dolore nisi velit sint dolor dolor ea labore ad aute cillum anim nulla adipisicing. Lorem ipsum in nostrud aliquip dolor dolore nulla sed enim do excepteur do culpa anim amet labore dolore. In do occaecat ad sint in est ullamco nisi ullamco exercitation aute nulla fugiat commodo excepteur veniam. Consequat incididunt proident duis et id veniam culpa aliqua nostrud ea aliqua aliqua adipisicing. Sit labore dolor irure minim sed dolor adipisicing minim do do dolore in ea.</p>
                    </div>
                </div>
            </div>
            <hr class="d-block d-md-none">
            <!-- OTHER VEHICLES 
            <div class="mt-0 mt-md-5 pt-5 mx-2">
               <h4>Ultimas publicaciones:</h4>
               <div class="row focom-section mt-1">
                  <div class="col-6 col-sm-4 col-md-3 col-lg-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
                     <a href="" class="text-dark">
                        <div class="border rounded shadow bg-white rounded focom-list">
                           <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" width="100%">
                           <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                           <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                           <div class="pt-3 m-1">
                              <i class="fas fa-map-marker-alt fa-lg"></i>
                              <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
                     <a href="" class="text-dark">
                        <div class="border rounded shadow bg-white rounded focom-list">
                           <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" width="100%">
                           <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                           <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                           <div class="pt-3 m-1">
                              <i class="fas fa-map-marker-alt fa-lg"></i>
                              <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
                     <a href="" class="text-dark">
                        <div class="border rounded shadow bg-white rounded focom-list">
                           <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" width="100%">
                           <h4 class="m-1 h5 font-weight-normal">Irure elit ut ad quis ea reprehenderit in sint elit</h4>
                           <p class="lead focom-list-price m-1 font-weight-normal">$489600</p>
                           <div class="pt-3 m-1">
                              <i class="fas fa-map-marker-alt fa-lg"></i>
                              <p class="pl-1 lead d-inline-block font-weight-normal">Sit sunt</p>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-3 focom-list focom-reset-padding p-1 p-sm-2 p-md-2">
                     <a href="" class="text-dark">
                        <div class="border rounded shadow bg-white rounded focom-list">
                           <img src="https://focomotor.com.ar/wp-content/uploads/elementor/thumbs/Car-21-otis76li15rp12tqtltcwnc8mkmgebx4o5899jhd0g.jpg" width="100%">
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
            </div>
            -->
        </div>
        <!-- BEGIN CONTACT NUMBER MODAL -->
        <div class="modal focom-minwidth" id="focomContactNumberModal" tabindex="-1" role="dialog" aria-labelledby="focomContactNumberModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenteredLabel">Número de <span>Mario Hernandez</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body py-5 px-3 px-sm-4 px-md-5 d-flex">
                        <i class="fas fa-phone-alt fa-2x pr-3 pt-1"></i>
                        <span class="h3 font-weight-normal">+54 5684 2348756</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTACT NUMBER MODAL -->
        <!-- END SECTION --->

@endsection

@section('scripts')
    <script type="text/javascript" src="/js/focom-pageVehicle.js"></script>
@endsection