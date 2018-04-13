<template>
  <div class="top main">
    <h1 class="top-title">TechTreeMoe - 戰艦世界科技樹萌化</h1>
    <p>結合艦隊收藏、戰艦少女、鋼鐵少女、碧藍航線、最終戰艦、Victory Belles以及同人作品，讓科技樹萌起來吧！</p>
    <el-button round plain @click="dialogVisible = true">效果預覽</el-button>
    <el-dialog
      :title=dialogTitle
      :visible.sync="dialogVisible"
      width="100%"
      >
      <el-carousel :interval="50000" arrow="always" @change="changeCarousel">
        <el-carousel-item v-for="nation in nations" :key="nation.index" :style="'background-image:url(src/assets/images/preview/'+nation.code+'.jpg)'">
          <!-- <img class="preview-image" :src="'src/assets/images/preview/'+nation.code+'.jpg'" :alt="nation.local+'預覽'" :width="imgWidth" :height="imgHeight"/> -->
        </el-carousel-item>
      </el-carousel>
    </el-dialog>
  </div>
</template>
<script>
export default {
  name: "app",
  beforeMount() {
    // let heightRate = window.innerHeight / 1080;
    // let widthRate = window.innerWidth / 1920;
    // if (widthRate > heightRate) {
    //   var imgHeight = window.innerHeight;
    // } else {
    //   imgWidth = window.innerWidth;
    // }
  },
  data() {
    return {
      dialogTitle: "效果預覽",
      dialogVisible: false,
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
  },
  methods: {
    changeCarousel(id) {
      this.dialogTitle = this.nations[id].local + "預覽";
    }
  }
};
</script>
<style lang="scss">
$colorBlue: #1e5b94;
.top {
  background: center center no-repeat;
  background-color: $colorBlue;
  background-image: url("assets/images/hero_bg.png");
  background-size: contain;
  color: #fff;
  text-align: center;
  .top-title {
    margin-top: calc(30vh - 40px);
    font-size: 200%;
    border: 2px solid #fff;
    padding: 20px;
    display: inline-block;
  }
  .el-dialog {
    height: 100%;
    margin: 0 !important;
    background-color: #00000099;
    .el-dialog__header {
      padding: 0;
      height: 35px;
      .el-dialog__title {
        line-height: 35px;
        color: #fff;
      }
      .el-dialog__headerbtn {
        top: 5px;
        .el-dialog__close {
          color: #fff;
        }
      }
    }
    .el-dialog__body {
      padding: 0;
      .el-carousel__container {
        height: calc(100vh - 35px);
        .el-carousel__item {
          background-repeat: no-repeat;
          background-position: center center;
          background-size: contain;
        }
      }
    }
  }
}
</style>

