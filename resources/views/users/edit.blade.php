@extends('layouts.default')
@section('section')

    <hr class=" d-none d-md-block mt-n1">
        <div class="focom-section mt-4 mx-3 mx-sm-5" id="app">
            <h1 class="h2">Ajustes de perfil</h1>
            <form action="/user/profile-information" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="row">
                    
                        {{-- PROFILE IMAGE --}}
                        <div class="col-12 col-md-6 mt-3">
                            <label class="lead">Imagen de perfil:</label>
                            <div class="row">
                                <div class="focom-user-profile-image">
                                    <img class="img-profile focom-vehicle-profile-image border ml-3" src="{{ $user->profile_photo_url}}">
                                </div>
                                
                                <div class="my-5 ml-4 ml-sm-5 btn btn-primary focom">
                                    <span>Cambiar imagen</span>

                                    
                                    <input type="file" class="file-profile focom-config-input-image" name="profile_image" v-on:change="previewFile($event, 'profile')" >
                                </div>
                            </div>
                        </div>
                        {{-- NAME --}}
                        <div class="col-12 col-md-6 mt-3 ml-1">
                            @if($errors->updateProfileInformation->get("name"))   
                            {{$errors->updateProfileInformation->get("name")[0]}}    
                            @endif
                            <label class="lead">Nombre y  Apellido:</label>
                            <div class="input-group mr-sm-2">
                            <input type="text" class="form-control" name="name" aria-describedby="basic-addon3" placeholder="Nombre y apellido" value="{{$user->name}}">
                            </div>
                        </div>
                        
                        {{-- EMAIL --}}
                        <div class="col-12 col-md-6 mt-3 ml-1">
                            <label class="lead">Email:</label>
                            <div class="input-group mr-sm-2">
                                <input type="text" class="form-control" name="email" aria-describedby="basic-addon3" placeholder="example@example.com" value="{{$user->email}}">
                            </div>
                        </div>
                        {{-- RESTABLECER CONTRASEÑA --}}
                        <div class="col-12 col-md-6 mt-5 ml-1">
                            <label class="lead font-weight-normal">Cambiar contraseña:</label>
                            <p>
                                <a href="">Restablecer Contraseña</a>
                            </p>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <button class="btn btn-primary btn-lg btn-block">Aplicar cambios
                            </button>
                        </div>
                    
                </div>
            </form>
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
        photo: ""

    },
    mounted() {
        //console.log(this.message);
        
    },
    methods: {
         previewFile(e, img) {
            
            let preview = document.querySelector(`.img-${img}`);
            let remove = document.querySelector(`.delete-${img}`);

            preview.classList.remove('d-none');

            //remove.classList.add('fas', 'fa-times-circle', 'focom-image-icon-delete', 'text-danger');
            
            let file    = document.querySelector(`.file-${img}`).files[0];
            let reader  = new FileReader();

            let vm = this;
            reader.onloadend = function () {
                preview.src = reader.result;
                //vm.photo.push({ image: e.target.name, url: file.name });
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
            //remove.classList.remove('fas', 'fa-times-circle', 'focom-image-icon-delete', 'text-danger');
        },
        submit(){

            form.submit();

        } 
    }
})

</script>
@endsection