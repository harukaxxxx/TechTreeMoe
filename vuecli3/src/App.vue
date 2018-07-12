<template>
  <div id="app">
    <Layout>
      <Header :style="{background:'#1e5b94'}">
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
import appHeader from '@/components/navbar.vue'
import appFooter from '@/components/footer.vue'

export default {
  name: 'app',
  components: {
    appHeader,
    appFooter
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
body {
  /* overflow: hidden; */
}
/* 
.ivu-layout-content {
  height: calc(100vh - 90px);
  overflow-y: auto;
} */
.ivu-layout-header {
  padding: 0;
}
.ivu-layout-footer {
  padding: 0;
}
</style>
