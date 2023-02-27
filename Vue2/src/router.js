import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'
import Intro from './views/Intro.vue'
import Preview from './views/Preview.vue'
import Custom from './views/Custom.vue'
import About from './views/About.vue'
import Charts from './views/Charts.vue'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/intro',
      name: 'intro',
      component: Intro
    },
    {
      path: '/preview',
      name: 'preview',
      component: Preview
    },
    {
      path: '/custom',
      name: 'custom',
      component: Custom
    },
    {
      path: '/about',
      name: 'about',
      component: About
    },
    {
      path: '/charts',
      name: 'charts',
      component: Charts
    },
    {
      path: '*',
      name: 'home',
      component: Home
    }
  ]
})
