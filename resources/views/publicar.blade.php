@extends('template')

@section('section')
  <div class="focom-slide position-relative d-none d-md-inline-block w-100">
        <img src="../img/Slide (13).jpg" class="d-block" alt="...">
        <h1 class="text-white display">Publicar</h1>
    </div>

    <div class="container-lg focom-section pt-3">
        <h3 class="text-center">Envíanos tu vehículo y nosotros nos encargamos del resto.</h3>
        <div class="row pt-4">
            <div class="col-12 col-sm-6 col-md-4">
                <select class="custom-select my-3 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Marca</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <select class="custom-select my-3 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Modelo</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <select class="custom-select my-3 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Combustible</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <select class="custom-select my-3 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Puertas</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="input-group my-3 mr-sm-2">
                    <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Kilometraje">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon3">km</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="input-group my-3 mr-sm-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" class="form-control" placeholder="Precio">
                </div>
            </div>
            <div class="col-12 col-md-4 pt-4">
                <label>Imagen principal:</label>
                <!-- IMAGEN 1 -->
                <div class="focom-input-image-principal rounded border">
                    <input id="focom-inputImage1" type="file" name="" class="d-none" accept="image/jpg, image/jpeg, image/png">
                    <button id="focom-inputButtom1"></button>
                    <img id="focom-imagePreview1" class="focom-input-image-preview" src=" ">
                    <a id="focom-image-icon-delete1"></a>
                </div>
            </div>
            <div class="col-12 col-md-8 pl-md-5 pl-lg-3 pt-4">
                <label class="col-12">Más imagenes:</label>
                <div class="d-flex">
                    <!-- IMAGEN 2 -->
                    <div class="focom-input-image rounded border mr-3">
                        <input id="focom-inputImage2" type="file" name="" class="d-none" accept="image/jpg, image/jpeg, image/png">
                        <button id="focom-inputButtom2"></button>
                        <img id="focom-imagePreview2" class="focom-input-image-preview" src=" ">
                        <a id="focom-image-icon-delete2"></a>
                    </div>
                    <!-- IMAGEN 3 -->
                    <div class="focom-input-image rounded border">
                        <input id="focom-inputImage3" type="file" name="" class="d-none" accept="image/jpg, image/jpeg, image/png">
                        <button id="focom-inputButtom3"></button>
                        <img id="focom-imagePreview3" class="focom-input-image-preview" src=" ">
                        <a id="focom-image-icon-delete3"></a>
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <!-- IMAGEN 4 -->
                    <div class="focom-input-image rounded border mr-3">
                        <input id="focom-inputImage4" type="file" name="" class="d-none" accept="image/jpg, image/jpeg, image/png">
                        <button id="focom-inputButtom4"></button>
                        <img id="focom-imagePreview4" class="focom-input-image-preview" src=" ">
                        <a id="focom-image-icon-delete4"></a>
                    </div>
                    <!-- IMAGEN 5 -->
                    <div class="focom-input-image rounded border">
                        <input id="focom-inputImage5" type="file" name="" class="d-none" accept="image/jpg, image/jpeg, image/png">
                        <button id="focom-inputButtom5"></button>
                        <img id="focom-imagePreview5" class="focom-input-image-preview" src=" ">
                        <a id="focom-image-icon-delete5"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 pl-md-5 pl-lg-3 pt-5 mt-2">
                <label class="">Descripción (opcional):</label>
                <textarea class="form-control" style="height: 200px" aria-label="With textarea" placeholder="Describe tu vehículo"></textarea>
            </div>
            <button type="button" class="btn btn-primary btn-lg btn-block mt-5 mx-3">Publicar</button>
        </div>
    </div>
    </div>



@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/focom-pagePublish.js') }}"></script>
@endsection