import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import HomeComponent from './components/HomeComponent.vue';
import LoginComponent from './components/LoginComponent.vue';
import { createWebHistory, createRouter } from 'vue-router';

const app = createApp(ExampleComponent);
// app.component('example-component', ExampleComponent);
const route = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeComponent,
        },
        {
            path: "/login",
            component: LoginComponent,
        }
    ]
});
app.use(route);

app.mount('#app');
