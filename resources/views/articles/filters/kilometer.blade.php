@if(!request()->kilometers)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Kilometraje</label>

        {!! Filter::getLinkBetweenWithCount(clone $queryCount, 'kilometers', 0, 35000, "Hasta 35.000km") !!}
        {!! Filter::getLinkBetweenWithCount(clone $queryCount, 'kilometers', 35000, 75000, "Desde 35.000km Hasta 75.000km") !!}
        {!! Filter::getLinkBetweenWithCount(clone $queryCount, 'kilometers', 75000, 100000, "Desde 75.000km Hasta 100.000km") !!}

        <filter-kilometers />
        
    </div>
@endif