@if(!request()->type)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Categorías</label>

        @php
        $queryCategories = clone $queryCount;

        $countCategories = $queryCategories->groupBy('type_id')->select(DB::raw('count(*) as total_category, articles.type_id, categories.name'))
        ->get();

        @endphp

        @foreach ($countCategories as $item)
            <a href='/listado?{{http_build_query(array_merge(request()->all(), ['type' => $item->type_id]))}}' 
            class='d-block text-dark text-decoration-none pb-1 focom-filters-locationref'>{{$item->name}}({{$item->total_category}})</a>
        @endforeach

    </div>
@endif