<template>
    <div class="d-flex justify-content-center">
        <div
            class="bg-white focom-signin-card border shadow rounded w-100 mx-3"
        >
            <div class="text-center pt-1 pb-4">
                <a href="/login">Ingresar</a>
                <a href="/register" class="pl-3 font-weight-bold"
                    >Registro</a
                >
            </div>
            <form action="/register" method="POST" id="register">
            
                <div id="step1">
                    <h4 class="h5 focom-registerTitle">1. Completá</h4>
                    <hr />
                    <label for="name">Nombre y apellido</label>
                    
                    <div v-if="errors.name" class="alert alert-danger" role="alert">
                        {{ errors.name }}
                    </div>
                   
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        aria-describedby="nameHelp"
                    />
                    <label for="email" class="mt-3">Email</label>
                    
                    <div v-if="errors.email" class="alert alert-danger" role="alert">
                        {{ errors.email }}
                    </div>
                   
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        aria-describedby="emailHelp"
                    />
                    <div
                        class="d-flex justify-content-center justify-content-md-end"
                    >
                        <div
                            @click="showstep2"
                            class="btn btn-primary pb-1 my-0 px-5 mt-4"
                        >
                            <p class="h6">Continuar</p>
                        </div>
                    </div>
                </div>

                <div id="step2" class="d-none">
                    <div
                        @click="hidestep2"
                        class="btn btn-primary d-inline text-white rounded-circle focom-mouse-hover-pointer p-0 mr-2 focom-registerArrow"
                    >
                        <i class="fas fa-arrow-left mb-2"></i>
                    </div>
                    <h4 class="h5 d-inline focom-registerTitle">
                        2. Creá una contraseña
                    </h4>
                    <hr />
                    <label for="password">Contraseña</label>
                   
                    <div v-if="errors.password" class="alert alert-danger" role="alert">
                        {{ errors.password }}
                    </div>
                    
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        aria-describedby="passwordHelp"
                    />
                    <label for="password_confirmation" class="mt-3"
                        >Confirmar Contraseña</label
                    >
                    <input
                        type="password"
                        class="form-control"
                        name="password_confirmation"
                        aria-describedby="passwordConfirmationHelp"
                    />
                    <div
                        class="d-flex justify-content-center justify-content-md-end"
                    >
                        <div
                            @click="showstep3"
                            class="btn btn-primary pb-1 my-0 px-5 mt-4"
                        >
                            <p class="h6">Continuar</p>
                        </div>
                    </div>
                </div>

                <div id="step3" class="d-none">
                    <div
                        @click="hidestep3"
                        class="btn btn-primary d-inline text-white rounded-circle focom-mouse-hover-pointer p-0 mr-2 focom-registerArrow"
                    >
                        <i class="fas fa-arrow-left mb-2"></i>
                    </div>
                    <h4 class="h5 d-inline focom-registerTitle">
                        3. Buscá tu localidad
                    </h4>
                    <hr />
                    <label for="location">Localidad</label>
                   
                    <div v-if="errors.location" class="alert alert-danger" role="alert">
                        {{ errors.location }}
                    </div>
                   
                    <v-select
                        v-model="finder"
                        :filterable="false"
                        :options="cities"
                        @search="find"
                        label="display_name"
                        aria-describedby="locationHelp"
                        autocomplete="nocomplete"
                    >
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
                    <input type="hidden" name="location" />
                    <div
                        class="d-flex justify-content-center justify-content-md-end"
                    >
                        <div
                            @click="showstep4"
                            class="btn btn-primary pb-1 my-0 px-5 mt-4"
                        >
                            <p class="h6">Continuar</p>
                        </div>
                    </div>
                </div>

                <div id="step4" class="d-none">
                    <div
                        @click="hidestep4"
                        class="btn btn-primary d-inline text-white rounded-circle focom-mouse-hover-pointer p-0 mr-2 focom-registerArrow"
                    >
                        <i class="fas fa-arrow-left mb-2"></i>
                    </div>
                    <h4 class="h5 d-inline focom-registerTitle">
                        4. Indicános tu télefono
                    </h4>
                    <hr />
                    <label for="telephone">Teléfono</label>
                   
                    <div v-if="errors.telephone" class="alert alert-danger" role="alert">
                        {{ errors.telephone }}
                    </div>
                    
                    <input
                        type="text"
                        class="form-control"
                        name="telephone"
                        aria-describedby="telephoneHelp"
                    />
                    <div
                        class="d-flex justify-content-center justify-content-md-end"
                    >
                        <button
                            @click.prevent="submit"
                            class="btn btn-primary pb-1 my-0 px-5 mt-4"
                        >
                            <p class="h6">Registrarse</p>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            finder: "",
            cities: [],
            errors: {}
        };
    },
    mounted() {},
    methods: {
        showstep2() {
            document.getElementById("step1").classList.toggle("d-none");
            document.getElementById("step2").classList.toggle("d-none");
            this.scrollTop();
        },
        showstep3() {
            document.getElementById("step2").classList.toggle("d-none");
            document.getElementById("step3").classList.toggle("d-none");
            this.scrollTop();
        },
        showstep4() {
            document.getElementById("step3").classList.toggle("d-none");
            document.getElementById("step4").classList.toggle("d-none");
            this.scrollTop();
        },
        hidestep2() {
            document.getElementById("step1").classList.toggle("d-none");
            document.getElementById("step2").classList.toggle("d-none");
            this.scrollTop();
        },
        hidestep3() {
            document.getElementById("step2").classList.toggle("d-none");
            document.getElementById("step3").classList.toggle("d-none");
            this.scrollTop();
        },
        hidestep4() {
            document.getElementById("step3").classList.toggle("d-none");
            document.getElementById("step4").classList.toggle("d-none");
            this.scrollTop();
        },
        scrollTop() {
            window.scrollTo(0, 0);
        },
        async find(search, loading) {
            if (search != "") {
                loading(true);
                this.search(loading, search, this);
            }

            //const searchWeather = await fetch(`/api/weather/findByLocation/${search}`);
            //this.cities = await searchWeather.json()
        },
        search: _.debounce((loading, search, vm) => {
            fetch(`/api/locations/${search}`).then(res => {
                res.json().then(json => (vm.cities = json));
                loading(false);
            });
        }, 2000),
        async submit() {
            if (this.finder.display_name != "") {
                $('input[name="location"]').val(JSON.stringify(this.finder));
            }

            let form = document.getElementById("register");
            let token = document.head.querySelector('meta[name="csrf-token"]');

            let formData = new FormData(form)

            this.$http.post("/register", formData, {
                headers: {
                    'X-CSRF-TOKEN': token.content,
                }
                }).then((response) => {
                    console.log(response);
                    console.log("hi");
                    window.location = "/";

                    }, (error) => {
                    
                    if (error.response) {
                        console.log(error.response.data);
                        this.errors = error.response.data.errors;
                    }
            });

        }
    }
};
</script>
