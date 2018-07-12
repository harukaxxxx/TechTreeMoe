<template>
  <i-menu mode="horizontal" theme="light" :active-name="activeName">
    <router-link to="/" replace>
      <menu-item name="top">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon--rudder"></use>
        </svg>
      TechTreeMoe
      </menu-item>
    </router-link>
    <router-link to="intro" replace>
      <menu-item name="intro">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-tutorial"></use>
        </svg>
      {{$t("navbar.intro")}}
      </menu-item>
    </router-link>
    <router-link to="custom" replace>
      <menu-item name="custom">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-customzidingyi"></use>
        </svg>
      {{$t("navbar.custom")}}
      </menu-item>
    </router-link>
    <router-link to="about" replace>
      <menu-item name="about">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-about"></use>
        </svg>
      {{$t("navbar.about")}}
      </menu-item>
    </router-link>
    <router-link to="charts" replace>
      <menu-item name="charts">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-concentricpiechart"></use>
        </svg>
      {{$t("navbar.charts")}}
      </menu-item>
    </router-link>
    <Button v-if="this.$route.path === '/custom'" class="downloadButton" type="primary" shape="circle" icon="android-download" @click="clickEvent">{{$t("navbar.download")}}</Button>
  </i-menu>
</template>
<script>
import iconfont from '../main.js'
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
.icon {
  width: 1em;
  height: 1em;
  vertical-align: -0.15em;
  fill: currentColor;
  overflow: hidden;
}
.downloadButton {
  float: right;
  margin-top: 15px;
  margin-right: 20px;
}
</style>
