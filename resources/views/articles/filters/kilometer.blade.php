@if(!request()->kilometers)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Kilometraje</label>

        {!! Filter::getLinkBetweenWithCount(clone $queryCount, 'kilometers', 0, 35000, "Hasta 35.000km") !!}
        {!! Filter::getLinkBetweenWithCount(clone $queryCount, 'kilometers', 35000, 75000, "Desde 35.000km Hasta 75.000km") !!}
        {!! Filter::getLinkBetweenWithCount(clone $queryCount, 'kilometers', 75000, 100000, "Desde 75.000km Hasta 100.000km") !!}


        <input type="number" name="" placeholder="Desde" class="d-inline-block small focom-mouse-hover-pointer" style="width: 80px;">
        <i class="font-weight-bolder h5">─</i>
        <input type="number" name="" placeholder="Hasta" class="d-inline-block small focom-mouse-hover-pointer" style="width: 80px">
        <a class="pl-2 fas fa-search text-primary text-decoration-none focom-mouse-hover-pointer"></a>
    </div>
@endif