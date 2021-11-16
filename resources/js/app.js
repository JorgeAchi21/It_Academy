require('./bootstrap');

// import * as Vue from 'vue';
import Vue from 'vue';
import VueAxios from 'vue-axios';
import Axios from 'axios';
import VueRouter from 'vue-router';

Vue.use(VueAxios, Axios);
Vue.use(VueRouter);

//---Import component
import App from './components/App.vue';

//---Import routes
import { routes } from './routes';

const router = new VueRouter({
    mode: 'history',
    routes: routes
})

const app = new Vue({
    el: '#app',
    router: router,
    render(h) { return h(App) }
})

//createApp(App).mount('#app')
