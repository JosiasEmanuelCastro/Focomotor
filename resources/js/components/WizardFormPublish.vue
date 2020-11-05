<template>

    <div class="container-lg focom-section pt-3" style="padding-bottom: 150px;" id="app">
        <form enctype="multipart/form-data" id="register">

        <section id="step1" class="border">
            <div class="card shadow-sm text-white bg-primary p-3 shadow">
                <div>
                    <h3 class="d-inline h4">1. ¿Qué vehículo quiere publicar?</h3>
                </div>
            </div>

            <div class="p-4">
                <div class="py-3" v-for="list in current.lists" :value="list" :key="list.id">
                    <a @click="showStep2(list)"
                        class="text-dark focom-mouse-hover-pointer text-decoration-none focom-mouse-hover-pointer">
                        <i class="fas h3 d-inline pl-1" :class="`fa-${list.icon}`"></i>
                        <h5 class="pl-3 d-inline">{{ list.name }}</h5>
                    </a>
                    <hr>
                </div>

            </div>
        </section>
       
        <section id="step2" class="d-none border">
            <div class="card shadow-sm text-white bg-primary p-3 shadow">
                <div>
                    <a @click="hideStep2" class="text-decoration-none text-white"><i
                            class="fas fa-arrow-left h3 d-inline pr-3 focom-mouse-hover-pointer"></i></a>
                    <h3 class="d-inline h4">2. Ingrese</h3>
                </div>
            </div>
            <div class="p-4">

                <div>
                    <label class="h4">Marca</label>
                    <select class="custom-select my-3 mr-sm-2" v-model="theMark">
                        <option value="" disabled>Seleccione {{marks.children_node}}</option>
                        <option v-for="list in marks.lists" :value="list" :key="list.id">{{ list.name }}</option>
                    </select>
                </div>
                <hr>

                <div>
                    <label class="h4">Modelo</label>
                    <select class="custom-select my-3 mr-sm-2" v-model="theModel">
                        <option value="" disabled>Seleccione {{models.children_node}}</option>
                        <option v-for="list in models.lists" :value="list" :key="list.id">{{ list.name }}</option>
                    </select>
                </div>
                <hr>

                <div>
                    <label class="h4">Año</label>
                    <select class="custom-select my-3 mr-sm-2" name="year">
                        <option disabled selected>Año</option>
                        
                        <option v-for="n in 150" :value="new Date().getFullYear() - (n-1)" :key="n">{{ new Date().getFullYear() - (n-1) }}</option>                        
                    </select>
                </div>
                <hr>         

                <div>
                    <label class="h4">Ubicación</label><br>
                    <label class="form-check-label text-muted" for="exampleCheck1">Localidad seleccionada:</label>
                   
                    <v-select v-model="finder" :filterable="false" :options="cities" @search="find" label="display_name" aria-describedby="locationHelp">
                    <template slot="no-options">
                        Ingrese una localidad...
                    </template>
                    <template #option="{ display_name }">
                        <div class="d-center cursor-pointer">
                            {{ display_name }}
                        </div>
                    </template>
                    <template #selected-option="{ display_name }">
                        <div class="selected d-center text-weather-lighter">
                            {{ display_name }}
                        </div>
                    </template>
                </v-select>

                <input type="hidden" name="location">

                    <div class="ml-4 mt-2">
                        <input type="checkbox" checked class="form-check-input">


                    </div>
                    <div class="ml-4 mt-2">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label text-muted" for="exampleCheck1">Usar otra localidad</label>
                    </div>
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <button @click.prevent="showStep3" class="btn btn-primary pt-2 px-5 mt-5">
                        <p class="h5">Siguiente</p>
                    </button>
                </div>

            </div>
        </section>

        <section id="step3" class="d-none border">
            <div class="card shadow-sm text-white bg-primary p-3 shadow">
                <div>
                    <a @click="hideStep3" class="text-white text-decoration-none">
                        <i class="fas fa-arrow-left h3 d-inline pr-3 focom-mouse-hover-pointer"></i></a>
                    <h3 class="d-inline h4">3. Ingrese</h3>
                </div>
            </div>
            <div class="p-4">

                <div>
                    <label class="h4">Condición</label>
                    <select class="custom-select my-3 mr-sm-2" name="condition" placeholder="Condicion">
                            <option selected>Condición</option>
                            <option value="Nuevo">Nuevo</option>
                            <option value="Usado">Usado</option>
                        </select>
                </div>
                <hr>

                <div>
                    <label class="h4">Combustible</label>
                    <select class="custom-select my-3 mr-sm-2" name="fuel" placeholder="Combustible">
                        <option selected>Combustible</option>
                        <option value="Gasoil">Gasoil</option>
                        <option value="Nafta">Nafta</option>
                        <option value="Electrico">Electrico</option>
                    </select>
                </div>
                <hr>

                <div>
                    <label class="h4">Kilometros</label>
                    <input type="number" class="form-control my3 mr-sm-2" name="kilometers">
                </div>
                <hr>

                <div>
                    <label class="h4">Precio</label>
                    <input type="number" class="form-control my3 mr-sm-2" name="price">
                </div>


                <div class="w-100 d-flex justify-content-center">
                    <button @click.prevent="showStep4" class="btn btn-primary pt-2 px-5 mt-5">
                        <p class="h5">Siguiente</p>
                    </button>
                </div>

            </div>
        </section>

        <section id="step4" class="d-none border">
            <div class="card shadow-sm text-white bg-primary p-3 shadow">
                <div>
                    <a @click="hideStep4" class="text-decoration-none text-white"><i
                            class="fas fa-arrow-left h3 d-inline pr-3 focom-mouse-hover-pointer"></i></a>
                    <h3 class="d-inline h4">4. Agregá fotos del vehículo</h3>
                </div>
            </div>
            <div class="p-4">
                 <label>Imagen principal:</label>
                <!-- IMAGEN 1 -->
                <div class="focom-input-image-principal rounded border">
                    <input type="file" class="file-main" name="feature_image" v-on:change="previewFile($event, 'main')"
                        accept="image/jpg, image/jpeg, image/png">

                    <img src="" class="img-main  d-none focom-input-image-preview" alt="Image preview...">

                    <a class="delete-main" @click="resetImage('main')"></a>
                </div>

                <label class="h5 mt-5">Más imágenes:</label>
                <div class="d-flex">
        <!-- IMAGEN 2 -->
        <div class="focom-input-image rounded border mr-3">
            <input type="file" class="file-1" name="images[]" v-on:change="previewFile($event, 1)"
                accept="image/jpg, image/jpeg, image/png"><br>
            <img src="" class="img-1 d-none focom-input-image-preview" alt="Image preview...">


            <a class="delete-1" @click="resetImage(1)"></a>
        </div>
        <!-- IMAGEN 3 -->
        <div class="focom-input-image rounded border">
            <input type="file" class="file-2" name="images[]" v-on:change="previewFile($event, 2)"
                accept="image/jpg, image/jpeg, image/png"><br>
            <img src="" class="img-2 d-none focom-input-image-preview" alt="Image preview...">

            <a class="delete-2" @click="resetImage(2)"></a>
        </div>
    </div>
    <div class="d-flex mt-3">
        <!-- IMAGEN 4 -->
        <div class="focom-input-image rounded border mr-3">
            <input type="file" class="file-3" name="images[]" v-on:change="previewFile($event, 3)"
                accept="image/jpg, image/jpeg, image/png"><br>
            <img src="" class="img-3 d-none focom-input-image-preview" alt="Image preview...">

            <a class="delete-3" @click="resetImage('3')"></a>
        </div>
        <!-- IMAGEN 5 -->
        <div class="focom-input-image rounded border">
            <input type="file" class="file-4" name="images[]" v-on:change="previewFile($event, 4)"
                accept="image/jpg, image/jpeg, image/png"><br>
            <img src="" class="img-4 d-none focom-input-image-preview" alt="Image preview...">

            <a class="delete-4" @click="resetImage('file-4')"></a>
        </div>
    </div>
                <div class="w-100 d-flex justify-content-center">
                    <button @click.prevent="showStep5" class="btn btn-primary pt-2 px-5 mt-5">
                        <p class="h5">Siguiente</p>
                    </button>
                </div>
            </div>
        </section>

        <section id="step5" class="d-none border">
            <div class="card shadow-sm text-white bg-primary p-3 shadow">
                <div>
                    <a @click="hideStep5" class="text-decoration-none text-white"><i
                            class="fas fa-arrow-left h3 d-inline pr-3 focom-mouse-hover-pointer"></i></a>
                    <h3 class="d-inline h4">5. Agregá una descripción</h3>
                </div>
            </div>
            <div class="p-4">

                <div>
                    <label class="h4">Descripción (opcional):</label>
                    <textarea class="form-control" style="height: 200px" name="description"
                        placeholder="Describe tu vehículo"></textarea>
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
                    <button @click.prevent="submit" class="btn btn-primary pt-2 px-5 mt-5">
                        <p class="h5">Publicar</p>
                    </button>
                </div>
            </div>
        </section>

        </form>

    </div>

</template>


<script>

    

    export default {
        data() {
            return {
                message: "hello",
                current: { 
                    lists: "",
                    children_node: ""
                },
                marks: { 
                    lists: "",
                    children_node: ""
                },
                models: { 
                    lists: "",
                    children_node: ""
                },
                theList: "",
                theMark: "",
                theModel: "",
                images: [],
                finder: "",
                cities: [],
                otherLocation: false,
                inputTitle: false,
                lastId: 0,
                errors: {}
                }
        },
        async mounted() {

            console.log(this.message);

             try {
                let res = await fetch(`/api/categories/all`);
                res = await res.json();
                this.current.lists = await res.items;
                this.current.children_node = await res.children_node;
            } catch (e) {
                console.log("Error al cargar datos.");
            }

        },
        watch: {
            theList: async function (val) {
                if (this.theList && this.theList != -1) {

                    let res = await fetch(`/api/categories/${this.theList.id}`);
                    res = await res.json();
                    this.marks.lists = await res.items;
                    
                    this.inputTitle = false;
                    
                    this.marks.children_node = await res.children_node;
                    this.theMark = "";
                }
            },
            theMark: async function (val) {
                if (this.theMark && this.theMark != -1) {
                    let res = await fetch(`/api/categories/${this.theMark.id}`);
                    res = await res.json();
                    this.models.lists = await res.items;
                    
                    this.inputTitle = false;
                    
                    this.models.children_node = await res.children_node;
                    this.theModel = "";
                }
            }
        },
        methods: {
            showStep2(theList) {

                this.theList = theList;

                document.getElementById('step1').classList.toggle('d-none');
                document.getElementById('step2').classList.toggle('d-none');
                this.scrollTop();
            },

            hideStep2() {

                document.getElementById('step1').classList.toggle('d-none');
                document.getElementById('step2').classList.toggle('d-none');
                this.scrollTop();
            },
            showStep3() {
                document.getElementById('step2').classList.toggle('d-none');
                document.getElementById('step3').classList.toggle('d-none');
                this.scrollTop();
            },
            hideStep3() {
                document.getElementById('step2').classList.toggle('d-none');
                document.getElementById('step3').classList.toggle('d-none');
                this.scrollTop();
            },
            showStep4() {
                document.getElementById('step3').classList.toggle('d-none');
                document.getElementById('step4').classList.toggle('d-none');
                this.scrollTop();
            },
            hideStep4() {
                document.getElementById('step3').classList.toggle('d-none');
                document.getElementById('step4').classList.toggle('d-none');
                this.scrollTop();
            },
            showStep5() {
                document.getElementById('step4').classList.toggle('d-none');
                document.getElementById('step5').classList.toggle('d-none');
                this.scrollTop();
            },
            hideStep5() {
                document.getElementById('step4').classList.toggle('d-none');
                document.getElementById('step5').classList.toggle('d-none');
                this.scrollTop();
            },
            scrollTop() {
                window.scrollTo(0, 0)
            },
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
            async submit() {

                if(this.finder.display_name != ''){
                    $('input[name="location"]').val(this.finder.display_name);
                }

                let form = document.getElementById("register");

                let formData = new FormData(form)
                
                //formData.append('feature_image', feature_image.files[0], 'cars.jpg')
                formData.append('category', JSON.stringify(this.theList))
                formData.append('mark', JSON.stringify(this.theMark))
                formData.append('model', JSON.stringify(this.theModel))
                formData.append('location', JSON.stringify(this.finder))

                let token = document.head.querySelector('meta[name="csrf-token"]');

                //console.log(input.val());

                fetch(`/articles`, {
                    method: 'POST',
                    mode: 'cors',
                    credentials: 'same-origin',
                    headers: {
                    'X-CSRF-TOKEN': token.content
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: formData
                }).then(response => response.json())
                .catch(error => console.error('Error:', error))
                .then(response => {
                    console.log('Success:', response)
                    
                    if (response.errors) {
                        this.errors = response.errors;
                    } else {
                        window.location = "/dashboard";
                    }

                } );

                    
                //const form = document.getElementById('register');
                //form.submit();
            }
        }
    }

</script>
