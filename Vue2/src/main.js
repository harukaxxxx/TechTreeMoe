import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import i18n from './i18n'
import iView from 'iview'
import 'iview/dist/styles/iview.css'
Vue.use(iView)

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

Vue.config.productionTip = false

new Vue({
  router,
  store,
  i18n,
  render: h => h(App)
}).$mount('#app')
