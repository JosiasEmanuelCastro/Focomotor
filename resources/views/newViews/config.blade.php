@extends('layouts.default')
@section('section')
    <hr class=" d-none d-md-block mt-n1">
        <div class="focom-section mt-4 mx-3 mx-sm-5">
            <h1 class="h2">Ajustes de perfil</h1>
            <div class="row">
                <!-- PROFILE IMAGE -->
                <div class="col-12 col-md-6 mt-3">
                    <label class="lead">Imagen de perfil:</label>
                    <div class="row">
                        <div class="focom-user-profile-image">
                            <img class="focom-vehicle-profile-image border ml-3" src="https://static.ellahoy.es/r/845X0/www.ellahoy.es/img/perfil-del-hombre-infiel.jpg">
                        </div>
                        <div class="my-5 ml-4 ml-sm-5 btn btn-primary focom">
                            Cambiar imagen
                            <input type="file" class="focom-config-input-image" name="">
                        </div>
                    </div>
                </div>
                <!-- NAME -->
                <div class="col-12 col-md-6 mt-3 ml-1">
                    <label class="lead">Nombre:</label>
                    <div class="input-group mr-sm-2">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Nombre">
                    </div>
                </div>
                <!-- LAST NAME -->
                <div class="col-12 col-md-6 mt-3 ml-1">
                    <label class="lead">Apellido:</label>
                    <div class="input-group mr-sm-2">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Apellido">
                    </div>
                </div>
                <!-- EMAIL -->
                <div class="col-12 col-md-6 mt-3 ml-1">
                    <label class="lead">Email:</label>
                    <div class="input-group mr-sm-2">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="example@example.com">
                    </div>
                </div>
                <!-- RESTABLECER CONTRASEÑA -->
                <div class="col-12 col-md-6 mt-5 ml-1">
                    <label class="lead font-weight-normal">Cambiar contraseña:</label>
                    <p>
                        <a href="">Restablecer Contraseña</a>
                    </p>
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Aplicar cambios
                    </button>
                </div>
            </div>
        </div>
@endsection