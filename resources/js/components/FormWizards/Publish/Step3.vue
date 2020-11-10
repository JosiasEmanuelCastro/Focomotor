<template>
  <section class="border">
         
          <div class="p-4">
            <div>
             
                <label class="h4">Condición</label>
                <select
                  class="custom-select my-3 mr-sm-2"
                  name="condition"
                  v-model="condition"
                  placeholder="Condicion"
                >
                  <option value="" disabled selected>Condición</option>
                  <option value="Nuevo">Nuevo</option>
                  <option value="Usado">Usado</option>
                </select>

                <span class="help-block" v-if="$v.condition.$error && !$v.condition.required">The field condition is required</span>
                
            </div>
            <hr />

            <div>
              
                <label class="h4">Combustible</label>
                <select
                  class="custom-select my-3 mr-sm-2"
                  name="fuel"
                  v-model="fuel"
                  placeholder="Combustible"
                >
                  <option value="" disabled selected>Combustible</option>
                  <option value="Gasoil">Gasoil</option>
                  <option value="Nafta">Nafta</option>
                  <option value="Electrico">Electrico</option>
                </select>

                <span class="help-block" v-if="$v.fuel.$error && !$v.fuel.required">The field fuel is required</span>
                
             
            </div>
            <hr />

            <div>
              
                <label class="h4">Kilometros</label>
                <input
                  type="number"
                  class="form-control my3 mr-sm-2"
                  name="kilometers"
                  v-model="kilometers"
                />

                <span class="help-block" v-if="$v.kilometers.$error && !$v.kilometers.required">The field kilometers is required</span>
                
            </div>

            <hr />

            <div>
             
                <label class="h4">Precio</label>
                <input
                  type="number"
                  class="form-control my3 mr-sm-2"
                  name="price"
                  v-model="price"
                />

                <span class="help-block" v-if="$v.price.$error && !$v.price.required">The field price is required</span>
               
             
            </div>

            
          </div>
        </section>
</template>

<script>
const { required } = require('vuelidate/lib/validators')

export default {
    data(){
        return {
            condition: "",
            fuel: "",
            kilometers: "",
            price: ""
        }
    },
    validations: {
        condition: {
            required
        },
        fuel: {
            required
        },
        kilometers: {
            required
        },
        price: {
            required
        },
        form: ['condition', 'fuel', 'kilometers', 'price']
    },
    methods: {
        validate() {
            this.$v.form.$touch();
            var isValid = !this.$v.form.$invalid
            this.$emit('on-validate', this.$data, isValid)
            return isValid
        },
    }
}
</script>

<style>

</style>