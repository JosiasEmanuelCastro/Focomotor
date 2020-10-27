    <div id="focom-mobile-navbar" class="focom-nav-transition fixed-top d-flex d-md-none bg-primary text-white align-items-center justify-content-between shadow-sm focom-minwidth px-3 py-3">
        <a id="focom-nav-mobile-logo-search" href="{{ route('home')}}">
            <img src="/img/focom-white.png" height="20px" class="mr-3">
        </a>
        {{-- BEGIN SEARCH --}}
        <a id="focom-nav-arrowback" class="text-decoration-none focom-mouse-hover-pointer" style="display: none">
            <i class="fas fa-arrow-left fa-lg text-white pr-3"></i>
        </a>
        <form class="w-100 d-flex justify-content-end">
            <input id="focom-nav-mobile-input-search" type="search" class="form-control focom-nav-mobile-input" style="display: none" name="" placeholder="Busca en Focomotor">
            <a id="focom-nav-mobile-icon-search" class="focom-mouse-hover-pointer">
                <i class="fas fa-search fa-lg text-white"></i>
            </a>
        </form>
        {{-- END SEARCH --}}  
        <div id="hide-in-search" class="dropdown ml-3 my-n3" >
            <div type="button" id="focomUserDropDownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            <div class="">
	                <img class="rounded-circle" height="38px" src="{{ auth()->user()->profile_photo_url}}">
	            </div>
            </div>
            <div class="dropdown-menu w-100 ml-1 mt-2" aria-labelledby="focomUserDropDownMenu">
                <a class="dropdown-item" href="{{ route('user.dashboard') }}">Mi cuenta</a>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item">Salir</button>
                </form>
            </div> 
        </div>

           
    </div>
    <div class="d-block d-md-none focom-mobile-nav-padding"></div>