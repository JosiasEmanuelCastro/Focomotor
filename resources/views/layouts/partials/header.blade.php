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
                <a href="{{ route('home')}}" class="{{ request()->is('/') ? 'text-primary' : 'text-black-50' }}">Inicio</a>
                <a href="{{ route('list') }}" class="{{ request()->is('listado') ? 'text-primary' : 'text-black-50' }}">Listado</a>
                <a href="{{ route('articles.create') }}" class="{{ (request()->is('publicar') || request()->is('guest')) ? 'text-primary' : 'text-black-50' }}">Publicar</a>
                <a href="{{ route('plans') }}" class="{{ request()->is('planes') ? 'text-primary' : 'text-black-50' }}">Concesionarias</a>
                <a href="{{ route('info.help') }}" class="{{ request()->is('ayuda') ? 'text-primary' : 'text-black-50' }}">Ayuda</a>
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
        <div class="dropdown">
            <div class="d-flex align-items-center" type="button" id="focomUserDropDownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <a href="{{-- SITIO DEL USUARIO --}}">
                    <div class="focom-header-imageProfile mr-2">
                        <img class="border" src="/img/default_profile.jpg">
                    </div>
                </a>
                <a href="{{-- SITIO DEL USUARIO --}}" class="text-secondary text-decoration-none">{{auth()->user()->name}}</a>
                <i class="ml-2 fas fa-angle-down text-secondary focom-userArrow" style="padding-top: 3px;"></i>
            </div>
            <div class="dropdown-menu w-100 ml-1 mt-2" aria-labelledby="focomUserDropDownMenu">
                <a class="dropdown-item" href="#">Mi cuenta</a>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item">Salir</button>
                </form>
            </div> 
        </div>
        @endauth
</header>