<div class="col-12 col-md-4 pt-4">
    <label>Imagen principal:</label>
    <!-- IMAGEN 1 -->
    <div class="focom-input-image-principal rounded border">
        <input type="file" class="file-main" name="feature_image" v-on:change="previewFile($event, 'main')"
            accept="image/jpg, image/jpeg, image/png">

        <img src="" class="img-main  d-none focom-input-image-preview" alt="Image preview...">

        <a class="delete-main" @click="resetImage('main')"></a>
    </div>
</div>

<div class="col-12 col-md-8 pl-md-5 pl-lg-3 pt-4">
    <label class="col-12">Más imagenes:</label>
    <div class="d-flex">
        <!-- IMAGEN 2 -->
        <div class="focom-input-image rounded border mr-3">
            <input type="file" class="file-1" name="images[]" v-on:change="previewFile($event, 1)"
                accept="image/jpg, image/jpeg, image/png"><br>
            <img src="" class="img-1 d-none focom-input-image-preview" alt="Image preview...">


            <a class="delete-1" @click="resetImage(1)"></a>
        </div>
        <!-- IMAGEN 3 -->
        <div class="focom-input-image rounded border">
            <input type="file" class="file-2" name="images[]" v-on:change="previewFile($event, 2)"
                accept="image/jpg, image/jpeg, image/png"><br>
            <img src="" class="img-2 d-none focom-input-image-preview" alt="Image preview...">

            <a class="delete-2" @click="resetImage(2)"></a>
        </div>
    </div>
    <div class="d-flex mt-3">
        <!-- IMAGEN 4 -->
        <div class="focom-input-image rounded border mr-3">
            <input type="file" class="file-3" name="images[]" v-on:change="previewFile($event, 3)"
                accept="image/jpg, image/jpeg, image/png"><br>
            <img src="" class="img-3 d-none focom-input-image-preview" alt="Image preview...">

            <a class="delete-3" @click="resetImage('3')"></a>
        </div>
        <!-- IMAGEN 5 -->
        <div class="focom-input-image rounded border">
            <input type="file" class="file-4" name="images[]" v-on:change="previewFile($event, 4)"
                accept="image/jpg, image/jpeg, image/png"><br>
            <img src="" class="img-4 d-none focom-input-image-preview" alt="Image preview...">

            <a class="delete-4" @click="resetImage('file-4')"></a>
        </div>
    </div>
</div>
