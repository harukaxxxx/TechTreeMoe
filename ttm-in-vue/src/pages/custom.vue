<template>
  <div id="custom" class="main">
    <div class="filter-container">
      <Button @click="filter('all')">{{$t("custom.all")}}</Button>
      <ButtonGroup>
        <Button v-for="(shipNation, shipNationKey) in nationArray" :key="shipNationKey" @click="filter(shipNation)">{{$t("global." + shipNation)}}</Button>
      </ButtonGroup>
      <ButtonGroup>
        <Button v-for="(shipType, shipTypeKey) in typeArray" :key="shipTypeKey" @click="filter(shipType)">{{$t("global." + shipType)}}</Button>
      </ButtonGroup>
      <ButtonGroup>
        <Button>{{$t("custom.save")}}</Button>
        <Button>{{$t("custom.load")}}</Button>
        <Button>{{$t("custom.reset")}}</Button>
      </ButtonGroup>
    </div>
    <isotope ref="isotope" class="isotope-container" :options='isotopeOption' :list="shipData">
      <shipBox v-for="data in shipData" :key="data.id" :data="data" />
    </isotope>
    <Modal :title="modalData.name" v-model="modal" class-name="vertical-center-modal" width="80">
      <div v-if="modalData[options]" v-for="(options, optionsKey) in optionArray" :key="optionsKey">
        <h1>{{options}}</h1>
        <Card v-if="modalData[options]" v-for="(option, optionKey) in modalData[options]" :key="optionKey" :padding="0" class="option-box">
          <div>
            <img :src="`../src/assets/images/ship_previews/${modalData.id}-${optionKey}.png`">
            <p v-if="typeof option === 'object'">
              <a :href="option[1] !== '' ? option[1] : 'javascrupt:void(0);'">【{{option[0]}}】</a>
              <a :href="option[3] !== '' ? option[3] : 'javascrupt:void(0);'">{{option[2]}}</a>
            </p>
            <p v-else="">{{option.substring(option.search('】')+1)}}</p>
          </div>
        </Card>
      </div>
    </Modal>
  </div>
</template>
<script>
// import isotope from 'isotope-layout'
import isotope from 'vueisotope'
import shipBox from '../components/shipbox.vue'
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
      .get('../src/assets/database/shipData.json')
      .then(res => {
        let shipObject = res.data
        Object.keys(shipObject).map((nationKey, nationIndex) => {
          let nationShips = Object.values(shipObject[nationKey])
          nationShips.forEach(ship => {
            this.shipData.push(ship)
            let id = ship.id
          })
        })
      })
      .catch(error => {
        console.log(error.message)
      })
  },
  methods: {
    filter: function(filterKey) {
      this.$refs.isotope.filter(filterKey)
    }
  }
}
</script>

<style lang="scss">
#custom {
  background: {
    image: url(../assets/images/custom_bg.jpg);
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
    h1 {
      border-bottom: 1px solid #00000066;
      margin-bottom: 20px;
    }
    .option-box {
      margin: 10px;
      display: inline-block;
      .ivu-card-head {
        padding: 5px 0;
      }
      .ivu-card-body {
        width: 214px;
        height: 126px;
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
        a {
          color: #000;
        }
      }
    }
  }
}
</style>
