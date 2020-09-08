import Vue from 'vue';
import Router from 'vue-router';
import Home from './views/Home';


Vue.use(Router);

const router = new Router({
    mode: "history",
    linkExactActiveClass: "active",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/brazil",
            name: "brazil",
            // lazy loading
            component: () => import(/*webpackChunkName: "brazil"*/ "./views/Brazil"),
        },
        {
            path: "/panama",
            name: "panama",
            component: () => import(/*webpackChunkName: "panama"*/ "./views/Panama"),
        },
        {
            path: "/hawaii",
            name: "hawaii",
            component: () => import(/*webpackChunkName: "hawaii"*/ "./views/Hawaii"),
        },
        {
            path: "/jamaica",
            name: "jamaica",
            component: () => import(/*webpackChunkName: "jamaica"*/ "./views/Jamaica"),
        },
        {
            path: "/details/:id",
            name: "DestinationDetails",
            component: () => import(/*webpackChunkName: "DestinationDetails"*/ "./views/DestinationDetails")
        }
    ]
});

export default router;