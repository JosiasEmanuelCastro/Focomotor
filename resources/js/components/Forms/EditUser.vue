<template>
   <form enctype="multipart/form-data" ref="register">
        <input type="hidden" name="_method" value="put" />
        <div class="row">

            <div class="col-12 col-md-6 mt-3">
                <label class="lead">Imagen de perfil:</label>
                <div class="row">
                    <div class="focom-user-profile-image">
                        <img alt="profile image" class="img-profile focom-vehicle-profile-image border ml-3"
                            :src="theUser.profile_photo_url">
                    </div>

                    <div class="my-5 ml-4 ml-sm-5 btn btn-primary focom">
                        <span>Cambiar imagen</span>


                        <input type="file" class="file-profile focom-config-input-image" name="profile_image"
                            v-on:change="previewFile($event, 'profile')">
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 mt-3 ml-1">
               
                <label class="lead">Nombre y Apellido:</label>
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control" name="name"
                        placeholder="Nombre y apellido" v-model="theUser.name">
                </div>
            </div>

            <div class="col-12 col-md-6 mt-3 ml-1">
                <label class="lead">Email:</label>
                <div class="input-group mr-sm-2">
                    <input type="text" class="form-control" name="email"
                        placeholder="example@example.com" v-model="theUser.email">
                </div>
            </div>

            <div class="col-12 col-md-6 mt-5 ml-1">

                <v-select v-model="finder" :filterable="false" :options="cities" @search="find" label="address"
                    aria-describedby="locationHelp" autocomplete="nocomplete">
                    <template slot="no-options">
                        Ingrese una localidad...
                    </template>
                    <template #option="{ address }">
                        <div class="d-center cursor-pointer">
                            {{ address.suburb ? address.suburb + ', ' : '' }} {{ address.city ? address.city : address.town }}, {{ address.state ? address.state : address.country }}
                        </div>
                    </template>
                    <template #selected-option="{ address }">
                        <div class="selected d-center text-weather-lighter">
                            {{ address.suburb ? address.suburb + ', ': '' }} {{ address.city ? address.city : address.town }}, {{ address.state ? address.state : address.country }}
                        </div>
                    </template>
                </v-select>

                <input type="hidden" name="location">

            </div>

            <div class="col-12 col-md-6 mt-5 ml-1">
                <label class="lead font-weight-normal">Cambiar contraseña:</label>
                <p>
                    <a href="">Restablecer Contraseña</a>
                </p>
            </div>

            <div class="col-12 col-md-6 mt-5">
                <button @click.prevent="submit" class="btn btn-primary btn-lg btn-block">Aplicar cambios
                </button>
            </div>

        </div>
    </form>
</template>

<script>
export default {
    props: ['user'],
    data(){
        return {
            photo: "",
            finder: null,
            theUser: {},
            cities: []
        }
    },
    mounted(){
        this.theUser = JSON.parse(this.user);
        console.log(this.theUser);

        fetch(
                 `/user/location`
                ).then(res => {
                    res.json().then(json => (this.finder = json));
        });
    },
    methods: {
        previewFile(e, img) {

                let preview = document.querySelector(`.img-${img}`);
                let remove = document.querySelector(`.delete-${img}`);

                preview.classList.remove('d-none');

                //remove.classList.add('fas', 'fa-times-circle', 'focom-image-icon-delete', 'text-danger');

                let file = document.querySelector(`.file-${img}`).files[0];
                let reader = new FileReader();

                
                var files = e.target.files || e.dataTransfer.files;
                this.photo = files[0];
                

                
                reader.onloadend = function () {
                    preview.src = reader.result;
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
                //remove.classList.remove('fas', 'fa-times-circle', 'focom-image-icon-delete', 'text-danger');
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

                const form = this.$refs.register;

                let formData = new FormData(form);

                formData.append("profile_image", this.photo);
                formData.append("location", JSON.stringify(this.finder));

                //form.submit();
                let token = document.head.querySelector('meta[name="csrf-token"]');

                this.$http.post("/user/profile-information", formData,
                    {
                    
                    headers: {
                        "X-CSRF-TOKEN": token.content,
                        'Content-Type': 'multipart/form-data'
                    },
                   
                })
                    .then((response) => {
                    console.log("Success:", response);

                    if (response.errors) {
                        this.errors = response.errors;
                    } else {
                        window.location = "/dashboard";
                    }
                    })
                    .catch((error) => console.error("Error:", error));
                    

            }
    }
}
</script>

<style>

</style>