@extends('layouts.lite')
@section('section')
<div class="text-center bg-primary focom-signin-paddingy">
    <div>
        <a href="{{ route('home') }}">
            <img height="25px" class="focom-logo" src="/img/focom-white.png">
        </a>
    </div>
</div>
@include('elements.forms.register')
<p class="small pt-5 mb-4 px-4 text-center">Al registrarte estas aceptando los <a
        href="terminos-y-condiciones.html"><u>Términos y Condiciones</u></a> y la <a
        href="politica-de-privacidad.html"><u>Política de Privacidad</u></a> de Focomotor.</p>
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
            finder: "",
            cities: []

        },
        mounted() {

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

                if (this.finder.display_name != '') {
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
