<div class="col-12 col-sm-6 col-md-4">
    <select class="custom-select my-3 mr-sm-2" v-model="theCategory">
        <option value="" disabled>Seleccione categoria</option>
        <option v-for="category in categories" :value="category">@{{ category.name }}</option>

        <optgroup label="-------"></optgroup>
        <option value="-1">Otra</option>
    </select>
</div>
<div v-if="listSubitems" class="col-12 col-sm-6 col-md-4">
    <select class="custom-select my-3 mr-sm-2" v-model="theMark">
        <option value="" disabled>Seleccione @{{ subtitle }}</option>
        <option v-for="trademark in trademarks" :value="trademark">@{{ trademark.name }}</option>
        <optgroup label="-------"></optgroup>
        <option value="-1">Otros</option>
    </select>
</div>
<div v-if="listModels" class="col-12 col-sm-6 col-md-4">
    <select class="custom-select my-3 mr-sm-2" name="model_id" v-model="theModel">
        <option value="" disabled>Seleccione @{{ children_node }}</option>
        <option v-for="model in models" :value="model.id">@{{ model.name }}</option>
        <optgroup label="-------"></optgroup>
        <option value="-1">Otro</option>
    </select>
</div>

<div v-if="inputModel" class="col-12 col-sm-6 col-md-4">
    <div class="input-group my-3 mr-sm-2">
        <input type="text" name="manual_content" class="form-control"
            placeholder="Complete su titulo.">
    </div>
    
</div>