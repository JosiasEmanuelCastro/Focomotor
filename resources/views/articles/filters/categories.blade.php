@if(!request()->type)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Categorías</label>

        @foreach ($totalArticles->groupBy('type_id') as $item)
            <a href='/listado?{{http_build_query(array_merge(request()->all(), ['type' => $item[0]->type->id]))}}' 
            class='d-block text-dark text-decoration-none pb-1 focom-filters-locationref'>{{$item[0]->type->name}}({{count($item)}})</a>
        @endforeach

    </div>
@endif