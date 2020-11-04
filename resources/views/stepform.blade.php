@extends('layouts.default')


@section('scripts')

<script type="text/javascript">
            //step 1
            optionsstep1 = document.getElementsByClassName('optionsstep1');
            optionsstep1[0].addEventListener('click', function(){
                console.log('Autos y camionetas');
                showstep2();
            });
            optionsstep1[1].addEventListener('click', function(){
                console.log('Motos');
                showstep2();
            });
            optionsstep1[2].addEventListener('click', function(){
                console.log('Camiones');
                showstep2();
            });
            optionsstep1[3].addEventListener('click', function(){
                console.log('Nautica');
                showstep2();
            });
            optionsstep1[4].addEventListener('click', function(){
                console.log('Otro');
                showstep2();
            });

            //step 2
            document.getElementById('hidestep2').addEventListener('click', hidestep2)

            function showstep2(){
                document.getElementById('step1').classList.toggle('d-none');
                document.getElementById('step2').classList.toggle('d-none');
                scrollTop();
            }
            function hidestep2(){
                document.getElementById('step1').classList.toggle('d-none');
                document.getElementById('step2').classList.toggle('d-none');
                scrollTop();
            }

            //step 3
            document.getElementById('nextstep2').addEventListener('click', showstep3)
            document.getElementById('hidestep3').addEventListener('click', hidestep3)

            function showstep3(){
                document.getElementById('step2').classList.toggle('d-none');
                document.getElementById('step3').classList.toggle('d-none');
                scrollTop();
            }
            function hidestep3(){
                document.getElementById('step2').classList.toggle('d-none');
                document.getElementById('step3').classList.toggle('d-none');
                scrollTop();
            }


            //step 4
            document.getElementById('nextstep3').addEventListener('click', showstep4)
            document.getElementById('hidestep4').addEventListener('click', hidestep4)

            function showstep4(){
                document.getElementById('step3').classList.toggle('d-none');
                document.getElementById('step4').classList.toggle('d-none');
                scrollTop();
            }
            function hidestep4(){
                document.getElementById('step3').classList.toggle('d-none');
                document.getElementById('step4').classList.toggle('d-none');
                scrollTop();
            }

            //step 5
            document.getElementById('nextstep4').addEventListener('click', showstep5)
            document.getElementById('hidestep5').addEventListener('click', hidestep5)

            function showstep5(){
                document.getElementById('step4').classList.toggle('d-none');
                document.getElementById('step5').classList.toggle('d-none');
                scrollTop();
            }
            function hidestep5(){
                document.getElementById('step4').classList.toggle('d-none');
                document.getElementById('step5').classList.toggle('d-none');
                scrollTop();
            }

            

            function scrollTop(){
                window.scrollTo(0, 0)
            }
</script>
<script type="text/javascript">
    document.getElementById('buttonImage#1').addEventListener('click', function(){
        document.getElementById('inputImage#1').click();
    });
    document.getElementById('inputImage#1').addEventListener("change", function(){
        var imageReader1 = new FileReader();
        imageReader1.readAsDataURL(this.files[0]);

        imageReader1.onload = function() {
            document.getElementById('img#1').src = (imageReader1.result);
            showImage1()
        }
    });
    function showImage1(){
        document.getElementById('buttonImage#1').classList.remove('d-flex');
        document.getElementById('img#1').classList.remove('d-none');
        document.getElementById('deleteImage#1').classList.remove('d-none')
    };
    function deleteImage1(){
        document.getElementById('buttonImage#1').classList.add('d-flex');
        document.getElementById('img#1').classList.add('d-none');
        document.getElementById('deleteImage#1').classList.add('d-none');
        document.getElementById('inputImage#1').value = "";
    };
    document.getElementById('deleteImage#1').addEventListener('click', function(){
        deleteImage1();
    });
</script>
<script type="text/javascript">
window.onbeforeunload = function () {
    return "¿Estás seguro de que quieres salir de esta página?";
}
</script>
@endsection



@section('section')

















<hr class="d-none d-md-block">
<div class="container-lg focom-section pt-3" style="padding-bottom: 150px;" id="app">



        {{-- step 1 --}}
        <section id="step1" class="border">
            <div class="card shadow-sm text-white bg-primary p-3 shadow">
                <div> 
                    <h3 class="d-inline h4">1. ¿Qué vehículo quiere publicar?</h3>
                </div>
            </div> 

            <div class="p-4">
                <div class="py-3">
                    <a class="text-dark focom-mouse-hover-pointer text-decoration-none focom-mouse-hover-pointer optionsstep1">
                        <i class="fas fa-car-side h3 d-inline pl-1"></i>
                        <h5 class="pl-3 d-inline">Autos y camionetas</h5>
                    </a>
                </div>
                <hr color="#999">

                <div class="py-3">
                <a class="text-dark text-decoration-none focom-mouse-hover-pointer optionsstep1">
                    <i class="fas fa-motorcycle h3 d-inline pl-1"></i>
                    <h5 class="pl-3 d-inline">Motos</h5>
                </a>
                </div>
                <hr color="#999">

                <div class="py-3">
                <a class="text-dark text-decoration-none focom-mouse-hover-pointer optionsstep1">
                    <i class="fas fa-truck h3 d-inline pl-1"></i>
                    <h5 class="pl-3 d-inline">Camiones</h5>
                </a>
                </div>
                <hr color="#999">

                <div class="py-3">
                <a class="text-dark text-decoration-none focom-mouse-hover-pointer optionsstep1">
                    <i class="fas fa-ship h3 d-inline pl-1"></i>
                    <h5 class="pl-3 d-inline">Nautica</h5>
                </a>
                </div>
                <hr color="#999">

                <div class="py-3">
                <a class="text-dark text-decoration-none focom-mouse-hover-pointer optionsstep1">
                    <i class="fas fa-taxi h2 d-inline pl-1"></i>
                    <h5 class="pl-3 d-inline">Otro</h5>
                </a>
                </div>
            </div>
        </section>
        {{-- STEP 2 --}}
        <section id="step2" class="d-none border">
            <div class="card shadow-sm text-white bg-primary p-3 shadow">
                <div> 
                    <a class="text-decoration-none text-white"><i id="hidestep2" class="fas fa-arrow-left h3 d-inline pr-3 focom-mouse-hover-pointer"></i></a>
                    <h3 class="d-inline h4">2. Ingrese</h3>
                </div>
            </div>
            <div class="p-4">
                
                <div>
                    <label class="h4">Marca</label>
                    <select class="custom-select my-3 mr-sm-2">
                        <option >Marca</option>
                    </select>
                </div>
                <hr color="#999">

                <div>
                    <label class="h4">Modelo</label>
                    <select class="custom-select my-3 mr-sm-2">
                        <option >Modelo</option>
                    </select>
                </div>
                <hr color="#999">

                <div>
                    <label class="h4">Ubicación</label><br>
                        <label class="form-check-label text-muted" for="exampleCheck1">Localidad seleccionada:</label>
                        <input type="" class="form-control" name="" disabled="disabled" value="Olavarria, ciudad de Buenos Aires">
                        <div class="ml-4 mt-2">
                            <input type="checkbox" checked class="form-check-input" id="exampleCheck1">
                            

                        </div>
                        <div class="ml-4 mt-2">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label text-muted" for="exampleCheck1">Usar otra localidad</label>
                        </div>
                </div>
                <div class="w-100 d-flex justify-content-end">
                    <button id="nextstep2" class="btn btn-primary pt-2 px-5 mt-5"><p class="h5">Siguiente</p></button>
                </div>

            </div>
        </section>

        {{-- STEP 3 --}}
        <section id="step3" class="d-none border">
            <div class="card shadow-sm text-white bg-primary p-3 shadow">
                <div> 
                    <a class="text-white text-decoration-none"><i id="hidestep3" class="fas fa-arrow-left h3 d-inline pr-3 focom-mouse-hover-pointer"></i></a>   
                    <h3 class="d-inline h4">3. Ingrese</h3>
                </div>
            </div>
            <div class="p-4">
                
                <div>
                    <label class="h4">Condición</label>
                    <select class="custom-select my-3 mr-sm-2">
                        <option >Condición</option>
                    </select>
                </div>
                <hr color="#999">

                <div>
                    <label class="h4">Combustible</label>
                    <select class="custom-select my-3 mr-sm-2">
                        <option >Combustible</option>
                    </select>
                </div>
                <hr color="#999">

                <div>
                    <label class="h4">Kilometros</label>
                    <input type="number" class="form-control my3 mr-sm-2" name="">
                </div>
                <hr color="#999">

                <div>
                    <label class="h4">Precio</label>
                    <input type="number" class="form-control my3 mr-sm-2" name="">
                </div>
                

                <div class="w-100 d-flex justify-content-end">
                    <button id="nextstep3" class="btn btn-primary pt-2 px-5 mt-5"><p class="h5">Siguiente</p></button>
                </div>

            </div>
        </section>

        {{-- STEP 4 --}}
        <section id="step4" class="d-none border">
            <div class="card shadow-sm text-white bg-primary p-3 shadow">
                <div> 
                    <a class="text-decoration-none text-white"><i id="hidestep4" class="fas fa-arrow-left h3 d-inline pr-3 focom-mouse-hover-pointer"></i></a>
                    <h3 class="d-inline h4">4. Agregá fotos del vehículo</h3>
                </div>
            </div>         
            <div class="p-4"> 
                <label class="h5">Imágen principal:</label>
                <div class="mt-2 d-flex justify-content-end align-items-start rounded" style="background-color: #dadada; max-width: 250px; height: 150px; overflow: hidden;">
                    <a id="deleteImage#1" class="fas fa-times-circle text-danger focom-image-icon-delete position-absolute m-1 focom-mouse-hover-pointer d-none"></a>
                    <div id="buttonImage#1" class="w-100 h-100 d-none d-flex align-items-center justify-content-center focom-mouse-hover-pointer"> 
                        <i class="fas fa-plus fa-3x position-absolute" style="color: #454545; z-index: 1"></i>
                        <i class="fas fa-car fa-8x position-absolute" style="color: #cccccc;"></i>
                    </div>
                    <img id="img#1" src="" class="w-100 h-100 d-none" style="object-fit: cover;">
                    <input id="inputImage#1" type="file" class="d-none" name="feature_image" accept="image/jpg, image/jpeg, image/png">
                </div>
                <label class="h5 mt-5">Más imágenes:</label>
                <div class="d-flex flex-wrap" style="max-width: 400px">   
                    <div class="mr-1 mb-1 mt-1 d-flex justify-content-end align-items-start rounded" style="background-color: #dadada; width:190px; height: 130px; overflow: hidden;">
                        <a id="deleteImage#1" class="fas fa-times-circle text-danger focom-image-icon-delete position-absolute m-1 focom-mouse-hover-pointer d-none"></a>
                        <div id="buttonImage#1" class="w-100 h-100 d-none d-flex align-items-center justify-content-center focom-mouse-hover-pointer"> 
                            <i class="fas fa-plus fa-3x position-absolute" style="color: #454545; z-index: 1"></i>
                            <i class="fas fa-car fa-8x position-absolute" style="color: #cccccc;"></i>
                        </div>
                        <img id="img#1" src="" class="w-100 h-100 d-none" style="object-fit: cover;">
                        <input id="inputImage#1" type="file" class="d-none" name="feature_image" accept="image/jpg, image/jpeg, image/png">
                    </div>
                    <div class="ml-1 mb-1 mt-1 d-flex justify-content-end align-items-start rounded" style="background-color: #dadada; width:190px; height: 130px; overflow: hidden;">
                        <a id="deleteImage#1" class="fas fa-times-circle text-danger focom-image-icon-delete position-absolute m-1 focom-mouse-hover-pointer d-none"></a>
                        <div id="buttonImage#1" class="w-100 h-100 d-none d-flex align-items-center justify-content-center focom-mouse-hover-pointer"> 
                            <i class="fas fa-plus fa-3x position-absolute" style="color: #454545; z-index: 1"></i>
                            <i class="fas fa-car fa-8x position-absolute" style="color: #cccccc;"></i>
                        </div>
                        <img id="img#1" src="" class="w-100 h-100 d-none" style="object-fit: cover;">
                        <input id="inputImage#1" type="file" class="d-none" name="feature_image" accept="image/jpg, image/jpeg, image/png">
                    </div>

                    <div class="mr-1 mt-1 d-flex justify-content-end align-items-start rounded" style="background-color: #dadada; width:190px; height: 130px; overflow: hidden;">
                        <a id="deleteImage#1" class="fas fa-times-circle text-danger focom-image-icon-delete position-absolute m-1 focom-mouse-hover-pointer d-none"></a>
                        <div id="buttonImage#1" class="w-100 h-100 d-none d-flex align-items-center justify-content-center focom-mouse-hover-pointer"> 
                            <i class="fas fa-plus fa-3x position-absolute" style="color: #454545; z-index: 1"></i>
                            <i class="fas fa-car fa-8x position-absolute" style="color: #cccccc;"></i>
                        </div>
                        <img id="img#1" src="" class="w-100 h-100 d-none" style="object-fit: cover;">
                        <input id="inputImage#1" type="file" class="d-none" name="feature_image" accept="image/jpg, image/jpeg, image/png">
                    </div>
                    <div class="ml-1 mt-1 d-flex justify-content-end align-items-start rounded" style="background-color: #dadada; width:190px; height: 130px; overflow: hidden;">
                        <a id="deleteImage#1" class="fas fa-times-circle text-danger focom-image-icon-delete position-absolute m-1 focom-mouse-hover-pointer d-none"></a>
                        <div id="buttonImage#1" class="w-100 h-100 d-none d-flex align-items-center justify-content-center focom-mouse-hover-pointer"> 
                            <i class="fas fa-plus fa-3x position-absolute" style="color: #454545; z-index: 1"></i>
                            <i class="fas fa-car fa-8x position-absolute" style="color: #cccccc;"></i>
                        </div>
                        <img id="img#1" src="" class="w-100 h-100 d-none" style="object-fit: cover;">
                        <input id="inputImage#1" type="file" class="d-none" name="feature_image" accept="image/jpg, image/jpeg, image/png">
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-end">
                    <button id="nextstep4" class="btn btn-primary pt-2 px-5 mt-5"><p class="h5">Siguiente</p></button>
                </div>
        </section>

        {{-- STEP 5 --}}
        <section id="step5" class="d-none border">
            <div class="card shadow-sm text-white bg-primary p-3 shadow">
                <div> 
                    <a class="text-decoration-none text-white"><i id="hidestep5" class="fas fa-arrow-left h3 d-inline pr-3 focom-mouse-hover-pointer"></i></a>   
                    <h3 class="d-inline h4">5. Agregá una descripción</h3>
                </div>
            </div>
            <div class="p-4">
                
                <div>
                    <label class="h4">Descripción (opcional):</label>
                    <textarea class="form-control" style="height: 200px" name="description" placeholder="Describe tu vehículo"></textarea>
                </div>
                <div class="mt-4">
                    <label class="h4">Contacto:</label><br>
                    <label>Teléfono:</label>
                    <input type="number" class="form-control my3 mr-sm-2 w-50" name="">
                </div>
                <div class="mt-4">
                    <label>WhatsApp (opcional):</label>
                    <input type="number" class="form-control my3 mr-sm-2 w-50" name="">
                </div>

                

                <div class="w-100 d-flex justify-content-end">
                    <button id="nextstep5" class="btn btn-primary pt-2 px-5 mt-5"><p class="h5">Publicar</p></button>
                </div>
            </div>
        </section>


</div>
</div>


@endsection
