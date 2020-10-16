<div v-if="current.lists.length" class="col-12 col-sm-6 col-md-4">
    <select class="custom-select my-3 mr-sm-2" v-model="theList">
        <option value="" disabled>Seleccione @{{current.children_node}}</option>
        <option v-for="list in current.lists" :value="list">@{{ list.name }}</option>

        <optgroup label="-------"></optgroup>
        <option value="-1">Otra</option>
    </select>
</div>

<div v-if="theList == -1" class="col-12 col-sm-6 col-md-4">
    <div class="input-group my-3 mr-sm-2">
        <input type="text" name="manual_content" class="form-control"
            placeholder="Complete su titulo.">
    </div>
    
</div>