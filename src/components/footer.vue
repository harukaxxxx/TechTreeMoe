<template>
  <Row class="footer" type="flex" justify="space-between" align="middle">
    <i-col span="6" class="left">
    <a href="http://echarts.baidu.com" target="_blank">
      <img src="/static/images/vendor/echarts.png" height="18px">
    </a>
    <a href="https://analytics.google.com" target="_blank">
      <img src="/static/images/vendor/ga.png" height="20px">
    </a>
    <a href="https://github.com/harukaxxxx/TechTreeMoe" target="_blank">
      <Icon type="social-github" size="18"></Icon>
    </a>
    <a href="https://www.iviewui.com/" target="_blank">
      <img src="/static/images/vendor/iview.png" height="20px"></a>
    </i-col>
    <i-col span="6" class="center">
    <p>Designed by © 2010
      <a href="http://makinoworks.com" target="_blank">MakinoWorks</a>
    </p>
    </i-col>
    <i-col span="6" class="right">
    <p>
      <a href="javascript:void(0)" @click="changeLang('tw')">繁</a>｜
      <a href="javascript:void(0)" @click="changeLang('cn')">简</a>｜
      <a href="javascript:void(0)" @click="changeLang('en')">EN</a>｜
      <a href="javascript:void(0)" @click="changeLang('jp')">あ</a>
    </p>
    </i-col>
  </Row>
</template>
<script>
export default {
  data() {
    return {
      sContent: 'This is custom components'
    }
  },
  methods: {
    changeLang(lang) {
      this.$i18n.locale = lang
    }
  }
}
</script>
<style lang="scss" scoped>
.footer {
  height: 30px;
  color: #fff;
  background: #34495e;
  padding: 0 20px;
  a {
    color: #fff;
  }
  .left img {
    position: relative;
    bottom: -2px;
  }
  .center {
    text-align: center;
  }
  .right {
    text-align: right;
  }
}
</style>
