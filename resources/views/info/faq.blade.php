@extends('layouts.default')

@section('section')



    <div class="focom-slide position-relative d-none d-md-inline-block w-100">
        <img src="/img/Slide9.jpg" class="d-block" alt="Preguntas Frecuentes">
        <h1 class="text-white display">Preguntas Frecuentes</h1>
    </div>
    <span class="d-block d-md-none h3 pl-4 pt-2 text-center">Preguntas Frecuentes</span>

    <div class="container focom-section pt-3" style="max-width: 800px">
        <div class="accordion" id="focom-faqs">

            <div class="card">
                <div class="card-header" id="collapse1">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark font-weight-bold" type="button" data-toggle="collapse" data-target="#question1" aria-expanded="true" aria-controls="question1">
                            ¿Cuantos vehiculos puedo publicar?
                        </button>
                    </h2>
                </div>
                <div id="question1" class="collapse" aria-labelledby="collapse1" data-parent="#focom-faqs">
                    <div class="card-body">
                        <p>Al registrarte En Focomotor podés publicar hasta un vehículo de manera completamente gratis.</p><br>
                        <p>Siempre que quieras publicar un vehiculo más podés conseguir una publicación extra por $150 o podés conseguir un plan de publicaciones en <a href="{{ route('plans') }}">focomotor.com.ar/planes</a></p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="collapse2">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark font-weight-bold" type="button" data-toggle="collapse" data-target="#question2" aria-expanded="true" aria-controls="question2">
                            ¿Cuanto tiempo dura una publicación?
                        </button>
                    </h2>
                </div>
                <div id="question2" class="collapse" aria-labelledby="collapse2" data-parent="#focom-faqs">
                    <div class="card-body">
                        <p>Tu publicación dura 30 días y luego te enviamos un notificación por correo donde podrás re-publicarlo. Sin embargo si compraste un plan en focomotor.com.ar/planes tus publiciones tienen una duración inlimitada.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="collapse3">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark font-weight-bold" type="button" data-toggle="collapse" data-target="#question3" aria-expanded="true" aria-controls="question3">
                            ¿Como comprar un plan?
                        </button>
                    </h3>
                </div>
                <div id="question3" class="collapse" aria-labelledby="collapse3" data-parent="#focom-faqs">
                    <div class="card-body">
                        <p>Para comprar un plan primero debes estar registrado y luego seleccionar el plan que deseas en focomotor.com.ar/planes. En ese momento podrás completar el pago mediante MercadoPago, y cuando se acepte la transaccion obtendrás inmediatamente todos los beneficios del plan. Mensualmente MercadoPago te solicitará el pago del plan que hayas comprando, pero podés cancelarlo en cualquier momento.</p>
                    </div>
                </div>
            </div>

  
            <div class="card">
                <div class="card-header" id="collapse4">
                    <h4 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark font-weight-bold" type="button" data-toggle="collapse" data-target="#question4" aria-expanded="true" aria-controls="question4">
                            ¿Que ocurre con mis publicaciones si cancelo un plan?
                        </button>
                    </h4>
                </div>
                <div id="question4" class="collapse" aria-labelledby="collapse4" data-parent="#focom-faqs">
                    <div class="card-body">
                        <p>Al cancelar un plan sus publicaciones serán visibles solo para usted y no se podrán encontrar en nuestros listados. Sin embargo siempre podrá publicar uno de sus vehículos completamente gratis, o si desea también puede conseguir un nuevo plan y publicar nuevamente todos sus clasificados.  </p>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header" id="collapse5">
                    <h5 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark font-weight-bold" type="button" data-toggle="collapse" data-target="#question5" aria-expanded="true" aria-controls="question5">
                            ¿Como contacto al vendedor de una publicación?
                        </button>
                    </h5>
                </div>
                <div id="question5" class="collapse" aria-labelledby="collapse5" data-parent="#focom-faqs">
                    <div class="card-body">
                        <p>Tienes 3 opciones:</p><br>
                        <p>A - Por WhatsApp, si el vendedor proporcionó uno, para eso debes hacer click al botón verde que dice "WhatsApp" en la publicación: <img height="40px" src="img/info/Screenshot_1.png"></p><br>

                        <p>B - Por Llamada telefonica, puedes verlo haciendo click al siguiente botón:<img height="40px" src="img/info/Screenshot_2.png"></p><br>
                        <p>C - Por Mail, para verlo debes hacer click al botón:</p><br>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header" id="collapse6">
                    <h6 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark font-weight-bold" type="button" data-toggle="collapse" data-target="#question6" aria-expanded="true" aria-controls="question6">
                            ¿Como puedo denunciar una publicación?
                        </button>
                    </h6>
                </div>
                <div id="question6" class="collapse" aria-labelledby="collapse6" data-parent="#focom-faqs">
                    <div class="card-body">
                        <p>Al registrarte En Focomotor podés publicar hasta un vehículo de manera completamente gratis.</p><br>
                        <p>Si consideras que una publicación no esta cumplento los terminos y condiciones del sitio o contiene información falsa u otro motivo en particular, puedes denunciarlo haciendo click en el botón 'denunciar':</p>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection