<template>
  <div id="intro" class="main">
    <Row>
      <i-col span="12">
      <Card>
        <p slot="title">
          <svg class="icon" aria-hidden="true">
            <use xlink:href="#icon-bofangyelanmujianjie-"></use>
          </svg>
          {{$t("intro.intro.title")}}
        </p>
        <Timeline>
          <TimelineItem>
            <svg slot="dot" class="icon" aria-hidden="true">
              <use xlink:href="#icon-custom"></use>
            </svg>
            <span class="title">{{$t('intro.intro.custom')}}</span>
            <p class="content">{{$t('intro.intro.customContent')}}</p>
          </TimelineItem>
          <TimelineItem>
            <svg slot="dot" class="icon" aria-hidden="true">
              <use xlink:href="#icon-quick"></use>
            </svg>
            <span class="title">{{$t('intro.intro.convenient')}}</span>
            <p class="content">{{$t('intro.intro.convenientContent')}}</p>
          </TimelineItem>
          <TimelineItem>
            <svg slot="dot" class="icon" aria-hidden="true">
              <use xlink:href="#icon-save"></use>
            </svg>
            <span class="title">{{$t('intro.intro.savable')}}</span>
            <p class="content">{{$t('intro.intro.savableContent')}}</p>
            </TimelineItem>
          <TimelineItem>
            <svg slot="dot" class="icon" aria-hidden="true">
              <use xlink:href="#icon-quick1"></use>
            </svg>
            <span class="title">{{$t('intro.intro.quick')}}</span>
            <p class="content">{{$t('intro.intro.quickContent')}}</p>
          </TimelineItem>
          <TimelineItem>
            <svg slot="dot" class="icon" aria-hidden="true">
              <use xlink:href="#icon-attention"></use>
            </svg>
            <span class="title">{{$t('intro.intro.attention')}}</span>
            <p class="content">{{$t('intro.intro.attentionContent')}}</p>
          </TimelineItem>
        </Timeline>
      </Card>
      <Card>
        <p slot="title">
        <svg class="icon" aria-hidden="true">
          <use xlink:href="#icon-tutor-copy"></use>
        </svg>
        {{$t("intro.tutorial.title")}}
        </p>
        <Timeline>
          <TimelineItem>
            <svg slot="dot" class="icon" aria-hidden="true">
              <use xlink:href="#icon-love"></use>
            </svg>
            <span class="title">{{$t('intro.tutorial.choose')}}</span>
            <p class="content">{{$t('intro.tutorial.chooseContent')}}</p>
          </TimelineItem>
          <TimelineItem>
            <svg slot="dot" class="icon" aria-hidden="true">
              <use xlink:href="#icon-download"></use>
            </svg>
            <span class="title">{{$t('intro.tutorial.download')}}</span>
            <p class="content">{{$t('intro.tutorial.downloadContent')}}</p>
          </TimelineItem>
          <TimelineItem>
            <svg slot="dot" class="icon" aria-hidden="true">
              <use xlink:href="#icon-unarchive"></use>
            </svg>
            <span class="title">{{$t('intro.tutorial.unzip')}}</span>
            <p class="content">{{$t('intro.tutorial.unzipContent')}}</p>
            </TimelineItem>
          <TimelineItem>
            <svg slot="dot" class="icon" aria-hidden="true">
              <use xlink:href="#icon-anzhuangbao"></use>
            </svg>
            <span class="title">{{$t('intro.tutorial.install')}}</span>
            <p class="content">{{$t('intro.tutorial.installContent')}}</p>
          </TimelineItem>
        </Timeline>
      </Card>
      </i-col>
    </Row>
    <p class="bg-source">
      <a target="_blank" :href="backgroundSourceURL">Background Source: 40382972</a>
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
  height: calc(100vh - 94px);
  overflow-y: auto;
  background: {
    image: url('../assets/intro_bg.png');
    // id=40382972
    color: #fff;
    size: cover;
    position: center center;
    repeat: no-repeat;
  }
  .ivu-card {
    margin: 20px;
    background: #ffffffe6;
    .ivu-timeline {
      margin-left: 10px;
      .ivu-timeline-item-tail {
        border: none;
      }
      .ivu-timeline-item-head-blue {
        color: #495060;
        background: transparent;
        .icon {
          width: 24px;
          height: 24px;
        }
      }
      .title {
        font-size: 14px;
        font-weight: bold;
      }
    }
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
