<template>
  <div id="intro" class="main">
    <Row>
      <i-col span="12">
      <Card>
        <p slot="title">
          <Icon type="pound"></Icon> {{$t("intro.intro.title")}}
        </p>
        <Steps :current="4" direction="vertical">
          <Step :title="$t('intro.intro.custom')" :content="$t('intro.intro.customContent')" icon="wand"></Step>
          <Step :title="$t('intro.intro.convenient')" :content="$t('intro.intro.convenientContent')" icon="star"></Step>
          <Step :title="$t('intro.intro.savable')" :content="$t('intro.intro.savableContent')" icon="ios-box"></Step>
          <Step :title="$t('intro.intro.quick')" :content="$t('intro.intro.quickContent')" icon="flash"></Step>
          <Step :title="$t('intro.intro.attention')" :content="$t('intro.intro.attentionContent')" icon="alert"></Step>
        </Steps>
      </Card>
      <Card>
        <p slot="title">
          <Icon type="android-list"></Icon> {{$t("intro.tutorial.title")}}
        </p>
        <Steps :current="4" direction="vertical">
          <Step :title="$t('intro.tutorial.choose')" icon="heart" :content="$t('intro.tutorial.chooseContent')"></Step>
          <Step :title="$t('intro.tutorial.download')" icon="android-download" :content="$t('intro.tutorial.downloadContent')"></Step>
          <Step :title="$t('intro.tutorial.unzip')" icon="android-archive" :content="$t('intro.tutorial.unzipContent')"></Step>
          <Step :title="$t('intro.tutorial.install')" icon="ios-copy" :content="$t('intro.tutorial.installContent')"></Step>
        </Steps>
      </Card>
      </i-col>
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
    image: url('/static/images/intro_bg.png');
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
