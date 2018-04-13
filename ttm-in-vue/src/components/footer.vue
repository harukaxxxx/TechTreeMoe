<template>
    <div class="footer">
    <p>Designed by © 2010<a href="http://makinoworks.com" target="_blank">MakinoWorks</a>｜
      <a class="icon" href="https://analytics.google.com">
        <img src="src/assets/images/vendor/ga.png" height="20px">
      </a>
      <a class="icon" href="http://echarts.baidu.com">
        <img src="src/assets/images/vendor/echarts.png" height="20px">
      </a>
      <!-- <a class="icon" href="https://fontawesome.com">
        <i class="fas fa-font fa-lg"></i>
      </a>
      <a class="icon" href="https://github.com/harukaxxxx/TechTreeMoe">
        <i class="fab fa-github fa-lg"></i>
      </a>｜ -->
      <!-- <i class="fas fa-globe fa-lg"></i> -->
      <!-- <select id="lang" data-am-selected="{dropUp: 1,btnWidth: '100px', btnSize: 'sm',btnStyle: 'link'}">
        <option value="zh-TW">繁體中文</option>
        <option value="zh-CN">简体中文</option>
        <option value="en-US">English</option>
        <option value="ja">日本語</option>
      </select> -->
    </p>
  </div>
</template>
<script>
export default {
  data() {
    return {
      sContent: "This is custom components"
    };
  }
};
</script>
<style lang="scss">
.footer p {
  color: #fff;
  margin: 0;
  padding-top: 5px;
  height: 30px;
  text-align: center;
  background: #34495e;
  a {
    color: #fff;
    border-bottom: 1px dotted;
  }
  .icon {
    border: 0;
  }
  .am-selected-text {
    color: #34495e;
  }
  .am-selected-status {
    color: #fff;
  }
  .am-selected-icon {
    color: #fff;
  }
  .am-btn-link {
    border-color: #34495e;
    background-color: #34495e;
  }
}
</style>
