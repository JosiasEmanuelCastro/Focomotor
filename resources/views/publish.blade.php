@extends('layouts.default')
@section('section')
<div class="focom-slide position-relative d-none d-md-inline-block w-100">
    <img src="/img/Slide13.jpg" class="d-block" alt="Publicar">
    <h1 class="text-white display">Publicar</h1>
</div>
<div class="container-lg focom-section pt-3" id="app">
    <h3 class="text-center">Envíanos tu vehículo y nosotros nos encargamos del resto.</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row pt-4">
            <div class="col-12 col-sm-6 col-md-4">
                <label>Categoria</label>
                <select class="custom-select my-3 mr-sm-2" v-model="theCategory" placeholder="Categoria">
                    <option v-for="category in categories" :value="category">@{{category.name}}</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <label>Marca</label>
                <select class="custom-select my-3 mr-sm-2" v-model="theMark" placeholder="Marca">
                    <option v-for="trademark in trademarks" :value="trademark">@{{trademark.name}}</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <label>Modelo</label>
                <select class="custom-select my-3 mr-sm-2" name="model_id" v-model="theModel" placeholder="Modelo">
                    <option v-for="model in models" :value="model.id">@{{model.name}}</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <select class="custom-select my-3 mr-sm-2" name="fuel" placeholder="Combustible">
                    <option selected>Combustible</option>
                    <option value="Gasoil">Gasoil</option>
                    <option value="Nafta">Nafta</option>
                    <option value="Electrico">Electrico</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <select class="custom-select my-3 mr-sm-2" name="condition" placeholder="Condicion">
                    <option selected>Condición</option>
                    <option value="Nuevo">Nuevo</option>
                    <option value="Usado">Usado</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <input type="number" name="year" class="form-control my-3 mr-sm-2" placeholder="Año">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <input type="number" name="doors" class="form-control my-3 mr-sm-2" placeholder="Puertas">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="input-group my-3 mr-sm-2">
                    <input type="number" name="kilometers" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Kilometraje">
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
                    <input type="number" name="price" class="form-control" placeholder="Precio">
                </div>
            </div>
            <div class="col-12 col-md-4 pt-4">
                <label>Imagen principal:</label>
                <!-- IMAGEN 1 -->
                <div class="focom-input-image-principal rounded border">
                    <input type="file" class="file-main" name="feature_image" v-on:change="previewFile($event, 'main')" accept="image/jpg, image/jpeg, image/png">

                    <img src="" class="img-main  d-none focom-input-image-preview" alt="Image preview...">

                    <a class="delete-main" @click="resetImage('main')"></a>
                </div>
            </div>
            <div class="col-12 col-md-8 pl-md-5 pl-lg-3 pt-4">
                <label class="col-12">Más imagenes:</label>
                <div class="d-flex">
                    <!-- IMAGEN 2 -->
                    <div class="focom-input-image rounded border mr-3">
                        <input type="file" class="file-1" name="images[]" v-on:change="previewFile($event, 1)" accept="image/jpg, image/jpeg, image/png"><br>
                        <img src="" class="img-1 d-none focom-input-image-preview" alt="Image preview...">
                        
                        
                        <a class="delete-1" @click="resetImage(1)"></a>
                    </div>
                    <!-- IMAGEN 3 -->
                    <div class="focom-input-image rounded border">
                         <input type="file" class="file-2" name="images[]" v-on:change="previewFile($event, 2)" accept="image/jpg, image/jpeg, image/png"><br>
                        <img src="" class="img-2 d-none focom-input-image-preview" alt="Image preview...">

                        <a class="delete-2" @click="resetImage(2)"></a>
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <!-- IMAGEN 4 -->
                    <div class="focom-input-image rounded border mr-3">
                         <input type="file" class="file-3" name="images[]" v-on:change="previewFile($event, 3)" accept="image/jpg, image/jpeg, image/png"><br>
                        <img src="" class="img-3 d-none focom-input-image-preview" alt="Image preview...">

                        <a class="delete-3" @click="resetImage('3')"></a>
                    </div>
                    <!-- IMAGEN 5 -->
                    <div class="focom-input-image rounded border">
                         <input type="file" class="file-4" name="images[]" v-on:change="previewFile($event, 4)" accept="image/jpg, image/jpeg, image/png"><br>
                        <img src="" class="img-4 d-none focom-input-image-preview" alt="Image preview...">

                        <a class="delete-4" @click="resetImage('file-4')"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 pl-md-5 pl-lg-3 pt-5 mt-2">
                <label>Descripción (opcional):</label>
                <textarea class="form-control" style="height: 200px" name="description" placeholder="Describe tu vehículo"></textarea>
            </div>
            <button class="btn btn-primary btn-lg btn-block mt-5 mx-3">Publicar</button>
        </div>
    </form>
</div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
//Vue.component('v-select', VueSelect.VueSelect);

var app = new Vue({
    el: '#app',
    data: {
        categories: [],
        trademarks: [],
        models: [],
        theCategory: { name: "Categoría", id: 0 },
        theMark: { name: "Marca", id: 0 },
        theModel:{ name: "Modelo", id: 0 },
        images: []

    },
    async mounted() {
        //console.log(this.message);
        try {
            let res = await fetch(`/api/categories/`);
            res = await res.json();
            this.categories = await res;
        }catch (e){
            console.log("Error al cargar datos.");
        }
    },
    watch: {
        theCategory: async function (val) {
            if (this.theCategory && this.theCategory.id != 0){
                let res = await fetch(`/api/categories/${this.theCategory.id}/trademarks`);
                res = await res.json();
                this.trademarks = await res;
            }
        },
        theMark: async function (val) {
            if (this.theMark){
                let res = await fetch(`/api/trademarks/${this.theMark.id}/models`);
                res = await res.json();
                this.models = await res;

            }
        }
  },
    computed: {
        async getTrademarks(){

            console.log(this.theCategory);
            if (this.theCategory && this.theCategory.id != 0){
                let res = await fetch(`/api/categories/${this.theCategory.id}/trademarks`);
                res = await res.json();
                this.trademarks = await res;

                return await this.trademarks;
            }
        },
        async getModels(){

            if (this.theTrademark){
                let res = await fetch(`/api/trademarks/${this.theTrademark.id}/models`);
                res = await res.json();
                this.models = await res;

                return await this.models;
            }
        }
    },
    methods: {
         previewFile(e, img) {
            console.log(e.target.name);
          let preview = document.querySelector(`.img-${img}`);
          let remove = document.querySelector(`.delete-${img}`);

          preview.classList.remove('d-none');

          remove.classList.add('fas', 'fa-times-circle', 'focom-image-icon-delete', 'text-danger');
          
          let file    = document.querySelector(`.file-${img}`).files[0];
          let reader  = new FileReader();

          let vm = this;
          reader.onloadend = function () {
            preview.src = reader.result;
            vm.images.push({ image: e.target.name, url: file.name });
          }

          if (file) {
            reader.readAsDataURL(file);
          } else {
            preview.src = "";
          }
        },
        resetImage(img){
            let file    = document.querySelector(`.file-${img}`);
            let preview = document.querySelector(`.img-${img}`);
            let remove = document.querySelector(`.delete-${img}`);


            file.value = '';
            preview.src = '';
            preview.classList.add('d-none');
            remove.classList.remove('fas', 'fa-times-circle', 'focom-image-icon-delete', 'text-danger');
        },
        submit(){

            form.submit();

        } 
    }
})

</script>
@endsection