import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '',
    redirect: { name: 'login' },
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('@/views/login/Login.vue'),
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
