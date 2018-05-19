<template>
  <div id="custom" class="main">
    <div class="filter-container">
      <Button type="info" @click="filter('all')">{{$t("custom.all")}}</Button>
      <ButtonGroup>
        <Button v-for="(shipNation, shipNationKey) in nationArray" :key="shipNationKey" type="info" @click="filter(shipNation)">{{$t("global." + shipNation)}}</Button>
      </ButtonGroup>
      <ButtonGroup>
        <Button v-for="(shipType, shipTypeKey) in typeArray" :key="shipTypeKey" type="info" @click="filter(shipType)">{{$t("global." + shipType)}}</Button>
      </ButtonGroup>
      <ButtonGroup>
        <Button type="info" @click="save">{{$t("custom.save")}}</Button>
        <Button type="info" @click="load">{{$t("custom.load")}}</Button>
        <Button type="info" @click="reset">{{$t("custom.reset")}}</Button>
      </ButtonGroup>
    </div>
    <isotope ref="isotope" class="isotope-container" :options='isotopeOption' :list="shipData">
      <shipBox v-for="data in shipData" :key="data.id" :data="data" />
    </isotope>
    <Modal :title="modalData.name" v-model="modal" @on-ok="optionUpadte" class-name="vertical-center-modal" width="80" :closable="false" :mask-closable="false">
      <div v-if="modalData[options]" v-for="(options, optionsKey) in optionArray" :key="optionsKey">
        <h1>{{options}}</h1>
        <Card v-if="modalData[options]" v-for="(option, optionKey) in modalData[options]" :key="optionKey" :padding="0" class="option-box">
          <a @click="modalData.default = Number(optionKey)">
            <div v-if="modalData.default === Number(optionKey)" class="checked">
              <Icon type="checkmark-circled"></Icon>
            </div>
            <img :src="`/static/images/ship_previews/${modalData.id}-${optionKey}.png`">
            <p v-if="typeof option === 'object'">
              <a :href="option[1] !== '' ? option[1] : 'javascrupt:void(0);'">【{{option[0]}}】</a>
              <a :href="option[3] !== '' ? option[3] : 'javascrupt:void(0);'">{{option[2]}}</a>
            </p>
            <p v-else>{{option.substring(option.search('】')+1)}}</p>
          </a>
        </Card>
      </div>
    </Modal>
  </div>
</template>
<script>
// import isotope from 'isotope-layout'
import isotope from 'vueisotope'
import shipBox from '../components/shipbox.vue'
import JSZip from 'jszip'
import FileSaver from 'file-saver'

export default {
  data() {
    return {
      name: 'custom',
      shipData: [],
      modal: false,
      modalData: Object,
      optionArray: ['艦隊收藏', '戰艦少女', '鋼鐵少女', '碧藍航線', '高校艦隊', '最終戰艦', 'November', '蒼藍鋼鐵戰艦', 'Victory_Belles', '同人作品'],
      nationArray: ['japan', 'usa', 'germany', 'ussr', 'uk', 'pan_asia', 'france', 'commonwealth', 'italia'],
      typeArray: ['destroyer', 'cruiser', 'battleship', 'aircarrier'],
      selectedOption: {},
      isotopeOption: {
        layoutMode: 'masonry',
        getFilterData: {
          all: function() {
            return true
          },
          japan: function(ship) {
            return ship.nation === 'japan'
          },
          usa: function(ship) {
            return ship.nation === 'usa'
          },
          ussr: function(ship) {
            return ship.nation === 'ussr'
          },
          germany: function(ship) {
            return ship.nation === 'germany'
          },
          uk: function(ship) {
            return ship.nation === 'uk'
          },
          pan_asia: function(ship) {
            return ship.nation === 'pan_asia'
          },
          france: function(ship) {
            return ship.nation === 'france'
          },
          italia: function(ship) {
            return ship.nation === 'italia'
          },
          commonwealth: function(ship) {
            return ship.nation === 'commonwealth'
          },
          destroyer: function(ship) {
            return ship.type === 'destroyer'
          },
          cruiser: function(ship) {
            return ship.type === 'cruiser'
          },
          battleship: function(ship) {
            return ship.type === 'battleship'
          },
          aircarrier: function(ship) {
            return ship.type === 'aircarrier'
          }
        },
        hiddenStyle: {
          opacity: 0,
          transform: 'scale(0.5)'
        },
        visibleStyle: {
          opacity: 1,
          transform: 'scale(1)'
        }
      }
    }
  },
  components: {
    isotope,
    shipBox
  },
  beforeMount() {
    axios
      .get('/static/database/shipData.json')
      .then(res => {
        let shipObject = res.data
        Object.keys(shipObject).map((nationKey, nationIndex) => {
          let nationShips = Object.values(shipObject[nationKey])
          nationShips.forEach(ship => {
            this.shipData.push(ship)
            this.selectedOption[ship.id] = ship.default
          })
        })
      })
      .catch(error => {
        console.log(error.message)
      })

    this.$bus.on('downloadFile', () => {
      this.download()
    })
    this.load(true)
  },
  methods: {
    filter: function(filterKey) {
      this.$refs.isotope.filter(filterKey)
    },
    optionUpadte: function() {
      let id = this.modalData.id
      this.selectedOption[id] = this.modalData.default
      this.$ga.event({
        eventCategory: 'optionSelect',
        eventAction: id,
        eventLabel: id + '-' + this.selectedOption[id]
      })
    },
    save: function() {
      this.$setItem('selectedOptioin', this.selectedOption)
      this.notice('已儲存您的選擇紀錄！', 'success')
    },
    load: function(status) {
      this.$getItem('selectedOptioin').then(res => {
        if (res === null) {
          if (!status) {
            this.notice('查無選擇紀錄！', 'error')
          }
        } else {
          this.shipData.forEach(data => {
            let id = data.id
            data.default = res[id]
          })
          this.selectedOption = res
          this.notice('已載入您的選擇紀錄！', 'success')
        }
      })
    },
    reset: function() {
      this.$removeItem('selectedOptioin')
      this.$router.push({
        path: '/empty'
      })
      this.$router.go(-1)
      this.notice('已回復預設選項！', 'success')
    },
    notice(message, status) {
      switch (status) {
        case 'warning':
          this.$Message.warning({ content: message, duration: 3 })
          break
        case 'success':
          this.$Message.success({ content: message, duration: 3 })
          break
        case 'error':
          this.$Message.error({ content: message, duration: 3 })
          break
        default:
          this.$Message.info({ content: message, duration: 3 })
          break
      }
    },
    download: function() {
      const zip = new JSZip()
      const cache = {}
      const promises = []
      this.save()

      // init file paths
      let shipPreviews = []
      let shipPreviewsDS = []
      let selectedOption = this.selectedOption
      Object.keys(selectedOption).map(key => {
        shipPreviews.push(`/static/images/ship_previews/${key}-${selectedOption[key]}.png`)
        shipPreviewsDS.push(`/static/images/ship_previews_ds/${key}-${selectedOption[key]}.png`)
      })

      // get file function
      const getFile = url => {
        return new Promise((resolve, reject) => {
          axios({
            method: 'get',
            url,
            responseType: 'arraybuffer'
          })
            .then(res => {
              resolve(res.data)
            })
            .catch(error => {
              reject(error.toString())
            })
        })
      }

      // add files into zip
      this.$Loading.start()
      let filePaths = [shipPreviews, shipPreviewsDS]
      let folderName = ['ship_previews', 'ship_previews_ds']
      for (let index = 0; index < filePaths.length; index++) {
        const filePath = filePaths[index]
        filePath.forEach(item => {
          const promise = getFile(item)
            .then(response => {
              const nameArray = item.split('/')
              const nameOption = nameArray[nameArray.length - 1]
              const fileName = nameOption.split('-')[0] + '.png'
              zip.folder(folderName[index]).file(fileName, response, { binary: true })
              cache[fileName] = response
            })
            .catch(error => {
              this.$Loading.error()
              console.log(error.message)
            })
          promises.push(promise)
        })
      }
      // download with filesaver
      Promise.all(promises).then(() => {
        zip
          .generateAsync({ type: 'blob' })
          .then(content => {
            FileSaver.saveAs(content, 'res_mod.zip')
            this.$Loading.finish()
          })
          .catch(error => {
            this.$Loading.error()
            console.log(error.message)
          })
      })
    }
  }
}
</script>

<style lang="scss">
#custom {
  background: {
    image: url('/static/images/custom_bg.jpg');
    repeat: no-repeat;
    position: center;
    size: cover;
  }
}
.filter-container {
  text-align: center;
  margin: 20px 0;
}
.isotope-container {
  max-width: 1200px;
  margin: 0 auto;
}
.vertical-center-modal {
  display: flex;
  align-items: center;
  justify-content: center;

  .ivu-modal {
    top: 0;
  }
}
.ivu-modal {
  top: 0;
  text-align: center;
  .ivu-modal-body {
    height: calc(100vh - 120px);
    overflow-y: auto;
    background-color: #f3f3f3;
    h1 {
      border-bottom: 1px solid #00000066;
      margin-bottom: 20px;
      width: fit-content;
      margin: 0 auto 20px;
      padding: 0 20px;
    }
    .option-box {
      margin: 10px;
      display: inline-block;
      a {
        color: #495060;
      }
      .ivu-card-head {
        padding: 5px 0;
      }
      .ivu-card-body {
        width: 214px;
        height: 126px;
      }
      .checked {
        width: 214px;
        height: 126px;
        position: absolute;
        top: 0;
        background: rgba(#333, 0.4);
        color: #fff;
        font-size: 70px;
        border-radius: 4px;
      }
      img {
        border-radius: 4px;
      }
      p {
        position: relative;
        bottom: 27px;
        background: #fffc;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
      }
    }
  }
}
</style>
