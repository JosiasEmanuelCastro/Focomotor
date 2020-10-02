@extends('layouts.default')

@section('section')
  <div class="focom-slide position-relative d-none d-md-inline-block w-100">
        <img src="/img/Slide13.jpg" class="d-block" alt="Publicar">
        <h1 class="text-white display">Publicar</h1>
    </div>

    <div class="container focom-section pt-3">
        <h2 class="text-center">¡Hola! Para publicar <br class="d-none d-sm-block">primero debes registrarte</h2>
        <p class="text-center focom-section-paddingx">Es simple, solo llená unos datos.</p>
        <div class="d-block pt-2">

            <div id="app">

        	   @include('elements.forms.register')

            </div>

        </div>
    </div>
@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css">
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
        message: 'Hello Vue!',
        finder: { display_name: '', icon: '' },
        cities: []

    },
    mounted() {
        console.log(this.message);
    },
    methods: {
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
                $('input[name="location"]').val(JSON.stringify(this.finder));
            }

            //console.log(document.getElementsByName('location')[0].value);
            const form = document.getElementById('register');
            form.submit();

        }
    }
})

</script>
@endsection
