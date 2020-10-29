@if(!request()->location)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Ubicación</label>
        
        @foreach($countLocations as $item)
            
            @if(isset(json_decode($item->location)->address->city))
                @php
                    $location = json_decode($item->location)->address->city;
                @endphp

            @else
                @php
                    $location = json_decode($item->location)->address->town;
                @endphp
            @endif

            <a href="/listado?{{ http_build_query(array_merge(request()->all(), ['location' => $location])) }}"
                class="d-block text-dark text-decoration-none pb-1 focom-filters-locationref">{{ $location }}
                ({{ $item->total }})</a>
        @endforeach


        <a href="" class="focom-filters-locationref fa-sm" data-toggle="modal"
            data-target="#focom-modal-filters-location"><i class="fas fa-search fa-sm pr-1 "></i>Buscar ciudad</a>
    </div>
@endif
