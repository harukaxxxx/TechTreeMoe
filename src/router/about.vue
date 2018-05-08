<template>
  <div id="about" class="main">
    <Row type="flex" justify="space-around">
      <!-- <Card>
        <p slot="title">
          <Icon type="ios-film-outline"></Icon>特別感謝
        </p>
        <i-collapse v-model="value2" accordion>
          <Panel name="1">
            立繪提供
            <p slot="content">
              <a href="https://home.gamer.com.tw/homeindex.php?owner=kakushi03004">紙龜萌萌雪</a>
            </p>
          </Panel>
        </i-collapse>
        <div>
          <ul>
            <li>
              <Icon type="ribbon-b"></Icon>【
              <a href="https://home.gamer.com.tw/homeindex.php?owner=kakushi03004">紙龜萌萌雪</a>】- 碧藍航線立繪提</li>
            <li>
              <Icon type="ribbon-b"></Icon>【
              <a href="http://blog.sina.com.cn/u/3027377595">bluekiller</a>】- 碧藍航線立繪提供</li>
            <li>
              <Icon type="ribbon-b"></Icon>【
              <a href="https://home.gamer.com.tw/homeindex.php?owner=kkkkking12">阿爽</a>】- 鋼鐵少女立繪提供</li>
            <li>
              <Icon type="ribbon-b"></Icon>【
              <a href="https://home.gamer.com.tw/homeindex.php?owner=ae033179">Adam Richter</a>】- 鋼鐵少女立繪提供</li>
            <li>
              <Icon type="ribbon-b"></Icon>【
              <a href="https://home.gamer.com.tw/homeindex.php?owner=roderichlind">Blomkavist</a>】- 新船資訊提供</li>
            <li>
              <Icon type="ribbon-b"></Icon>【
              <a href="http://srarithmetic.com/">Nacht</a>】- 更新紀錄與詳細資訊背景圖提供
              <a href="https://www.pixiv.net/member_illust.php?mode=medium&illust_id=51816460">
                <i class="am-icon-external-link"></i>
              </a>
            </li>
            <li>
              <Icon type="ribbon-a"></Icon>【
              <a href="https://victorybelles.tumblr.com/">Victory Belles</a>】- Victory Belles立繪提供</li>
            <li>
              <Icon type="ribbon-a"></Icon>【
              <a href="http://fleet.diablohu.com/">是誰呼叫艦隊</a>】- 艦隊收藏立繪提供</li>
            <li>
              <Icon type="ribbon-a"></Icon>【
              <a href="https://www.zjsnrwiki.com/wiki">艦R百科</a>】- 戰艦少女立繪提供</li>
          </ul>
        </div>
      </Card> -->

      <i-col class="update" span="12" offset="12">
      <Card>
        <p slot="title">
          <Icon type="social-github"></Icon> {{$t('about.contact')}}
        </p>
        <p v-html="$t('about.contactContent')"></p>
      </Card>
      <Card>
        <p slot="title">
          <Icon type="ios-list"></Icon> {{$t('about.update')}}
        </p>
        <Timeline :style="{ height:logHeight + 'px' }">
          <TimelineItem v-for="update in updates" :key="update.index" :name="update.index" :color="updateLevel(update.level)">
            <p class="time">{{update.time}}</p>
            <p class="content" v-for="event in update.event" :key="event.index">{{event}}</p>
          </TimelineItem>
        </Timeline>
      </Card>
      </i-col>
    </Row>
  </div>
</template>
<script>
export default {
  name: 'about',
  data() {
    return {
      updates: Array,
      logHeight: Number
    }
  },
  beforeMount() {
    this.updateData(this)
  },
  mounted() {
    let headerHeight = document.querySelector('header').offsetHeight
    let footerHeight = document.querySelector('footer').offsetHeight
    let contactHeight = document.querySelector('.update div:nth-child(1)').offsetHeight + 40
    let updateTitleHeight = document.querySelector('.update div:nth-child(2) div').offsetHeight + 60
    this.logHeight = window.innerHeight - (headerHeight + footerHeight + contactHeight + updateTitleHeight)
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
    },
    updateData(data) {
      axios
        .get('/static/database/update.json')
        .then(function(response) {
          data.updates = response.data
        })
        .catch(error => {
          console.error(error.message)
        })
    }
  }
}
</script>
<style lang="scss">
#about {
  background: {
    image: url('/static/images/about_bg.jpg');
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
    overflow-y: scroll;
    .time {
      font-size: 14px;
      font-weight: bold;
    }
    .content {
      padding-left: 5px;
    }
  }
}
</style>
