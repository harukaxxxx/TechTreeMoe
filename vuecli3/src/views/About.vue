<template>
  <div id="about" class="main">
    <Row type="flex" justify="space-around">
      <i-col class="update" span="12" offset="12">
      <Card>
        <p slot="title">
          <svg class="icon" aria-hidden="true">
            <use xlink:href="#icon-github"></use>
          </svg>
          {{$t('about.contact')}}
        </p>
        <p v-html="$t('about.contactContent')"></p>
      </Card>
      <Card>
        <p slot="title">
          <svg class="icon" aria-hidden="true">
            <use xlink:href="#icon-log"></use>
          </svg>
          {{$t('about.update')}}
        </p>
        <Timeline>
          <TimelineItem v-for="update in updates" :key="update.index" :name="update.index" :color="updateLevel(update.level)">
            <p class="time">{{update.time}}</p>
            <p class="content" v-for="event in update.event" :key="event.index">{{event}}</p>
          </TimelineItem>
        </Timeline>
      </Card>
      </i-col>
    </Row>
    <p class="bg-source">
      <a target="_blank" :href="backgroundSourceURL">Background Source: 51816460</a>
    </p>
  </div>
</template>
<script>
import iconfont from '../main.js'
import update from '../assets/update.json'

export default {
  name: 'about',
  data() {
    return {
      updates: update,
      backgroundSourceURL: 'https://www.pixiv.net/member_illust.php?mode=medium&illust_id=51816460'
    }
  },
  methods: {
    updateLevel(level) {
      switch (level) {
        case 'IMPORTANT':
          return 'red'
          break
        case 'FIX':
          return 'orange'
          break
        case 'UPDATE':
          return 'green'
          break
        case 'NEW':
          return 'blue'
          break
        default:
          return 'black'
          break
      }
    }
  }
}
</script>
<style lang="scss">
#about {
  height: calc(100vh - 94px);
  overflow-y: auto;
  background: {
    image: url('../assets/about_bg.jpg');
    color: #fff;
    size: contain;
    position: left bottom;
    repeat: no-repeat;
  }
  .ivu-card {
    margin: 20px;
    background: #ffffffe6;
  }
  .update ul {
    .time {
      font-size: 14px;
      font-weight: bold;
    }
    .content {
      padding-left: 5px;
    }
  }
  .bg-source {
    position: fixed;
    left: 85px;
    bottom: 30px;
    a {
      color: #fff;
      text-shadow: 0px 0px 3px #000;
    }
  }
}
</style>
