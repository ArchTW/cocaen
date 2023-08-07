import { createRouter, createWebHashHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import AboutView from '../views/AboutView.vue';
import ContactView from '../views/ContactView.vue';
import ListArticleView from '../views/ListArticleView.vue';
import ListWorksView from '../views/ListWorksView.vue';

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView,
    meta: {
      title: 'cocaen',
    },
  },
  {
    path: '/about',
    name: 'about',
    component: AboutView,
    meta: {
      title: 'About',
    },
  },
  {
    path: '/contact',
    name: 'contact',
    component: ContactView,
    meta: {
      title: 'Contact',
    },
  },
  {
    path: '/listArticles',
    name: 'listArticles',
    component: ListArticleView,
    meta: {
      title: 'ListArticles',
    },
  },
  {
    path: '/listWorks',
    name: 'listWorks',
    component: ListWorksView,
    meta: {
      title: 'ListWorks',
    },
  },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

router.beforeEach((to, from, next) => {
  document.title = to.meta.title;
  next();
});

export default router;
