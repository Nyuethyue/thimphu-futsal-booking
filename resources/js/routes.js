import { createRouter, createWebHistory } from "vue-router";
import test from './components/frontend/Test.vue';

const routes = [
    {
        path: '/test',
        component: test
    },
];

export default createRouter({
    history: createWebHistory(),
    routes
})