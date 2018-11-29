import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/home';


Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
      {
        name: 'home',
        path: '/',
        component: Home,
      },
    ],
});

export default router;