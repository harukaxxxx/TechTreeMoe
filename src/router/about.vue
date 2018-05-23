<template>
  <div id="about" class="main">
    <Row type="flex" justify="space-around">
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
    <p class="bg-source">
      <a target="_blank" :href="backgroundSourceURL">Background Source: 51816460</a>
    </p>
  </div>
</template>
<script>
export default {
  name: 'about',
  data() {
    return {
      updates: Array,
      logHeight: Number,
      backgroundSourceURL: 'https://www.pixiv.net/member_illust.php?mode=medium&illust_id=51816460'
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
