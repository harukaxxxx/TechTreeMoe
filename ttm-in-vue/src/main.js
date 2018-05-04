import Vue from 'vue'

/*
* vue-router
*/
import VueRouter from 'vue-router'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: App
  },
  {
    path: '/intro',
    component: intro
  },
  {
    path: '/preview',
    component: preview
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

const router = new VueRouter({
  routes
})

/*
* iview
*/
import iView from 'iview'
import 'iview/dist/styles/iview.css'
import '../src/assets/style/index.less'
Vue.use(iView)

// page loading bar
router.beforeEach((to, from, next) => {
  iView.LoadingBar.start()
  next()
})
router.afterEach(route => {
  iView.LoadingBar.finish()
})

/*
* google analytics
*/
const isProd = process.env.NODE_ENV === 'production'
import VueAnalytics from 'vue-analytics'
Vue.use(VueAnalytics, {
  id: 'UA-42562282-2',
  router,
  debug: !isProd,
  sendHitTask: isProd,
  autoTracking: {
    page: isProd
  }
})

/*
* vue bus
*/
import VueBus from 'vue-bus'
Vue.use(VueBus)

/*
* vue-localforage
*/
import VueLocalForage from 'vue-localforage'
Vue.use(VueLocalForage)

/*
* i18n
*/
import VueI18n from 'vue-i18n'
Vue.use(VueI18n)

//i18n setting
import en from './lang/en.json'
import tw from './lang/tw.json'
import cn from './lang/cn.json'
import jp from './lang/jp.json'

const locales = {
  en: en,
  tw: tw,
  jp: jp,
  cn: cn
}

const i18n = new VueI18n({
  locale: 'tw',
  messages: locales
})

/*
* echarts
*/
import VeLine from 'v-charts/lib/line'
import 'echarts/lib/component/dataZoom'
import 'echarts/lib/component/visualMap'
Vue.component(VeLine.name, VeLine)

/*
* axios
*/
import axios from 'axios'
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded'
window.axios = axios

/*
* pages
*/
import App from './App.vue'
import intro from './pages/intro.vue'
import custom from './pages/custom.vue'
import about from './pages/about.vue'
import charts from './pages/charts.vue'

/*
* components
*/
import appHeader from './components/navbar.vue'
import preview from './components/preview.vue'
import appFooter from './components/footer.vue'

/*
* styles
*/
import './assets/style/global.scss'

/*
* new vue
*/
new Vue({
  el: '#app',
  router,
  i18n,
  components: {
    appHeader,
    appFooter
  }
})
