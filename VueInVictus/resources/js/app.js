/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import App from './views/App'
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueScrollTo from 'vue-scrollto'

import VueMaterial from 'vue-material'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import "../../public/assets/sass/style.scss";
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import "../../public/assets/sass/custom.css";


import {router} from './router/router';

Vue.use(VueAxios, axios)
Vue.use(VueMaterial)
// Install BootstrapVue
Vue.use(BootstrapVue)

// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
Vue.use(VueScrollTo)

// Install BootstrapVue
// Optionally install the BootstrapVue icon components plugin
Vue.config.productionTip = false

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
