import Vue from 'vue';
import routes from './routes';
import VueRouter from 'vue-router';
import BootstrapVue from 'bootstrap-vue'
import MenuComponent from './components/MenuComponent.vue';

Vue.use(VueRouter);
Vue.use(BootstrapVue);

let app = new Vue({
  el: '#app',
  components: {
    MenuComponent
  },

  router: new VueRouter(routes)
});

