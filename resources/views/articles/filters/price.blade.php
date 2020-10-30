@if(!request()->price)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Precio</label>

        {!! Filter::getLinkBetweenWithCount(clone $queryCount, 'price', 0, 500000, "Hasta $500.000") !!}
        {!! Filter::getLinkBetweenWithCount(clone $queryCount, 'price', 500000, 700000, "Desde $500.000 Hasta $700.000") !!}
        {!! Filter::getLinkBetweenWithCount(clone $queryCount, 'price', 700000, 1000000, "Desde $700.000 Hasta $1.000.000") !!}

        <input type="number" name="" placeholder="Desde" class="d-inline-block small focom-mouse-hover-pointer" style="width: 80px;">
        <i class="font-weight-bolder h5">─</i>
        <input type="number" name="" placeholder="Hasta" class="d-inline-block small focom-mouse-hover-pointer" style="width: 80px">
        <a class="pl-2 fas fa-search text-primary text-decoration-none focom-mouse-hover-pointer"></a>
    </div>
@endif