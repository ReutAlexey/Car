require('./bootstrap');
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'




window.Vue = require('vue')

// Install BootstrapVue
Vue.use(BootstrapVue)

Vue.component('Search', require('./components/SearchComponent.vue').default);

const app = new Vue({
    el: '#app'
});
