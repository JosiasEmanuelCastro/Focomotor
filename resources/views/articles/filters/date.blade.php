@if(!request()->year)
    @if($countDate->count())
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Año</label>

        @foreach ($countDate as $item)
            {!! Filter::getLinkWithCount('year', $item) !!}
        @endforeach
       
    </div>
    @endif
@endif