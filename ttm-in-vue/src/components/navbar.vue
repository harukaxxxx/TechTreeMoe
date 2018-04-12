<template>
  <header>
    <div class="am-container">
      <h1 class="am-topbar-brand">
        <a href="#/">TechTreeMoe</a>
      </h1>
      <div class="am-collapse am-topbar-collapse" id="collapse-head">
        <ul class="am-nav am-nav-pills am-topbar-nav">
          <li>
            <a href="#/intro">介紹與教學</a>
          </li>
          <li>
            <a href="#/custom">客製化</a>
          </li>
          <li>
            <a href="#/about">更新紀錄與詳細資訊</a>
          </li>
          <li>
            <a href="#/charts">統計數據與萌化進度</a>
          </li>
        </ul>
        <div class="am-topbar-right">
          <button id="submit" class="am-btn am-btn-primary am-topbar-btn am-btn-sm" onclick="submit();" data-am-loading="{spinner: 'circle-o-notch', loadingText: '提交中...'}">
            <span class="fas fa-cloud-download-alt"></span> 下載
          </button>
        </div>
      </div>
    </div>
  </header>
</template>
<script>
export default {
  name: "navbar",
  data() {
    return {
      msg: "Welcome to Your navbar"
    };
  }
};
</script>
<style lang="scss">
$colorDeepBlue: #34495e;
footer p {
  color: #fff;
  margin: 0;
  padding: 5.5px 0;
  text-align: center;
  background: $colorDeepBlue;
  a {
    color: #fff;
    border-bottom: 1px dotted;
  }
  .icon {
    border: 0;
  }
  .am-selected-text {
    color: $colorDeepBlue;
  }
  .am-selected-status {
    color: #fff;
  }
  .am-selected-icon {
    color: #fff;
  }
  .am-btn-link {
    border-color: $colorDeepBlue;
    background-color: $colorDeepBlue;
  }
}
</style>
