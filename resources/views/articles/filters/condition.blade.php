@if(!request()->condition)

    @if(count($totalArticles->groupBy('condition')))
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Condición</label>

        @foreach ($totalArticles->groupBy('condition') as $title => $items)
            {!! Filter::getLinkWithCount('condition', $items, $title) !!}
        @endforeach

    </div>
    @endif
@endif