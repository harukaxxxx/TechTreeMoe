<template>
  <i-menu mode="horizontal" theme="light" :active-name="activeName">
    <router-link to="/" replace>
      <menu-item name="top">
      <Icon type="ios-paper"></Icon>
      TechTreeMoe
      </menu-item>
    </router-link>
    <router-link to="intro" replace>
      <menu-item name="intro">
      <Icon type="ios-people"></Icon>
      {{$t("navbar.intro")}}
      </menu-item>
    </router-link>
    <router-link to="custom" replace>
      <menu-item name="custom">
      <Icon type="ios-people"></Icon>
      {{$t("navbar.custom")}}
      </menu-item>
    </router-link>
    <router-link to="about" replace>
      <menu-item name="about">
      <Icon type="settings"></Icon>
      {{$t("navbar.about")}}
      </menu-item>
    </router-link>
    <router-link to="charts" replace>
      <menu-item name="charts">
      <Icon type="settings"></Icon>
      {{$t("navbar.charts")}}
      </menu-item>
    </router-link>
    <Button v-if="this.$route.path === '/custom'" class="downloadButton" type="primary" shape="circle" icon="android-download" @click="clickEvent">{{$t("navbar.download")}}</Button>
  </i-menu>
</template>
<script>
export default {
  data() {
    return {
      activeName: 'top'
    }
  },
  beforeMount() {
    let routePath = this.$route.path.split('/')[1]
    if (routePath === '') {
      this.activeName = 'top'
    } else {
      this.activeName = routePath
    }
  },
  methods: {
    clickEvent() {
      this.$ga.event({
        eventCategory: 'clickCount',
        eventAction: 'click',
        eventLabel: 'downloadZIP'
      })
      this.$bus.emit('downloadFile')
    }
  }
}
</script>
<style scoped>
.downloadButton {
  float: right;
  margin-top: 15px;
  margin-right: 20px;
}
</style>
