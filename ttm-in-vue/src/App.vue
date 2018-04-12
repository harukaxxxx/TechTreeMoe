<template>
  <div>
    <el-container>
      <el-main>
        <h1 class="top-title" tkey="tkey_site_title">TechTreeMoe - 戰艦世界科技樹萌化</h1>
        <p tkey="tkey_site_description">結合艦隊收藏、戰艦少女、鋼鐵少女、碧藍航線、最終戰艦、Victory Belles以及同人作品，讓科技樹萌起來吧！</p>
        <button type="button" class="am-btn am-btn-primary" data-am-modal="{target: '#preview'}">效果預覽</button>
      </el-main>
    </el-container>
  </div>
  <!-- <div class="am-modal am-modal-alert" tabindex="-1" id="preview">
    <div class="am-modal-dialog">
      <div class="am-modal-hd" tkey="tkey_preview_button">效果預覽</div>
      <div class="am-modal-bd">
        <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2 am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }">
          <li v-for="nation in nations">
            <div class="am-gallery-item">
              <a :href="'assets/images/preview/'+nation.code+'.jpg'">
                <img :src="'assets/images/preview/'+nation.code+'.jpg'" :alt="nation.local" />
                <h3 class="am-gallery-title" :tkey="'tkey_preview_'+nation.code">{{nation.local}}預覽</h3>
              </a>
            </div>
          </li>
        </ul>
      </div>
      <div class="am-modal-footer">
        <span class="am-modal-btn" tkey="tkey_close">關閉</span>
      </div>
    </div>
  </div> -->
</template>
<style lang="scss">
// $colorBlue: #1e5b94;
// .top {
//   background: center center no-repeat;
//   background-color: $colorBlue;
//   background-image: url(assets/images/hero_bg.png);
//   background-size: contain;
//   color: #fff;
//   text-align: center;
//   padding: 30vh 0;
//   height: calc(100vh - 90px);
//   .top-title {
//     font-size: 200%;
//     border: 2px solid #fff;
//     padding: 20px;
//     display: inline-block;
//   }
// }
</style>
<script>
export default {
  name: "app",
  data() {
    return {
      nations: [
        {
          code: "japan",
          local: "日本"
        },
        {
          code: "usa",
          local: "美國"
        },
        {
          code: "germany",
          local: "德國"
        },
        {
          code: "ussr",
          local: "蘇聯"
        },
        {
          code: "uk",
          local: "英國"
        },
        {
          code: "france",
          local: "法國"
        },
        {
          code: "italia",
          local: "義大利"
        },
        {
          code: "commonwealth",
          local: "聯邦"
        },
        {
          code: "pan_asia",
          local: "泛亞"
        },
        {
          code: "poland",
          local: "波蘭"
        },
        {
          code: "arp",
          local: "蒼藍鋼鐵戰艦"
        },
        {
          code: "haifuri",
          local: "高校艦隊"
        }
      ]
    };
  }
};
</script>
