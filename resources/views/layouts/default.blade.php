@if(Agent::isMobile() || Agent::isTablet())
    @include('layouts.mobile')
@else
    @include('layouts.main')
@endif
