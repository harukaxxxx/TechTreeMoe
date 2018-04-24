<template>
  <div id="intro" class="main">
    <Row>
      <Col span="12">
      <Card>
        <p slot="title">
          <Icon type="pound"></Icon> 介紹</h3>
        </p>
        <Steps :current="4" direction="vertical">
          <Step title="客製化" content="艦娘圖標百百種，挑選中意的圖標來萌化科技樹" icon="wand"></Step>
          <Step title="方便" content="利用可更替按鈕可快速尋找可以替換的項目" icon="flash"></Step>
          <Step title="保存" content="下載時將儲存紀錄，亦可手動點選儲存/載入按鈕" icon="ios-box"></Step>
          <Step title="注意" content="此模組不包含背景國旗及艦型小圖標" icon="alert"></Step>
        </Steps>
      </Card>
      <Card>
        <p slot="title">
          <Icon type="android-list"></Icon> 教學</h3>
        </p>
        <Steps :current="4" direction="vertical">
          <Step title="挑選" icon="heart" content="艦船圖片下的下拉選單可選取並預覽想使用的圖標"></Step>
          <Step title="下載" icon="android-download" content="挑選完畢後再點擊右上的下載按鈕進行下載"></Step>
          <Step title="解壓" icon="android-archive" content="耐心等待下載完成並解壓縮"></Step>
          <Step title="安裝" icon="ios-copy" content="將gui資料夾複製到res_mods/__版本號__/裡即可"></Step>
        </Steps>
      </Card>
      </Col>
    </Row>
    <p class="bg-source">
      <a :href="backgroundSourceURL">Background Source: 40382972</a>
    </p>
  </div>
</template>
<script>
export default {
  data() {
    return {
      backgroundSourceURL: 'https://www.pixiv.net/member_illust.php?mode=medium&illust_id=40382972'
    }
  }
}
</script>
<style lang="scss">
#intro {
  background: {
    image: url('../assets/images/intro_bg.png');
    // id=40382972
    color: #fff;
    size: cover;
    position: center center;
    repeat: no-repeat;
  }
  .ivu-card {
    margin: 20px;
    background: #ffffffe6;
  }
  .ivu-steps-icon {
    color: #495060;
  }
  .ivu-steps-title,
  .ivu-steps-content {
    color: #1c2438;
    background: transparent;
  }
  .ivu-steps-head {
    background: transparent;
  }
  .ivu-steps-tail i:after {
    background: #495060;
  }
  .bg-source {
    position: fixed;
    right: 10px;
    bottom: 30px;
    a {
      color: #fff;
      text-shadow: 0px 0px 3px #000;
    }
  }
}
</style>
