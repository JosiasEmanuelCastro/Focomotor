<div class="d-flex justify-content-center">
    <div class="bg-white focom-signin-card border shadow rounded w-100 mx-3">
       
        <div class="text-center pt-1 pb-4">
            <a href="{{ route('login') }}">Ingresar</a>
            <a href="{{ route('register') }}" class="pl-3 font-weight-bold">Registro</a>
        </div>
        <form action="{{ route('register') }}" method="POST" id="register">
            @csrf
            <label for="name" class="pt-2">Nombre y apellido</label>
            @error('name')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" aria-describedby="nameHelp">
            <label for="email" class="mt-3">Email</label>
            @error('email')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="email" class="form-control" value="{{ old('email') }}" name="email" aria-describedby="emailHelp">
            <label for="password" class="mt-3">Contraseña</label>
            @error('password')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="password" class="form-control" name="password" aria-describedby="passwordHelp">
            <label for="password_confirmation" class="mt-3">Confirmar Contraseña</label>
            <input type="password" class="form-control" name="password_confirmation" aria-describedby="passwordConfirmationHelp">
            <label for="location" class="pt-2">Localidad</label>
            @error('location')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <v-select v-model="finder" :filterable="false" :options="cities" @search="find" label="display_name" aria-describedby="locationHelp" autocomplete="nocomplete">
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
            
            <label for="telephone" class="pt-2">Teléfono</label>
            @error('telephone')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <input type="text" class="form-control" value="{{ old('telephone') }}" name="telephone" aria-describedby="telephoneHelp">
            <div class="d-flex justify-content-center">
                <button @click.prevent="submit" class="btn btn-primary px-5 mt-4">Registrarse</button>
            </div>
        </form>
    </div>
</div>