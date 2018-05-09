<template>
  <div id="charts" class="main">
    <Row>
      <i-col span="8">
      <Card class="downloadAmount">
        <p slot="title">
          <Icon type="ios-film-outline"></Icon>{{ $t("charts.yesterdayDownloaded") }}
          <small>{{ $t('charts.yesterdayDownloadedTime', {year:yesterday[0],month:yesterday[1],day:yesterday[2]}) }}</small>
        </p>
        <p class="amount">{{yesterdayDownloaded+$t("charts.downloadUnit")}}</p>
      </Card>
      </i-col>
      <i-col span="8">
      <Card class="downloadAmount">
        <p slot="title">
          <Icon type="ios-film-outline"></Icon>{{ $t("charts.monthDownloaded") }}
          <small>{{ $t('charts.monthDownloadedTime', {year:today[0],month:today[1]}) }}</small>
        </p>
        <p class="amount">{{thisMonthDownloaded+$t("charts.downloadUnit")}}</p>
      </Card>
      </i-col>
      <i-col span="8">
      <Card class="downloadAmount">
        <p slot="title">
          <Icon type="ios-film-outline"></Icon>{{ $t("charts.totalDownloaded") }}
          <small>{{$t('charts.totalDownloadedTime')}}</small>
        </p>
        <p class="amount">{{totalDownload+$t("charts.downloadUnit")}}</p>
      </Card>
      </i-col>
    </Row>
    <Row>
      <i-col span="24">
      <Card>
        <p slot="title">
          <Icon type="ios-film-outline"></Icon>{{ $t("charts.totalProgress") }}
        </p>
        <Progress :percent="Math.floor(globalProgress.total/globalProgress.progress*100)" status="active"></Progress>
      </Card>
      </i-col>
    </Row>
    <Row>
      <i-col span="24">
      <Card class="nationCircle">
        <p slot="title">
          <Icon type="ios-film-outline"></Icon>{{ $t("charts.nationProgress") }}
        </p>
        <Row type="flex" justify="center">
          <i-col span="4" v-for="nation in nationList" :key="nationList.indexOf(nation)">
          <i-circle :class="nation" :size="150" :percent="completeData[nation].total/completeData[nation].progress*100" :stroke-color="circleStrokeColor(completeData[nation].total/completeData[nation].progress*100)">
            <h1>{{$t('global.'+nation)}}</h1>
            <p>{{(completeData[nation].total/completeData[nation].progress*100).toFixed(1)}}%</p>
            <span>{{completeData[nation].total}} / {{completeData[nation].progress}}</span>
          </i-circle>
          </i-col>
        </Row>
      </Card>
      </i-col>
    </Row>
    <Row>
      <i-col span="24">
      <Card>
        <p slot="title">
          <Icon type="ios-film-outline"></Icon>{{$t('charts.lineChart')}}
        </p>
        <ve-line :data="downloadChart" :settings="chartSettings" :colors="colors" :data-zoom="dataZoom" :grid="grid" :legend-visible="false"></ve-line>
      </Card>
      </i-col>
    </Row>
    <Row v-if="!productionMode">
      <i-col span="24" style="color:#fff;text-align:center;">
      <a :href="gaAuthorizeUrl" style="color:#fff">
        Get Authorize Code |
      </a>
      Refresh Token : {{gaRefreshToken}}
      </i-col>
    </Row>
  </div>
</template>
<script>
export default {
  data() {
    return {
      name: 'charts',
      productionMode: false,
      nationList: ['japan', 'usa', 'germany', 'ussr', 'uk', 'poland', 'pan_asia', 'france', 'commonwealth', 'italia'],
      completeData: {
        commonwealth: { progress: 0, total: 0 },
        france: { progress: 0, total: 0 },
        germany: { progress: 0, total: 0 },
        italia: { progress: 0, total: 0 },
        japan: { progress: 0, total: 0 },
        pan_asia: { progress: 0, total: 0 },
        poland: { progress: 0, total: 0 },
        uk: { progress: 0, total: 0 },
        usa: { progress: 0, total: 0 },
        ussr: { progress: 0, total: 0 }
      },
      globalProgress: { progress: 0, total: 0 },
      gaAuthorizeUrl:
        'https://accounts.google.com/o/oauth2/auth?scope=https://www.googleapis.com/auth/analytics.readonly&response_type=code&client_id=84771301340-kj0vn6hmsg1sskovhnk5homgfntrhhbi.apps.googleusercontent.com&redirect_uri=http://localhost&approval_prompt=force&access_type=offline',
      gaAuthorizeCode: '',
      gaClientID: '84771301340-kj0vn6hmsg1sskovhnk5homgfntrhhbi.apps.googleusercontent.com',
      gaClientSecret: 'j2W1KNkIw5U2gmc5mBp7FKep',
      gaRefreshToken: '1/aZ3OM6dXmfttWOuYfyu3YJyFvRDL9oFcxrRjCIOe_sM',
      gaAccessToken: '',
      downloadChart: {
        columns: ['date', 'value'],
        rows: []
      },
      chartSettings: {
        area: true,
        labelMap: {
          value: 'Downloaded'
        },
        label: {
          normal: {
            show: true
          }
        },
        lineStyle: {
          color: {
            type: 'linear',
            x: 0,
            y: 0,
            x2: 0,
            y2: 1,
            colorStops: [
              {
                offset: 0,
                color: '#93b7e3'
              },
              {
                offset: 1,
                color: '#516b91'
              }
            ],
            globalCoord: false
          }
        },
        areaStyle: {
          color: {
            type: 'linear',
            x: 0,
            y: 0,
            x2: 0,
            y2: 1,
            colorStops: [
              {
                offset: 0,
                color: '#516b91'
              },
              {
                offset: 1,
                color: '#93b7e3'
              }
            ],
            globalCoord: false
          }
        }
      },
      colors: ['#516b91'],
      dataZoom: [
        {
          type: 'slider',
          startValue: this.lastmonth
        }
      ],
      grid: {
        right: 60,
        left: 60
      }
    }
  },
  computed: {
    today: function() {
      let date = new Date()
      let d = date.getDate()
      let dd = d < 10 ? `0${d}` : d
      let m = date.getMonth() + 1
      let mm = m < 10 ? `0${m}` : m
      let yyyy = date.getFullYear()
      return [yyyy, mm, dd]
    },
    yesterday: function() {
      let date = new Date()
      date.setDate(date.getDate() - 1)

      let d = date.getDate()
      let dd = d < 10 ? '0' + d : d
      let m = date.getMonth() + 1
      let mm = m < 10 ? `0${m}` : m
      let yyyy = date.getFullYear()
      return [yyyy, mm, dd]
    },
    yesterdayDownloaded: function() {
      let downloadData = this.downloadChart.rows
      let yesterday = this.yesterday.join('/')
      let yesterdayDownloaded = 0
      downloadData.forEach(function(data) {
        if (data.date === yesterday) {
          yesterdayDownloaded = data.value
        }
      })
      return yesterdayDownloaded
    },
    thisMonthDownloaded: function() {
      let downloadData = this.downloadChart.rows
      let todayYear = this.today[0].toString()
      let todayMonth = this.today[1].toString()
      let thisMonthDownloaded = 0
      downloadData.forEach(function(data) {
        let year = data.date.split('/')[0]
        let month = data.date.split('/')[1]
        if (year === todayYear && month === todayMonth) {
          thisMonthDownloaded += Number(data.value)
        }
      })
      return thisMonthDownloaded
    },
    totalDownload: function() {
      let downloadData = this.downloadChart.rows

      /*
      * 2017/09/04 to 2018/01/10 total downloaded 827 times
      * reset when 2020/10/06
      */
      let totalDownload = 827
      downloadData.forEach(function(data) {
        totalDownload += Number(data.value)
      })
      return totalDownload
    }
  },
  beforeMount() {
    this.productionMode = process.env.NODE_ENV === 'production'

    if (!this.productionMode && window.location.hash.split('=')[1]) {
      this.gaAuthorizeCode = window.location.hash.split('=')[1]
      this.getRefreshToken()
    }
    this.getAccessToken()
    this.getLastMonth()
  },
  mounted() {
    let appCompleteData = this.completeData
    let appGlobalProgress = this.globalProgress

    // complete progress setup
    this.nationList.forEach(function(nation, index) {
      axios
        .get('/static/database/nationShips/' + nation + '.json')
        .then(function(response) {
          appCompleteData[nation].progress = Object.keys(response.data).length
          appGlobalProgress.progress += Object.keys(response.data).length
        })
        .catch(function(error) {
          console.log(error)
        })

      axios
        .get('/static/database/shipData.json')
        .then(function(response) {
          appCompleteData[nation].total = Object.keys(response.data[nation]).length
          appGlobalProgress.total += Object.keys(response.data[nation]).length
        })
        .catch(error => {
          console.log(error)
        })
    })
  },
  methods: {
    circleStrokeColor(progress) {
      if (progress <= 30) {
        return '#ed3f14'
      } else if (progress > 30 && progress <= 70) {
        return '#ff9900'
      } else if (progress > 70 && progress < 100) {
        return '#2d8cf0'
      } else if (progress === 100) {
        return '#19be6b'
      } else {
        return '#bbbec4'
      }
    },
    getLastMonth() {
      let date = new Date()
      date.setMonth(date.getMonth() - 1)

      let d = date.getDate() - 1
      let dd = d < 10 ? '0' + d : d
      let m = date.getMonth() + 1
      let mm = m < 10 ? `0${m}` : m
      let yyyy = date.getFullYear()
      this.dataZoom[0].startValue = `${yyyy}/${mm}/${dd}`
    },
    getRefreshToken() {
      axios
        .post(
          'https://www.googleapis.com/oauth2/v4/token',
          `code=${this.gaAuthorizeCode}&redirect_uri=http://localhost&grant_type=authorization_code&client_id=${this.gaClientID}&client_secret=${
            this.gaClientSecret
          }`
        )
        .then(response => {
          this.gaRefreshToken = response.data.refresh_token
          console.log(response.data.refresh_token)
        })
        .catch(error => {
          console.log(error.message, 'Check network console for more info.')
        })
    },
    getAccessToken() {
      axios
        .post(
          'https://www.googleapis.com/oauth2/v4/token',
          `refresh_token=${this.gaRefreshToken}&client_id=${this.gaClientID}&client_secret=${this.gaClientSecret}&grant_type=refresh_token`
        )
        .then(response => {
          this.gaAccessToken = response.data.access_token
          this.getData()
        })
        .catch(error => {
          console.error(error.message)
        })
    },
    getData() {
      let QueryURI =
        'https://www.googleapis.com/analytics/v3/data/ga?' +
        'ids=ga%3A128322664&' +
        'start-date=2018-01-10&' +
        'end-date=yesterday&' +
        'metrics=ga%3AtotalEvents&' +
        'dimensions=ga%3Adate&' +
        'filters=ga%3AeventCategory%3D%3DclickCount&' +
        `access_token=${this.gaAccessToken}`
      axios
        .get(QueryURI)
        .then(response => {
          let downloadData = this.downloadChart.rows
          response.data.rows.forEach(function(data, index) {
            downloadData.push({
              date: `${data[0].substring(0, 4)}/${data[0].substring(4, 6)}/${data[0].substring(6, 8)}`,
              value: data[1]
            })
          })
        })
        .catch(error => {
          console.log(error.message)
          this.getAccessToken()
        })
    }
  }
}
</script>

<style lang="scss" scoped>
#charts {
  background-color: #1e5b94;
  .ivu-card {
    margin: 10px 20px;
  }
  .downloadAmount {
    small {
      float: right;
      color: #666;
    }
    .amount {
      font-size: 36px;
      font-weight: bold;
      text-align: center;
    }
  }
  .nationCircle .ivu-card-body div {
    text-align: center;
    margin: 10px;
    h1 {
      color: #3f414d;
      font-size: 28px;
      font-weight: normal;
    }
    p {
      color: #657180;
      font-size: 14px;
      margin: 5px 0 20px;
    }
    span {
      display: block;
      padding-top: 5px;
      color: #657180;
      font-size: 14px;
      &:before {
        content: '';
        display: block;
        width: 50%;
        height: 1px;
        margin: 0 auto;
        background: #e0e3e6;
        position: relative;
        top: -15px;
      }
    }
    span i {
      font-style: normal;
      color: #3f414d;
    }
  }
}
</style>
