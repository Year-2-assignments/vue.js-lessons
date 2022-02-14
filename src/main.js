import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'

import Home from './components/Home.vue';
import About from './components/About.vue';


const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
 
  // add the missing routes
];

const router = createRouter({
  "history": createWebHistory(),
  routes
})

const app = createApp(App);
app.use(router);
app.mount('#app');