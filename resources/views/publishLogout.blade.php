@extends('layouts.default')

@section('section')
  <div class="focom-slide position-relative d-none d-md-inline-block w-100">
        <img src="/img/Slide13.jpg" class="d-block" alt="...">
        <h1 class="text-white display">Publicar</h1>
    </div>

    <div class="container focom-section pt-3">
        <h2 class="text-center">¡Hola! Para publicar <br class="d-none d-sm-block">primero debes registrarte</h2>
        <p class="text-center focom-section-paddingx">Es simple, solo llená unos datos.</p>
        <div class="d-block pt-2">

        	<!-- BEGIN REGISTER FORM -->
        	<div class="d-flex justify-content-center">
			    <div class="bg-white focom-signin-card mt-0 border shadow rounded w-100 mx-3">
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
			<!-- END REGISTER FORM -->

        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="/js/focom-pagePublish.js"></script>
@endsection