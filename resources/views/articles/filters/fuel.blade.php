@if(!request()->fuel)

    @if($countFuel->count())
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Combustible</label>

        @foreach ($countFuel as $item)
            {!! Filter::getLinkWithCount('fuel', $item) !!}
        @endforeach

    </div>
    @endif
@endif