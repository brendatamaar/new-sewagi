import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '',
    redirect: { name: 'home' },
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('@/views/login/Login.vue'),
  },
  {
    path: '/home',
    name: 'home',
    component: () => import('@/views/Home.vue'),
  },
  {
    path: '/detail',
    name: 'detail',
    component: () => import('@/views/DetailProperty.vue'),
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
