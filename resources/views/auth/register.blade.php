@extends('layouts.lite')
@section('section')
<div class="text-center bg-primary focom-signin-paddingy">
    <div>
        <a href="{{ route('home') }}">
            <img height="25px" class="focom-logo" src="/img/focom-white.png">
        </a>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="bg-white focom-signin-card border shadow rounded w-100 mx-3">
        @if($errors)
        @foreach($errors as $error)
        <div>{{ dump($error) }}</div>
        @endforeach
        @endif
        <div class="text-center pt-1 pb-4">
            <a href="{{ route('login') }}">Ingresar</a>
            <a href="{{ route('register') }}" class="pl-3 font-weight-bold">Registro</a>
        </div>
        <form action="{{ route('register') }}" method="POST" id="register">
            @csrf
            <label for="name" class="pt-2">Nombre y Apellido</label>
            <input type="text" class="form-control" name="name" aria-describedby="nameHelp">
            <label for="email" class="mt-3">Correo electrónico</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            <label for="password" class="mt-3">Contraseña</label>
            <input type="password" class="form-control" name="password" aria-describedby="passwordHelp">
            <label for="password_confirmation" class="mt-3">Confirmar Contraseña</label>
            <input type="password" class="form-control" name="password_confirmation" aria-describedby="passwordConfirmationHelp">
            <label for="location" class="pt-2">Localidad</label>
            <v-select v-model="finder" :filterable="false" :options="cities" @search="find" label="display_name" aria-describedby="locationHelp">
               
                <template slot="no-options">
                    Ingrese una localidad..
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
            <label for="telephone" class="pt-2">Telefono</label>
            <input type="text" class="form-control" name="telephone" aria-describedby="telephoneHelp">
            <div class="d-flex justify-content-center">
                <button @click.prevent="submit" class="btn btn-primary px-5 mt-4">Registrarse</button>
            </div>
        </form>
    </div>
</div>
<p class="small pt-5 mb-4 px-4 text-center">Al registrarte estas aceptando los <a href="terminos-y-condiciones.html"><u>Términos y Condiciones</u></a> y la <a href="politica-de-privacidad.html"><u>Política de Privacidad</u></a> de Focomotor.</p>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-select@latest"></script>
<script>
Vue.component('v-select', VueSelect.VueSelect);

var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        finder: { display_name: '', icon: ''},
        cities: []

    },
    mounted() {
        console.log(this.message);
    },
    methods: {
        async find(search, loading) {

            if(search != ''){
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
        submit(){

            $('input[name="location"]').val(JSON.stringify(this.finder));

            //console.log(document.getElementsByName('location')[0].value);
            const form = document.getElementById('register');
            form.submit();

        } 
    }
})

</script>
@endsection
