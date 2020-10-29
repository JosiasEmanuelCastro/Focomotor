<div class="pt-2 my-1">
    <label>Condicion</label>
    @if (request()->condition)          
         <span>{{request()->condition}}</span>
         <input type="hidden" name="condition" value="{{request()->condition}}">   
         <a href="/listado?{{http_build_query(request()->except("condition"))}}">[x]</a>
    @else
        <select class="custom-select" name="condition">
            <option value="" selected>Todos</option>
            <option value="Nuevo">Nuevo</option>
            <option value="Usado">Usado</option>
        </select>    
    @endif
    
</div>