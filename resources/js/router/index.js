import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/home';
import Post from '../views/post';


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
      }
    ],
});

export default router;