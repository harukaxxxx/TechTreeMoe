//引入并安装vue-router插件
import Vue from 'vue';
import VueRouter from 'vue-router';
import ElementUI from 'element-ui';
// import 'element-ui/lib/theme-chalk/index.css';
Vue.use(VueRouter);
Vue.use(ElementUI);

//引入index.vue和hello.vue组件
import App from './App.vue';
import navbar from './components/navbar.vue';
import intro from './components/intro.vue';
import custom from './components/custom.vue';
import about from './components/about.vue';
import charts from './components/charts.vue';

//定义路由
const routes = [{
    path: '/',
    component: App
  },
  {
    path: '/intro',
    component: intro
  },
  {
    path: '/custom',
    component: custom
  },
  {
    path: '/about',
    component: about
  },
  {
    path: '/charts',
    component: charts
  }
]
//创建 router 实例，然后传 routes 配置
const router = new VueRouter({
  routes
});
//创建和挂载根实例。通过 router 配置参数注入路由，从而让整个应用都有路由功能
new Vue({
  el: "#app",
  router
});
