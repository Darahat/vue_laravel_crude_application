import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Form from './pages/Form.vue';
import Details from './pages/Details.vue';
import Edit from './pages/EditForm.vue';
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/form',
            name: 'form',
            component: Form
        },
        {
            path: '/details',
            name: 'details',
            component: Details
        },
        {
            path: '/edit',
            name: 'edit',
            component: Edit
        },
         
    ]
});

export default router;