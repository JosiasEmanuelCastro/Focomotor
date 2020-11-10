<template>
  <section class="border">
    <div class="p-4">
      <label>Imagen principal:</label>
      <!-- IMAGEN 1 -->
      <div class="focom-input-image-principal rounded border">
        <input
          type="file"
          class="file-main"
          name="feature_image"
          v-on:change="previewFile($event, 'main')"
          accept="image/jpg, image/jpeg, image/png"
        />

        <img
          src=""
          class="img-main d-none focom-input-image-preview"
          alt="Image preview..."
        />

        <a class="delete-main" @click="resetImage('main')"></a>
      </div>

      <span class="help-block" v-if="$v.feature_image.$error && !$v.feature_image.required">The field feature_image is required</span>

      <label class="h5 mt-5">Más imágenes:</label>
      <div class="d-flex">
        <!-- IMAGEN 2 -->
        <div class="focom-input-image rounded border mr-3">
          <input
            type="file"
            class="file-1"
            name="images[]"
            v-on:change="previewFile($event, 1)"
            accept="image/jpg, image/jpeg, image/png"
          /><br />
          <img
            src=""
            class="img-1 d-none focom-input-image-preview"
            alt="Image preview..."
          />

          <a class="delete-1" @click="resetImage(1)"></a>
        </div>
        <!-- IMAGEN 3 -->
        <div class="focom-input-image rounded border">
          <input
            type="file"
            class="file-2"
            name="images[]"
            v-on:change="previewFile($event, 2)"
            accept="image/jpg, image/jpeg, image/png"
          /><br />
          <img
            src=""
            class="img-2 d-none focom-input-image-preview"
            alt="Image preview..."
          />

          <a class="delete-2" @click="resetImage(2)"></a>
        </div>
      </div>
      <div class="d-flex mt-3">
        <!-- IMAGEN 4 -->
        <div class="focom-input-image rounded border mr-3">
          <input
            type="file"
            class="file-3"
            name="images[]"
            v-on:change="previewFile($event, 3)"
            accept="image/jpg, image/jpeg, image/png"
          /><br />
          <img
            src=""
            class="img-3 d-none focom-input-image-preview"
            alt="Image preview..."
          />

          <a class="delete-3" @click="resetImage('3')"></a>
        </div>
        <!-- IMAGEN 5 -->
        <div class="focom-input-image rounded border">
          <input
            type="file"
            class="file-4"
            name="images[]"
            v-on:change="previewFile($event, 4)"
            accept="image/jpg, image/jpeg, image/png"
          /><br />
          <img
            src=""
            class="img-4 d-none focom-input-image-preview"
            alt="Image preview..."
          />

          <a class="delete-4" @click="resetImage('file-4')"></a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
const { required } = require("vuelidate/lib/validators");

export default {
  data() {
    return {
      feature_image: "",
      images: [],
    };
  },
  validations: {
    feature_image: { required },
    form: ['feature_image']
  },
  methods: {
    validate() {
      this.$v.form.$touch();
      var isValid = !this.$v.form.$invalid;
      this.$emit("on-validate", this.$data, isValid);
      return isValid;
    },
    previewFile(e, img) {
      console.log(e.target.name);
      let preview = document.querySelector(`.img-${img}`);
      let remove = document.querySelector(`.delete-${img}`);

      if(img == 'main'){
           var files = e.target.files || e.dataTransfer.files;
           this.feature_image = files[0];
      }

      preview.classList.remove("d-none");

      remove.classList.add(
        "fas",
        "fa-times-circle",
        "focom-image-icon-delete",
        "text-danger"
      );

      let file = document.querySelector(`.file-${img}`).files[0];
      let reader = new FileReader();

      let vm = this;
      reader.onloadend = function () {
        preview.src = reader.result;
        vm.images.push({
          image: e.target.name,
          url: file.name,
        });
      };

      if (file) {
        reader.readAsDataURL(file);
      } else {
        preview.src = "";
      }
    },
    resetImage(img) {
      let file = document.querySelector(`.file-${img}`);
      let preview = document.querySelector(`.img-${img}`);
      let remove = document.querySelector(`.delete-${img}`);


      file.value = "";
      preview.src = "";
      preview.classList.add("d-none");
      remove.classList.remove(
        "fas",
        "fa-times-circle",
        "focom-image-icon-delete",
        "text-danger"
      );
    },
  },
};
</script>

<style>
</style>