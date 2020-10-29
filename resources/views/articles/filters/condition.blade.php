@if(!request()->condition)

    @if($countCondition)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Condición</label>

        @foreach ($countCondition as $item)
            {!! Filter::getLinkWithCount('condition', $item) !!}
        @endforeach

    </div>
    @endif
@endif