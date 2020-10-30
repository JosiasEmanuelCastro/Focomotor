<div class="pt-3 my-1">
    <label class="focom-label-filters mb-0">Ordenar por</label>
    <div class="dropdown">
      <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ultimos publicados
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

        <a href="/listado?{{ http_build_query(request()->except("order", "sort")) }}" class="dropdown-item active">Ultimos publicados</a>

        <a href="/listado?{{ http_build_query(array_merge(request()->all(), ['order' => 'price', 'sort' => 'ASC'])) }}" class="dropdown-item">Menor precio</a>

        <a href="/listado?{{ http_build_query(array_merge(request()->all(), ['order' => 'price', 'sort' => 'DESC'])) }}" class="dropdown-item">Mayor precio</a>
      </div>
    </div>
</div>