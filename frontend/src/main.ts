import { VueQueryPlugin, type VueQueryPluginOptions } from '@tanstack/vue-query';
import { createPinia } from 'pinia';
import { createApp } from 'vue';

import '@/assets/styles/main.css';
import App from './App.vue';
import router from './router';

import ElementPlus from 'element-plus';
import 'element-plus/dist/index.css';

import Aura from '@primevue/themes/aura';
import 'primeicons/primeicons.css';
import PrimeVue from 'primevue/config';

import { dom, library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons';
import { far } from '@fortawesome/free-regular-svg-icons';
library.add(fas, far, fab)
dom.watch();

const vueQueryPluginOptions: VueQueryPluginOptions = {
  queryClientConfig: {
    defaultOptions: {
      queries: {
        refetchOnWindowFocus: false,
        retryOnMount: false,
        retry: false
      }
    }
  }
};

const app = createApp(App);
app.use(createPinia());
app.use(router);
app.use(VueQueryPlugin, vueQueryPluginOptions);
app.use(ElementPlus);
app.use(PrimeVue, {
  theme: {
    preset: Aura
  }
});
app.component("font-awesome-icon", FontAwesomeIcon)
app.mount('#app');
