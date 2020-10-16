@extends('layouts.default')
@section('section')
<div class="focom-slide position-relative d-none d-md-inline-block w-100">
    <img src="/img/Slide13.jpg" class="d-block" alt="Publicar">
    <h1 class="text-white display">Publicar</h1>
</div>
<div class="container-lg focom-section pt-3" id="app">
    <h3 class="text-center">Envíanos tu vehículo y nosotros nos encargamos del resto.</h3>
    <h4>Tienes {{ auth()->user()->plan->articles_limit - auth()->user()->articles()->count() }}
        publicaciones disponibles</h4>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" id="register">
        @csrf
        <div class="row pt-4">

            @include('elements.forms.categories')

            <div class="container">
                <div class="row">
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
                        <select class="custom-select my-3 mr-sm-2" name="year">
                            <option disabled selected>Año</option>
                            @for($i = date("Y"); $i >= 1886; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <select class="custom-select my-3 mr-sm-2" name="doors">
                            <option disabled selected>Puertas</option>
                            @for($i = 2; $i <= 5; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="input-group my-3 mr-sm-2">
                            <input type="number" name="kilometers" class="form-control"
                                aria-describedby="basic-addon3" placeholder="Kilometraje">
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
                </div>
            </div>
            
            @include('elements.forms.images')

            <div class="col-12 col-md-8 pl-md-5 pl-lg-3 pt-5 mt-2">
                <label>Descripción (opcional):</label>
                <textarea class="form-control" style="height: 200px" name="description"
                    placeholder="Describe tu vehículo"></textarea>
            </div>
            <div class="col-12 col-md-8 pl-md-5 pl-lg-3 pt-5 mt-2">
                <p>Ubicación:</p>
                <div v-if="!otherLocation"><label class="form-check-label text-muted" for="city">Localidad seleccionada:</label>
                <input type="text" class="form-control" name="city" disabled="disabled"
                    value="{{ auth()->user()->city }}">
                </div>

                <div class="ml-4 mt-2">
                    <input type="checkbox" class="form-check-input" name="location_article" v-model="otherLocation">
                    <label class="form-check-label text-muted" for="location_article">Usar otra localidad</label>
                </div>

                <v-select v-if="otherLocation" v-model="finder" :filterable="false" :options="cities" @search="find" label="display_name" aria-describedby="locationHelp">
                    <template slot="no-options">
                        Ingrese una localidad...
                    </template>
                    <template #option="{ display_name }">
                        <div class="d-center cursor-pointer">
                            @{{ display_name }}
                        </div>
                    </template>
                    <template #selected-option="{ display_name }">
                        <div class="selected d-center text-weather-lighter">
                            @{{ display_name }}
                        </div>
                    </template>
                </v-select>

                <input type="hidden" name="location">

            </div>

            <button @click.prevent="submit" class="btn btn-primary btn-lg btn-block mt-5 mx-3">Publicar</button>
        </div>
    </form>
</div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">
<style>

.v-select input[type=search], .v-select input[type=search]:focus {
    width: 10px;
}
</style>

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-select@latest"></script>
<script>
Vue.component('v-select', VueSelect.VueSelect);

    var app = new Vue({
        el: '#app',
        data: {
            categories: [],
            trademarks: [],
            three: [],
            subtitle: "",
            models: [],
            children_node: "",
            theCategory: "",
            theMark: "",
            theModel: "",
            images: [],
            finder: "",
            cities: [],
            otherLocation: false,
            listModels: false,
            inputModel: false,
            listSubitems: false,
        },
        async mounted() {
            //console.log(this.message);
            try {
                let res = await fetch(`/api/categories/`);
                res = await res.json();
                this.categories = await res;
            } catch (e) {
                console.log("Error al cargar datos.");
            }
        },
        watch: {
            "theCategory.id": function(val){
                console.log(val);
                if (val != undefined){
                    this.listSubitems = true;
                    this.inputModel = false;
                }
                else {
                    this.listSubitems = false;
                    this.listModels = false;
                    this.inputModel = true;
                }
                    
            },
            "theMark.id": function(val){
                console.log(val);
                if (val == undefined){
                    this.theModel = -1;
                    this.listModels = false;

                }
                    
            },
            "theModel": function(val){
                console.log(val);
                if (val == -1){
                    this.listModels = false;
                    this.inputModel = true;

                }
                    
            },
            theCategory: async function (val) {
                if (this.theCategory && this.theCategory != -1) {
                    let res = await fetch(`/api/categories/${this.theCategory.id}`);
                    res = await res.json();
                    this.trademarks = await res.items;
                    this.subtitle = await res.children_node;
                    this.inputModel = false;
                    this.theMark = "";
                }
            },
            theMark: async function (val) {
                if (this.theMark && this.theMark != -1) {
                    let res = await fetch(`/api/categories/${this.theMark.id}`);
                    res = await res.json();
                    this.models = await res.items;
                    this.children_node = await res.children_node;
                    //console.log(this.models);
                    this.listModels = (this.models.length != 0) ? true : false ;
                    this.inputModel = false;
                    this.theModel = "";
                } else {
                    this.models = [];
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

                let file = document.querySelector(`.file-${img}`).files[0];
                let reader = new FileReader();

                let vm = this;
                reader.onloadend = function () {
                    preview.src = reader.result;
                    vm.images.push({
                        image: e.target.name,
                        url: file.name
                    });
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.src = "";
                }
            },
            resetImage(img) {
                let file = document.querySelector(`.file-${img}`);
                let preview = document.querySelector(`.img-${img}`);
                let remove = document.querySelector(`.delete-${img}`);

                file.value = '';
                preview.src = '';
                preview.classList.add('d-none');
                remove.classList.remove('fas', 'fa-times-circle', 'focom-image-icon-delete', 'text-danger');
            },
            async find(search, loading) {

                if (search != '') {
                    loading(true);
                    this.search(loading, search, this);
                }

                //const searchWeather = await fetch(`/api/weather/findByLocation/${search}`);
                //this.cities = await searchWeather.json()
                },
            search: _.debounce((loading, search, vm) => {
                fetch(
                    `/api/locations/${escape(search)}`
                ).then(res => {
                    res.json().then(json => (vm.cities = json));
                    loading(false);
                });
                }, 2000),
            submit() {
                if(this.finder.display_name != ''){
                    $('input[name="location"]').val(this.finder.display_name);
                }

                let input = $("<input>")
                        .attr("type", "hidden")
                        .attr("name", "subcategory").val(this.theMark.id);
                $('#register').append(input);

                input = $("<input>")
                        .attr("type", "hidden")
                        .attr("name", "category").val(this.theCategory.id);
                $('#register').append(input);
                //console.log(input.val());
                const form = document.getElementById('register');
                form.submit();
            }
        }
    })

</script>
@endsection
