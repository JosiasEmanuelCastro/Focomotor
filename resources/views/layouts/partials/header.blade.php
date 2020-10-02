<header class="d-none d-md-block my-3 mx-md-4 mx-lg-5">
    <div class="d-flex align-items-center">
        <div class="flex-grow-0">
            <div class="pt-1 mb-n1">
                <a href="{{ route('home')}}">
                    <img height="20px" src="/img/focom-primary.png">
                </a>
            </div>
            <div class="pt-4">
                <span href="html/" class="text-decoration-none focom-header-desktop-ubication"></span>
            </div>
        </div>
        <div class="flex-grow-1 mx-md-4 mx-lg-5">
            <div class="input-group focom-nav-desktop-search">
                <input type="text" class="form-control focom-nav-desktop-input" placeholder="Buscar en Focomotor">
                <div class="input-group-append">
                    <button class="focom-nav-desktop-searchbutton bg-primary input-group-text fas fa-search fa-lg text-white" id=""></button>
                </div>
            </div>
            <div class="focom-nav-desktop">
                <a href="{{ route('home')}}" class="text-primary">Inicio</a>
                <a href="{{ route('list') }}" class="text-black-50">Listado</a>
                <a href="{{ route('articles.create') }}" class="text-black-50">Publicar</a>
                <a href="{{ route('plans') }}" class="text-black-50">Concesionarias</a>
                <a href="{{ route('info.help') }}" class="text-black-50">Ayuda</a>
            </div>
        </div>
        @guest('web')
        <div class="flex-grow-0">
            <a href="{{ route('login') }}" class="font-weight-normal text-black-50 px-1">Ingresar</a>
            <a href="{{ route('register') }}" class="btn btn-primary">
                Registrarse
            </a>
        </div>
        @endguest
        @auth('web')
        {{-- expr --}}
        <div class="d-flex align-content-center">
            <a href="{{ route('user.dashboard') }}">
                <div class="focom-header-imageProfile">
                    <img class="border" src="/img/default_profile.jpg">
                </div>
            </a>
            <a href="{{ route('user.dashboard') }}" class="text-secondary my-auto text-decoration-none px-2">{{ auth()->user()->name }}</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-primary">Logout</button>
            </form>
        </div>
        @endauth
    </div>
</header>
