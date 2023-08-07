import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { fas } from '@fortawesome/free-solid-svg-icons';
import { far } from '@fortawesome/free-regular-svg-icons';
import { fab } from '@fortawesome/free-brands-svg-icons';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import i18n from './i18n';

library.add(fas, far, fab);

createApp(App).use(i18n).use(router).component('font-awesome-icon', FontAwesomeIcon)
  .mount('#app');