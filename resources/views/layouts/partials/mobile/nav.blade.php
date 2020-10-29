<navbar id="focom-nav-mobile" class="focom-mobile-nav w-100 fixed-bottom bg-white focom-minwidth border-top">
    <div class="d-flex font-weight-bold text-dark text-center">
        <a href="{{ route('home')}}" class="m-auto text-decoration-none">
            <i class="fas fa-home focom-mobile-nav-icon {{ request()->is('/') ? 'text-primary' : '' }}"></i>
            <p class="focom-mobile-nav-text {{ request()->is('/') ? 'text-primary' : '' }}">Inicio</p>
        </a>
        <a href="{{ route('articles.list') }}" class="m-auto text-decoration-none">
            <i class="fas fa-car focom-mobile-nav-icon {{ request()->is('listado') ? 'text-primary' : '' }}"></i>
            <p class="focom-mobile-nav-text {{ request()->is('listado') ? 'text-primary' : '' }}">Listado</p>
        </a>
        <a href="{{ route('articles.create') }}" class="m-auto text-decoration-none">
            <i class="fab fa-wpforms focom-mobile-nav-icon {{ (request()->is('publicar') || request()->is('guest')) ? 'text-primary' : '' }}"></i>
            <p class="focom-mobile-nav-text {{ (request()->is('publicar') || request()->is('guest')) ? 'text-primary' : '' }}">Publicar</p>
        </a>
        <a href="{{ route('plans') }}" class="m-auto text-decoration-none">
            <i class="fas fa-arrow-circle-up focom-mobile-nav-icon {{ request()->is('planes') ? 'text-primary' : '' }}"></i>
            <p class="focom-mobile-nav-text {{ request()->is('planes') ? 'text-primary' : '' }}">Planes</p>
        </a>

        {{--
        <a href="{{ route('login') }}" class="m-auto text-decoration-none">     
            <i class="fas fa-user focom-mobile-nav-icon {{ request()->is('usuario') ? 'text-primary' : '' }}"></i>
            <p class="focom-mobile-nav-text {{ request()->is('perfil') ? 'text-primary' : '' }}">Usuario</p>
        </a> 
        --}}
    </div>
</navbar>