<template>
  <div id="app">
    <Layout>
      <Header :style="{background:navBackground}">
        <app-header />
      </Header>
      <Content>
        <router-view></router-view>
      </Content>
      <Footer>
        <app-footer />
      </Footer>
    </Layout>
  </div>
</template>
<script>
import iconfont from '@/iconfont.js'
import appHeader from '@/components/navbar.vue'
import appFooter from '@/components/footer.vue'

export default {
  name: 'app',
  components: {
    appHeader,
    appFooter,
    iconfont
  },
  computed: {
    navBackground: function() {
      switch (this.$route.name) {
        case 'home':
        case 'charts':
          return '#1e5b94'
        case 'intro':
        case 'custom':
        case 'about':
          return '#fff'
      }
    }
  }
}
</script>
<style>
.icon {
  width: 1em;
  height: 1em;
  vertical-align: -0.15em;
  fill: currentColor;
  overflow: hidden;
}
</style>

<style scoped>
.ivu-layout-header {
  padding: 0;
}
.ivu-layout-footer {
  padding: 0;
}
</style>
