@if(!request()->type)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Categorías</label>

        @foreach ($totalArticles->groupBy('type_id') as $item)
            {!! Filter::getLinkWithCount('type', $item, $item[0]->type->name) !!}
        @endforeach

    </div>
@endif