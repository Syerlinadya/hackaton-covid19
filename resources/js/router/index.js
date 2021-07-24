import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Dashboard from '../components/Dashboard.vue';

export const routes = [
    {
        name: 'dashboard',
        path:'/',
        component: Dashboard,
    }
]

const router = new VueRouter({
    mode : 'history',
    routes
});

export default router;