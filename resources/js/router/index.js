import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/home';
import Post from '../views/post';
import Login from '../views/login'


Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
      {
        name: 'home',
        path: '/',
        component: Home,
      },

      {
        name: 'post',
        path: '/post/:id',
        component: Post,
      },

      {
        name: 'login',
        path: '/login',
        component: Login,
      }
    ],
});

export default router;