import Vue from 'vue';
import Router from 'vue-router';
import Home from './views/Home';
import store from './store';


Vue.use(Router);

const router = new Router({
    mode: "history",
    linkExactActiveClass: "active",
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        } else {
            const position = {};

            if (to.hash) {
                position.selector = to.hash;
                if (to.hash === "#experience") {
                    position.offset = { y: 150 }
                }
                if (document.querySelector(to.hash)) {
                    return position;
                }
                return false;
            }
            // 

        }
    },
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
            props: true,
        },
        {
            // parent URL/route
            path: "/details/:slug",
            name: "DestinationDetails",
            props: true,
            component: () => import(/*webpackChunkName: "DestinationDetails"*/ "./views/DestinationDetails"),

            // children routes /details/:slug/:experienceSlug [Nested routes]
            children: [
                {
                    path: ":experienceSlug",
                    name: "experienceDetails",
                    props: true,
                    component: () => import(/*webpackChunkName: "ExperienceDetails"*/ "./views/ExperienceDetails"),
                }
            ],
            beforeEnter: (to, from, next) => {
                // var to = https://laravel-travel.test/details/brazilfdf

                const exist = store.destinations.find(
                    destination => destination.slug === to.params.slug);
                if (exist) {
                    next();
                } else {
                    next({ name: "notFound" })
                }
            }
        },
        {
            path: "/user",
            name: "user",
            component: () => import(/*webpackChunkName: "User"*/ "./views/User"),
            meta: { requireAuth: true }
        },
        {
            path: "/invoices",
            name: "invoices",
            component: () => import(/*webpackChunkName: "Invoices"*/ "./views/Invoices"),
            meta: { requireAuth: true }
        },
        {
            path: "/login",
            name: "login",
            component: () => import(/*webpackChunkName: "Login"*/ "./views/Login"),

        },
        {
            path: "/404",
            alias: "*",
            name: "notFound",
            component: () => import(/*webpackChunkName: "NotFound"*/ "./views/NotFound"),
        }
    ]
});

// to - destination route (url) type: obj
// from - source route(previous route/url) type: obj
// next() - function  type: function()
router.beforeEach((to, from, next) => {
    // when we open /user page, if user in our store exist than we open it, if not we redirect to login page
    // if (to.meta.requireAuth) {
    if (to.matched.some(record => record.meta.requireAuth)) {
        if (!store.user) { // if user is null/not set this will give us "true"

            //Query params
            // 1) User wants to access /invoices
            // 2) User is not logged in, and redirected to /login
            // 3) On the moment when he is redirected to /login page we add "redirect" query parametar with the value of page he was looking for 
            next({
                name: "login",
                query: { redirect: to.fullPath } // /login?redirect=
            });
        } else {
            next();
        }
    } else {
        next();
    }
})

export default router;