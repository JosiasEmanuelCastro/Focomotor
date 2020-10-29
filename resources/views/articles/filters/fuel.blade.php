@if(!request()->fuel)

    @if(count($totalArticles->groupBy('fuel')))
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Combustible</label>

        @foreach ($totalArticles->groupBy('fuel') as $title => $items)
            {!! Filter::getLinkWithCount('fuel', $items, $title) !!}
        @endforeach

    </div>
    @endif
@endif