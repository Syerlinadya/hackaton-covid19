import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Dashboard from '../components/Dashboard.vue';
import Vaksin from '../components/Vaksin.vue';

// rumah sakit
import IndexRumahsakit from '../components/rumahsakit/Index.vue';
import EditRumahsakit from '../components/rumahsakit/Edit.vue';
import DetailRumahsakit from '../components/rumahsakit/Detail.vue';
import TambahRumahsakit from '../components/rumahsakit/Tambah.vue';


export const routes = [
    {
        name: 'beranda',
        path:'/',
        component: Dashboard,
    },{
        name: 'vaksin',
        path:'/vaksin',
        component: Vaksin,
    },
    // rumah sakit
    {
        name: 'rumahsakit',
        path:'/rumahsakit',
        component: IndexRumahsakit,
    },
    {
        name: 'tambahrumahsakit',
        path:'/rumahsakit/tambah',
        component: TambahRumahsakit,
    },
    {
        name : 'editrumahsakit',
        path : '/rumahsakit/edit/:id',
        component : EditRumahsakit
    },
    {
        name : 'detailrumahsakit',
        path : '/rumahsakit/detail/:id',
        component : DetailRumahsakit
    },
]

const router = new VueRouter({
    mode : 'history',
    routes
});

export default router;