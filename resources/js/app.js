

import Vue from 'vue';
import axios from 'axios'

Vue.prototype.$http = axios
var _ = require('lodash');

import vSelect  from 'vue-select';

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

Vue.component('v-select', vSelect)


Vue.component('form-publish', require('./components/WizardFormPublish.vue').default);
Vue.component('form-edit-user', require('./components/Forms/EditUser.vue').default);
Vue.component('form-register', require('./components/RegisterForm.vue').default);
Vue.component('finder-cities', require('./components/FinderCities.vue').default);
Vue.component('filter-kilometers', require('./components/Filters/Kilometer.vue').default);
Vue.component('filter-prices', require('./components/Filters/Price.vue').default);

/* eslint-disable no-new */
const app = new Vue({
  el: '#app'
})
