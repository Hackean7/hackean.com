
require('./bootstrap');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';

import Vue from 'vue'
import Buefy from 'buefy'
import 'buefy/dist/buefy.css'

Vue.use(Buefy)

Vue.component('slug-widget', require('./components/slugWidget.vue'));
Vue.component('vue-multiselect', window.VueMultiselect.default)

require('./manage')