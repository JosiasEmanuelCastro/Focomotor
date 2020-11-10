<template>
  <div class="container-lg focom-section pt-3" style="padding-bottom: 150px">
    <form ref="register">
    <form-wizard ref="wizard" @on-complete="onComplete">
      
      <tab-content title="Categoria" icon="ti-user">
        <section class="border">

          <div class="p-4">
            <div
              class="py-3"
              v-for="list in current.lists"
              :value="list"
              :key="list.id"
            >
              <a
                @click="showStep2(list)"
                class="text-dark focom-mouse-hover-pointer text-decoration-none focom-mouse-hover-pointer"
              >
                <i class="fas h3 d-inline pl-1" :class="`fa-${list.icon}`"></i>
                <h5 class="pl-3 d-inline">{{ list.name }}</h5>
              </a>
              <hr />
            </div>
          </div>
        </section>
      </tab-content>
      <tab-content title="Marca y Modelo" icon="ti-user" :before-change="()=>validateStep('step2')">
         <step2 :category="theList" ref="step2" @on-validate="mergePartialModels"></step2>
      </tab-content>
      <tab-content title="Atributos" icon="ti-user" :before-change="()=>validateStep('step3')">
         <step3 ref="step3" @on-validate="mergePartialModels"></step3>
      </tab-content>
      <tab-content title="Imagenes" icon="ti-user" :before-change="()=>validateStep('step4')">
         <step4 ref="step4" @on-validate="mergePartialModels"></step4>
      </tab-content>
      <tab-content title="Descripción" icon="ti-user">
         <step5 ref="step5"></step5>
      </tab-content>
      
    </form-wizard>
    </form>

  </div>
</template>

<script>
import { ValidationProvider, ValidationObserver } from "vee-validate";
import { extend } from "vee-validate";
import { required } from "vee-validate/dist/rules";

import Step2 from "./FormWizards/Publish/step2";
import Step3 from "./FormWizards/Publish/step3";
import Step4 from "./FormWizards/Publish/step4";
import Step5 from "./FormWizards/Publish/step5";

import { FormWizard, TabContent } from "vue-form-wizard";
import "vue-form-wizard/dist/vue-form-wizard.min.css";

extend("required", {
  ...required,
  message: "This field is required",
});

export default {
  components: {
    FormWizard,
    TabContent,
    ValidationProvider,
    ValidationObserver,
    Step2,
    Step3,
    Step4,
    Step5
  },
  data() {
    return {
      message: "hello",
      finalModel: {},
      current: {
        lists: "",
        children_node: "",
      },
      marks: {
        lists: "",
        children_node: "",
      },
      models: {
        lists: "",
        children_node: "",
      },
      theList: "",
      theMark: "",
      theModel: "",
      year: "",
      condition: "",
      fuel: "",
      kilometers: "",
      price: "",
      images: [],
      finder: "",
      cities: [],
      otherLocation: false,
      inputTitle: false,
      lastId: 0,
      errors: {},
    };
  },
  async mounted() {
    console.log(this.message);

    try {
      let res = await fetch(`/api/categories/all`);
      res = await res.json();
      this.current.lists = await res.items;
      this.current.children_node = await res.children_node;
    } catch (e) {
      console.log("Error al cargar datos.");
    }
  },
  watch: {
    theList: async function (val) {
      if (this.theList && this.theList != -1) {
        let res = await fetch(`/api/categories/${this.theList.id}`);
        res = await res.json();
        this.marks.lists = await res.items;

        this.inputTitle = false;

        this.marks.children_node = await res.children_node;
        this.theMark = "";
      }
    },
    theMark: async function (val) {
      if (this.theMark && this.theMark != -1) {
        let res = await fetch(`/api/categories/${this.theMark.id}`);
        res = await res.json();
        this.models.lists = await res.items;

        this.inputTitle = false;

        this.models.children_node = await res.children_node;
        this.theModel = "";
      }
    },
  },
  methods: {
    validateStep(name) {
      var refToValidate = this.$refs[name];
      return refToValidate.validate();
    },
    mergePartialModels(model, isValid) {
      if (isValid) {
        // merging each step model into the final model
        this.finalModel = Object.assign({}, this.finalModel, model);
      }
    },

    showStep2(theList) {
      this.theList = theList;

      this.mergePartialModels({category: this.theList}, true);

      this.$refs.wizard.nextTab();
      this.scrollTop();
    },
     onComplete: function(){
          this.submit();
    },
    scrollTop() {
      window.scrollTo(0, 0);
    },
    
    async submit() {
     

      let form = this.$refs.register;

      let formData = new FormData(form);

      //formData.append('feature_image', feature_image.files[0], 'cars.jpg')
      formData.append("category", JSON.stringify(this.finalModel.category));
      formData.append("mark", JSON.stringify(this.finalModel.theMark));
      formData.append("model", JSON.stringify(this.finalModel.theModel));
      formData.append("location", JSON.stringify(this.finalModel.finder));

      let token = document.head.querySelector('meta[name="csrf-token"]');

      //console.log(input.val());

      fetch(`/articles`, {
        method: "POST",
        mode: "cors",
        credentials: "same-origin",
        headers: {
          "X-CSRF-TOKEN": token.content,
          // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: formData,
      })
        .then((response) => response.json())
        .catch((error) => console.error("Error:", error))
        .then((response) => {
          console.log("Success:", response);

          if (response.errors) {
            this.errors = response.errors;
          } else {
            window.location = "/dashboard";
          }
        });

      //const form = document.getElementById('register');
      //form.submit();
    },
  },
};
</script>
