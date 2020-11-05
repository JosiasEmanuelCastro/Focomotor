

import Vue from 'vue';
var _ = require('lodash');

import vSelect  from 'vue-select';

Vue.component('v-select', vSelect)


Vue.component('form-publish', require('./components/WizardFormPublish.vue').default);
Vue.component('form-register', require('./components/RegisterForm.vue').default);
Vue.component('filter-kilometers', require('./components/Filters/Kilometer.vue').default);
Vue.component('filter-prices', require('./components/Filters/Price.vue').default);

/* eslint-disable no-new */
const app = new Vue({
  el: '#app'
})
