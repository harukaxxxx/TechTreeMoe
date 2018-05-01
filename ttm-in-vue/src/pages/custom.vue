<template>
  <div id="custom" class="main">
    <!-- <div class="filter-group">
      <div class="am-btn-group">
        <button type="button" class="am-btn am-btn-primary am-btn-sm am-round" onclick="filterReset();" tkey="tkey_filter_all">
          <span class="am-icon-tags"></span>全部顯示</button>
      </div>
      <div class="am-btn-group" data-am-button>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_japan">
          <input type="radio" class="options" name="nation" value=".japan">
          <span class="am-icon-flag"></span>日本
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_usa">
          <input type="radio" class="options" name="nation" value=".usa">
          <span class="am-icon-flag"></span>美國
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_ussr">
          <input type="radio" class="options" name="nation" value=".ussr">
          <span class="am-icon-flag"></span>蘇聯
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_germany">
          <input type="radio" class="options" name="nation" value=".germany">
          <span class="am-icon-flag"></span>德國
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_uk">
          <input type="radio" class="options" name="nation" value=".uk">
          <span class="am-icon-flag"></span>英國
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_pan_asia">
          <input type="radio" class="options" name="nation" value=".pan_asia">
          <span class="am-icon-flag"></span>泛亞
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_france">
          <input type="radio" class="options" name="nation" value=".france">
          <span class="am-icon-flag"></span>法國
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_italia">
          <input type="radio" class="options" name="nation" value=".italia">
          <span class="am-icon-flag"></span>義大利
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_commonwealth">
          <input type="radio" class="options" name="nation" value=".commonwealth">
          <span class="am-icon-flag"></span>聯邦
        </label>
      </div>
      <div class="am-btn-group" data-am-button>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_destroyer">
          <input type="radio" class="options" name="type" value=".destroyer">
          <span class="am-icon-anchor"></span> 驅逐艦
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_cruiser">
          <input type="radio" class="options" name="type" value=".cruiser">
          <span class="am-icon-anchor"></span> 巡洋艦
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_battleship">
          <input type="radio" class="options" name="type" value=".battleship">
          <span class="am-icon-anchor"></span> 戰艦
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_aircarrier">
          <input type="radio" class="options" name="type" value=".aircarrier">
          <span class="am-icon-anchor"></span> 航空母艦
        </label>
      </div>
      <div class="am-btn-group" data-am-button>
        <label class="am-btn am-btn-primary am-btn-sm am-round" tkey="tkey_filter_change">
          <input type="radio" class="options" name="extra" value=".change">
          <span class="am-icon-paint-brush"></span> 可更替
        </label>
        <label class="am-btn am-btn-primary am-btn-sm am-round am-icon-premium" tkey="tkey_filter_premium">
          <input type="radio" class="options" name="extra" value=".premium">
          <img src="assets/images/icons/premium_icon.png"> 加值艦
        </label>
      </div>
      <div class="am-btn-group">
        <button type="button" class="am-btn am-btn-primary am-btn-sm am-round" onclick="dataSave()" tkey="tkey_filter_save">
          <span class="am-icon-folder"></span>儲存
        </button>
        <button type="button" class="am-btn am-btn-primary am-btn-sm am-round" onclick="restore()" tkey="tkey_filter_load">
          <span class="am-icon-folder-open"></span>載入
        </button>
        <button type="button" class="am-btn am-btn-primary am-btn-sm am-round" onclick="reset()" tkey="tkey_filter_reset">
          <span class="am-icon-refresh"></span>回復預設
        </button>
      </div>
    </div> -->

    <!-- <isotope :options="option" :list="shipData"> -->
    <shipBox v-for="data in shipData" :key="data.id" :data="data" />
    <!-- </isotope> -->
    <Modal :title="modalData.name" v-model="modal" class-name="vertical-center-modal" width="80">
      <div v-if="modalData[options]" v-for="(options, optionsKey) in optionArray" :key="optionsKey">
        <h1>{{options}}</h1>
        <Card v-if="modalData[options]" v-for="(option, optionKey) in modalData[options]" :key="optionKey" padding="0" class="option-box">
          <p slot="title">{{option.substring(option.search('】')+1)}}</p>
          <img :src="`../src/assets/images/ship_previews/${modalData.id}-${optionKey}.png`">
        </Card>
      </div>
    </Modal>
  </div>
</template>
<script>
import shipBox from '../components/shipbox.vue'
export default {
  data() {
    return {
      name: 'custom',
      shipData: [],
      modal: false,
      modalData: Object,
      optionArray: ['艦隊收藏', '戰艦少女', '鋼鐵少女', '碧藍航線', '高校艦隊', '最終戰艦', 'November', '蒼藍鋼鐵戰艦', 'Victory_Belles'] /* '同人作品' */
    }
  },
  components: {
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
    }
  }
}
</style>
