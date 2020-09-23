require('./bootstrap');
import router from './router'
import App from './App.vue'

window.Vue = require('vue');


const app = new Vue({
    components: {
        App
    },
    router,
    el: '#app',
});
