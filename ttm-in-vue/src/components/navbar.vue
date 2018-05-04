<template>
  <Menu mode="horizontal" theme="light" :active-name="activeName">
    <router-link to="/" replace>
      <MenuItem name="top">
      <Icon type="ios-paper"></Icon>
      TechTreeMoe
      </MenuItem>
    </router-link>
    <router-link to="intro" replace>
      <MenuItem name="intro">
      <Icon type="ios-people"></Icon>
      介紹與教學
      </MenuItem>
    </router-link>
    <router-link to="custom" replace>
      <MenuItem name="custom">
      <Icon type="ios-people"></Icon>
      客製化
      </MenuItem>
    </router-link>
    <router-link to="about" replace>
      <MenuItem name="about">
      <Icon type="settings"></Icon>
      更新紀錄與詳細資訊
      </MenuItem>
    </router-link>
    <router-link to="charts" replace>
      <MenuItem name="charts">
      <Icon type="settings"></Icon>
      統計數據與萌化進度
      </MenuItem>
    </router-link>
    <Button v-if="this.$route.path === '/custom'" class="downloadButton" type="primary" shape="circle" icon="android-download" @click="clickEvent">下載</Button>
  </Menu>
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


