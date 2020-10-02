<footer class="mt-5 bg-dark text-white p-5 d-none d-md-block">
    <div class="row">
        <div class="col-3">
            <img src="/img/focom-white.png" height="20px">
        </div>
        <div class="col-3">
            <h5 class="mr-n5">SOBRE NOSOTROS</h5>
            <p class="small">Focomotor es el nuevo mercado en línea para compradores y vendedores de vehículos nuevos o usados. Concesionarias y vendedores privados pueden publicar en Focomotor con planes de precios asequibles.</p>
        </div>
        <div class="col-3 pl-5">
            <h5>SITIOS</h5>
            <a href="{{ route('home')}}" class="small text-white">
                <u>Inicio</u>
            </a>
            <br>
            <a href="{{ route('list') }}" class="small text-white">
                <u>Listado</u>
            </a>
            <br>
            <a href="{{ route('login') }}" class="small text-white">
                <u>Iniciar sesión</u>
            </a>
            <br>
            <a href="{{ route('register')}}" class="small text-white">
                <u>Registrarse</u>
            </a>
            <br>
            <a href="{{ route('articles.create') }}" class="small text-white">
                <u>Publicar</u>
            </a>
            <br>
            <a href="{{ route('plans')}}" class="small text-white">
                <u>Planes</u>
            </a>
            <br>
            <a href="{{ route('info.help') }}" class="small text-white">
                <u>Ayuda</u>
            </a>
            <br>
        </div>
        <div class="col-3 pr-4">
            <h5>CONTACTO</h5>
            <p class="small text-white">
                ¿Tenés alguna pregunta?
                <a href="{{ route('contact') }}" class="text-white"><br>
                    <u>Contáctanos</u>
                </a>
                <br>
                <br>O envíanos un correo electrónico<br>
                ayuda@focomotor.com.ar
            </p>
        </div>
    </div>
</footer>
