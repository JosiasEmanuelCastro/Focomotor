@if(!request()->kilometer)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Kilometraje</label>

        {!! Filter::getLinkBetweenWithCount($totalArticles, 'kilometer', 0, 35000, "Hasta 35.000km") !!}
        {!! Filter::getLinkBetweenWithCount($totalArticles, 'kilometer', 35000, 75000, "Desde 35.000km Hasta 75.000km") !!}
        {!! Filter::getLinkBetweenWithCount($totalArticles, 'kilometer', 75000, 100000, "Desde 75.000km Hasta 100.000km") !!}


        <select class="d-inline-block custom-select-sm pl-0 ml-n1 pr-2 border-0 focom-mouse-hover-pointer">
            <option selected>Desde</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <i class="pr-1 font-weight-bolder h5">─</i>
        <select class="d-inline-block custom-select-sm pl-0 ml-n1 pr-2 border-0 focom-mouse-hover-pointer">
            <option selected>Hasta</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <a class="pl-2 fas fa-search text-primary text-decoration-none focom-mouse-hover-pointer"></a>
    </div>
@endif