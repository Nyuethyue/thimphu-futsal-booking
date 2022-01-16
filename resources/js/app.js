require('./bootstrap');

import { createApp } from 'vue';
// import router from './routes';

import Home from './components/frontend/Home.vue';

createApp({
    components: {
        Home
    }
}).mount('#app')