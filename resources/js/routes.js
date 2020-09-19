import Home from './pages/Home.vue';

export default {
  mode: 'history',
  routes: [
    {
      path: '/',
      component: Home,
      name: 'home'
    }
  ]
};
