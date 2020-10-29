@if(!request()->price)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Precio</label>

        {!! Filter::getLinkBetweenWithCount($totalArticles, 'price', 0, 500000, "Hasta $500.000") !!}
        {!! Filter::getLinkBetweenWithCount($totalArticles, 'price', 500000, 700000, "Desde $500.000 Hasta $700.000") !!}
        {!! Filter::getLinkBetweenWithCount($totalArticles, 'price', 700000, 1000000, "Desde $700.000 Hasta $1.000.000") !!}

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