@if(!request()->year)
    <div class="pt-4 my-1">
        <label class="focom-label-filters">Año</label>

        @foreach ($countDate as $item)
            {!! Filter::getLinkWithCount('year', $item) !!}
        @endforeach
        <div class="mt-3 mb-2">
            <div class="d-flex justify-content-between"> 
                <small>Desde</small>
                <small>Hasta</small>
            </div>
            <input type="range" class="form-control-range ">
        </div>

        <input type="number" name="" placeholder="Desde" class="d-inline-block small focom-mouse-hover-pointer" style="width: 80px;">
        <i class="font-weight-bolder h5">─</i>
        <input type="number" name="" placeholder="Hasta" class="d-inline-block small focom-mouse-hover-pointer" style="width: 80px">
        <a class="pl-2 fas fa-search text-primary text-decoration-none focom-mouse-hover-pointer"></a>
    </div>
@endif