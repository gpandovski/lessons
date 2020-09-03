
require('./bootstrap');
import VueRouter from 'vue-router'
import routes from './routes-practice'
// import router from './router'

window.Vue = require('vue');


Vue.use(VueRouter)


const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
