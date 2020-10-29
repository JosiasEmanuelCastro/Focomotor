{{-- BEGIN NOTIFICATION --}}
    <div class="pb-5 pb-md-0">
        <div class="bg-primary @if(Agent::isMobile() || Agent::isTablet()) p-4 mb-5 mt-n5 @else mb-n5 p-5 mt-5 @endif text-white justify-content-center">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <h3>¡Focomotor esta hecho para tu concesionaria!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-3 col-12 d-flex justify-content-start">
                    <a href="{{ route('plans') }}" class="btn btn-outline-light p-3 px-4 rounded-pill d-flex justify-content-start focom-notification-bottom-width">
                        <i class="far fa-clipboard fa-lg pr-2 pt-1"></i>
                        <span>
                            <b>Ver planes</b>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
{{-- END NOTIFICATION --}}