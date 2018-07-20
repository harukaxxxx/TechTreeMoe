<template>
  <div id="custom" class="main">
    <div class="filter-container">
      <ButtonGroup>
      <Button type="info" @click="filter('all')">
        <Icon v-if="filterAll" type="checkmark"></Icon> {{$t("custom.all")}}
      </Button>
      </ButtonGroup>
      <ButtonGroup>
        <Button v-for="(shipNation, shipNationKey) in nationArray" :key="shipNationKey" type="info" @click="filter(shipNation)">
          <Icon v-if="filterStats.nation === shipNation" type="checkmark"></Icon> {{$t("global." + shipNation)}}
        </Button>
      </ButtonGroup>
      <ButtonGroup>
        <Button v-for="(shipType, shipTypeKey) in typeArray" :key="shipTypeKey" type="info" @click="filter(shipType)">
          <Icon v-if="filterStats.type === shipType" type="checkmark"></Icon> {{$t("global." + shipType)}}
        </Button>
      </ButtonGroup>
      <ButtonGroup>
        <!-- <Button type="info" @click="save">{{$t("custom.save")}}</Button>
        <Button type="info" @click="load">{{$t("custom.load")}}</Button> -->
        <Button type="info" @click="reset">{{$t("custom.reset")}}</Button>
      </ButtonGroup>
    </div>
    <isotope ref="isotope" class="isotope-container" :options='isotopeOption' :list="shipDataArray">
      <shipBox v-for="data in shipDataArray" :key="data.id" :data="data" />
    </isotope>
    <Modal class-name="vertical-center-modal" :title="modalData.name" v-model="customModal" width="80">
      <div v-if="modalData[options]" v-for="(options, optionsKey) in optionArray" :key="optionsKey">
        <h1>{{options}}</h1>
        <Card v-if="modalData[options]" v-for="(option, optionKey) in modalData[options]" :key="optionKey" :padding="0" class="option-box">
          <a @click="optionUpadte(modalData.id,Number(optionKey))">
            <div v-if="selectedOption[modalData.id] === Number(optionKey)" class="checked">
              <Icon type="checkmark-circled"></Icon>
            </div>
            <img :src="`img/ship_previews/${modalData.id}-${optionKey}.png`">
            <p v-if="typeof option === 'object'">
              <a :href="option[1] !== '' ? option[1] : 'javascrupt:void(0);'">【{{option[0]}}】</a>
              <a :href="option[3] !== '' ? option[3] : 'javascrupt:void(0);'">{{option[2]}}</a>
            </p>
            <p v-else>{{option.substring(option.search('】')+1)}}</p>
          </a>
        </Card>
      </div>
      <div class="option-box-note" slot="footer">
        <p>選擇喜歡的圖標後出現 <Icon type="checkmark-circled"></Icon> 即代表已選定！</p>
        <p>點擊右上角X、點擊對話框外暗色區域或使用Esc鍵退出。</p>
      </div>
    </Modal>
  </div>
</template>
<script>
import isotope from 'vueisotope'
import shipBox from '../components/shipbox.vue'
import { mapGetters } from 'vuex'

export default {
  data() {
    return {
      name: 'custom',
      optionArray: ['艦隊收藏', '戰艦少女', '鋼鐵少女', '碧藍航線', '高校艦隊', '最終戰艦', 'November', '蒼藍鋼鐵戰艦', 'Victory_Belles', '同人作品'],
      nationArray: ['japan', 'usa', 'germany', 'ussr', 'uk', 'pan_asia', 'france', 'commonwealth', 'italia'],
      typeArray: ['destroyer', 'cruiser', 'battleship', 'aircarrier'],
      filterStats: {
        nation: '',
        type: ''
      },
      isotopeOption: {
        layoutMode: 'masonry',
        getFilterData: {
          all: function() {
            return true
          },
          multi: ship => {
            let nation = this.filterStats.nation
            let type = this.filterStats.type
            if (nation !== '' && type !== '') {
              return ship.nation === nation && ship.type === type
            } else if (nation !== '') {
              return ship.nation === nation
            } else if (type !== '') {
              return ship.type === type
            }
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
  computed: {
    filterAll: function() {
      return this.filterStats.nation === '' && this.filterStats.type === ''
    },
    customModal: {
      get() {
        return this.$store.state.customModal
      },
      set(value) {
        this.$store.commit('modalControl', value)
      }
    },
    ...mapGetters(['shipData', 'shipDatabase', 'shipDataArray', 'modalData', 'selectedOption'])
  },
  beforeMount() {
    this.$store.commit('dataInit')
  },
  methods: {
    filter: function(filterKey) {
      let filterStat = this.filterStats
      if (filterKey == 'all') {
        filterStat.nation = ''
        filterStat.type = ''
        filterStat.changeable = false
        this.$refs.isotope.filter('all')
      } else {
        if (this.nationArray.indexOf(filterKey) >= 0) {
          filterStat.nation = filterKey
        } else if (this.typeArray.indexOf(filterKey) >= 0) {
          filterStat.type = filterKey
        }
        this.$refs.isotope.filter('multi')
      }
    },
    optionUpadte: function(id, option) {
      this.$store.commit('updateOption', [id, option])
      this.$ga.event({
        eventCategory: 'optionSelect',
        eventAction: id,
        eventLabel: id + '-' + option
      })
    },
    reset: function() {
      this.$store.commit('reset')
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
      }
    }
  }
}
</script>

<style lang="scss">
#custom {
  height: calc(100vh - 94px);
  overflow-y: auto;
  background: {
    image: url('../assets/custom_bg.jpg');
    repeat: no-repeat;
    position: center;
    size: cover;
  }
}
.filter-container {
  text-align: center;
  margin: 20px 0;
  .ivu-btn-group {
    margin: 0 5px;
  }
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
  .option-box-note {
    text-align: center;
  }
}
</style>