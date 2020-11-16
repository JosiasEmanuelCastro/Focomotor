<template>
  <div>
    <input
      type="text"
      class="form-control"
      name="location"
      v-model="location"
      placeholder="Buscar..."
      @change="find"
    />

    <div class="pt-4 pl-1">

      <a v-for="city in cities" v-bind:key="city.index"
        :href="`/listado?location=${getCity(city)}`"
        class="d-block text-dark text-decoration-none pb-2"
        >{{ getCity(city) }} ({{ city.total }})</a
      >
      <hr />

    </div>
  </div>
</template>

<script>
export default {
    data(){
        return {
            location: "",
            cities: [],
        }
    },
    methods: {
        async find() {
            if (this.location != "") {
                this.search(this.location, this);
            }

            //const searchWeather = await fetch(`/api/weather/findByLocation/${search}`);
            //this.cities = await searchWeather.json()
            },
            search: _.debounce((search, vm) => {

            
            fetch(`/articles/locations/${escape(search)}`).then((res) => {
                res.json().then((json) => (vm.cities = json));
            });
            }, 2000),
            getCity(city) {
                console.log(city);
                return JSON.parse(city.location).address.city || JSON.parse(city.location).address.town
            }
    },

};
</script>

<style>
</style>