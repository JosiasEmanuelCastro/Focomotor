<div class="pt-2 my-1">
    <label>Combustible</label>

    @if (request()->fuel)
        <span>{{request()->fuel}}</span>
        <input type="hidden" name="fuel" value="{{request()->fuel}}">
        <a href="/listado?{{http_build_query(request()->except("fuel"))}}">[x]</a>
    @else
        <select class="custom-select" name="fuel">
            <option value="" selected>Todos</option>
            <option value="Gasoil">Gasoil</option>
            <option value="Nafta">Nafta</option>
            <option value="Electrico">Electrico</option>
        </select>
    @endif                    
</div>