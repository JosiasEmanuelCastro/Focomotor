@section('js')
<script type="text/javascript">
    
    //step 2
    document.getElementById('nextstep1').addEventListener('click', showstep2)

    function showstep2(){
        document.getElementById('step1').classList.toggle('d-none');
        document.getElementById('step2').classList.toggle('d-none');
        scrollTop();
    }
    //step 3
    document.getElementById('nextstep2').addEventListener('click', showstep3)

    function showstep3(){
        document.getElementById('step2').classList.toggle('d-none');
        document.getElementById('step3').classList.toggle('d-none');
        scrollTop();
    }
    //step 4
    document.getElementById('nextstep3').addEventListener('click', showstep4)

    function showstep4(){
        document.getElementById('step3').classList.toggle('d-none');
        document.getElementById('step4').classList.toggle('d-none');
        scrollTop();
    }

    //HIDE STEP

    //step 2
    document.getElementById('hidestep2').addEventListener('click', hidestep2)

    function hidestep2(){
        document.getElementById('step1').classList.toggle('d-none');
        document.getElementById('step2').classList.toggle('d-none');
        scrollTop();
    }
    //step 3
    document.getElementById('hidestep3').addEventListener('click', hidestep3)

    function hidestep3(){
        document.getElementById('step2').classList.toggle('d-none');
        document.getElementById('step3').classList.toggle('d-none');
        scrollTop();
    }
    //step 4
    document.getElementById('hidestep4').addEventListener('click', hidestep4)

    function hidestep4(){
        document.getElementById('step3').classList.toggle('d-none');
        document.getElementById('step4').classList.toggle('d-none');
        scrollTop();
    }

</script>
@endsection
<div class="d-flex justify-content-center">
    <div class="bg-white focom-signin-card border shadow rounded w-100 mx-3">
       
        <div class="text-center pt-1 pb-4">
            <a href="{{ route('login') }}">Ingresar</a>
            <a href="{{ route('register') }}" class="pl-3 font-weight-bold">Registro</a>
        </div>
        <form action="{{ route('register') }}" method="POST" id="register">
            @csrf


            <div id="step1" class=""> 
                <h4 class="h5 focom-registerTitle">1. Completá</h4>
                <hr>
                <label for="name">Nombre y apellido</label>
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
                <div class="d-flex justify-content-center justify-content-md-end">
                    <div id="nextstep1" class="btn btn-primary pb-1 my-0 px-5 mt-4"><p class="h6">Continuar</p></div>
                </div>
            </div>


            <div id="step2" class="d-none">
                <div id="hidestep2" class="btn btn-primary d-inline text-white rounded-circle focom-mouse-hover-pointer p-0 mr-2 focom-registerArrow">
                    <i class="fas fa-arrow-left mb-2"></i>
                </div>
                    <h4 class="h5 d-inline focom-registerTitle">2. Creá una contraseña</h4>
                <hr>
                <label for="password">Contraseña</label>
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <input type="password" class="form-control" name="password" aria-describedby="passwordHelp">
                <label for="password_confirmation" class="mt-3">Confirmar Contraseña</label>
                <input type="password" class="form-control" name="password_confirmation" aria-describedby="passwordConfirmationHelp">
                <div class="d-flex justify-content-center justify-content-md-end">
                    <div id="nextstep2" class="btn btn-primary pb-1 my-0 px-5 mt-4"><p class="h6">Continuar  </p></div>
                </div>
            </div>


            <div id="step3" class="d-none">
                <div id="hidestep3" class="btn btn-primary d-inline text-white rounded-circle focom-mouse-hover-pointer p-0 mr-2 focom-registerArrow">
                    <i class="fas fa-arrow-left mb-2"></i>
                </div>
                <h4 class="h5 d-inline focom-registerTitle">3. Buscá tu localidad</h4>
                <hr>
                <label for="location">Localidad</label>
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
                <div class="d-flex justify-content-center justify-content-md-end">
                    <div id="nextstep3" class="btn btn-primary pb-1 my-0 px-5 mt-4"><p class="h6">Continuar  </p></div>
                </div>
            </div>


            <div id="step4" class="d-none">
                <div id="hidestep4" class="btn btn-primary d-inline text-white rounded-circle focom-mouse-hover-pointer p-0 mr-2 focom-registerArrow">
                    <i class="fas fa-arrow-left mb-2"></i>
                </div>
                <h4 class="h5 d-inline focom-registerTitle">4. Indicános tu télefono</h4>
                <hr>
                <label for="telephone">Teléfono</label>
                @error('telephone')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <input type="text" class="form-control" value="{{ old('telephone') }}" name="telephone" aria-describedby="telephoneHelp"> 
                <div class="d-flex justify-content-center justify-content-md-end">
                    <button @click.prevent="submit" class="btn btn-primary pb-1 my-0 px-5 mt-4"><p class="h6">Registrarse</p></button>
                </div>
            </div>
            
            
        </form>
    </div>
</div>