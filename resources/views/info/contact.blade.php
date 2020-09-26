@extends('layouts.default')

@section('section')

    <div class="focom-slide position-relative d-none d-md-inline-block w-100">
        <img src="/img/Slide7.jpg" class="d-block" alt="Contacto">
        <h1 class="text-white display">Contacto</h1>
    </div>

    <div class="container focom-section pt-3 focom-section-padding">
        <h2 class="text-center">Atención 100% por <br>humanos.</h2>
        <p class="text-center">Nosotros estamos para resolver tus dudas.</p>
        <div class="row pt-4">
            <div class="col-12 col-md-6 form-group">
                <label for="exampleInputEmail1">Tú nombre</label>
                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-12 col-md-6">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-12 pt-3">
                <label for="exampleInputEmail1">Mensaje</label>
                <textarea class="form-control" aria-label="With textarea" placeholder="Escribenos tu consulta" style="height: 250px;"></textarea>
            </div>
            <div class="col-12 text-right">
                <button class="btn btn-primary px-5 mt-4">Enviar</button>
            </div>
        </div>
    </div>

@endsection