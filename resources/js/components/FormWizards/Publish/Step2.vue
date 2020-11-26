<template>
  <section class="border">
          
          <div class="p-4">
            <div>
              <label class="h4">Marca</label>
              <select class="custom-select my-3 mr-sm-2" v-model="theMark">
                <option value="" disabled>
                  Seleccione {{ marks.children_node }}
                </option>
                <option
                  v-for="list in marks.lists"
                  :value="list"
                  :key="list.id"
                >
                  {{ list.name }}
                </option>
              </select>
              <span class="help-block" v-if="$v.theMark.$error && !$v.theMark.required">The Mark is required</span>
            </div>
            <hr />

            <div>
              <label class="h4">Modelo</label>
              <select class="custom-select my-3 mr-sm-2" v-model="theModel">
                <option value="" disabled>
                  Seleccione {{ models.children_node }}
                </option>
                <option
                  v-for="list in models.lists"
                  :value="list"
                  :key="list.id"
                >
                  {{ list.name }}
                </option>
              </select>

              <span class="help-block" v-if="$v.theModel.$error && !$v.theModel.required">The Model is required</span>
            </div>
            <hr />

            <div>
              <label class="h4">Año</label>
              <select
                class="custom-select my-3 mr-sm-2"
                name="year"
                v-model="year"
              >
                <option value="" disabled selected>Año</option>

                <option
                  v-for="n in 150"
                  :value="new Date().getFullYear() - (n - 1)"
                  :key="n"
                >
                  {{ new Date().getFullYear() - (n - 1) }}
                </option>
              </select>

              <span class="help-block" v-if="$v.year.$error && !$v.year.required">The field year is required</span>
            </div>
            <hr />

            <div>
              <label class="h4">Ubicación</label><br />
              <label class="form-check-label text-muted"
                >Localidad seleccionada:</label
              >

              <v-select
                v-model="finder"
                :filterable="false"
                :options="cities"
                @search="find"
                label="display_name"
                aria-describedby="locationHelp"
              >
                <template slot="no-options">
                  Ingrese una localidad...
                </template>
                <template #option="{ display_name }">
                  <div class="d-center cursor-pointer">
                    {{ display_name }}
                  </div>
                </template>
                <template #selected-option="{ display_name }">
                  <div class="selected d-center text-weather-lighter">
                    {{ display_name }}
                  </div>
                </template>
              </v-select>
              
              <span class="help-block" v-if="$v.finder.$error && !$v.finder.required">The field location is required</span>

              <div class="ml-4 mt-2">
                <input type="checkbox" checked class="form-check-input" />
              </div>
              <div class="ml-4 mt-2">
                <input type="checkbox" class="form-check-input" />
                <label class="form-check-label text-muted" for="exampleCheck1"
                  >Usar otra localidad</label
                >
              </div>
            </div>
          </div>
        </section>
</template>

<script>
const { required } = require('vuelidate/lib/validators')

export default {
    props: ['category'],
    data(){
        return {
            theMark: "",
            marks: {
                lists: "",
                children_node: "",
            },
            models: {
                lists: "",
                children_node: "",
            },
            theModel: "",
            year: "",
            cities: [],
            otherLocation: false,
            finder: "",
        }
    },
    validations: {
        theMark: {
            required
        },
        theModel: {
            required
        },
        year: {
            required
        },
        finder: {
            required
        },
        form: ['theMark', 'theModel', 'year', 'finder']
    },
    async mounted(){
        
    }, 
    watch: {
        category: async function (val) {
            if (this.category && this.category != -1) {
                let res = await fetch(`/api/categories/${this.category.id}`);
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
        validate() {
            this.$v.form.$touch();
            var isValid = !this.$v.form.$invalid
            this.$emit('on-validate', this.$data, isValid)
            return isValid
        },
         async find(search, loading) {
            if (search != "") {
                loading(true);
                this.search(loading, search, this);
            }

            //const searchWeather = await fetch(`/api/weather/findByLocation/${search}`);
            //this.cities = await searchWeather.json()
            },
            search: _.debounce((loading, search, vm) => {
            fetch(`/api/locations/${search}`).then((res) => {
                res.json().then((json) => (vm.cities = json));
                loading(false);
            });
            }, 2000),
    }

}
</script>

<style>

</style>