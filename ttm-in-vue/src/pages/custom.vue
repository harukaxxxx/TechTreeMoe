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

    <Card v-for="data in shipData" :key="data.id" :padding="0" :bordered="false">
      <div class="shipImage" :style="`background-image:url(../src/assets/images/nation_flag/flag_${data.nation}.png)`">
        <img :src="`../src/assets/images/ship_previews/${data.id}-${optionSelect[data.id]}.png`" :alt="data.name + ' image'">
      </div>
      <p class="shipName">
        <span :class="`icon-${data.type}`"></span> {{data.tier}} {{data.name}}
      </p>
      <!-- v-model="optionSelect" -->

      <Select v-model="optionSelect[data.id]" placeholder="Select..." not-found-text="Data not found" :element-id="data.id">
        <OptionGroup v-if="data[options]" v-for="(options, groupIndex) in optionArray" :key="groupIndex" :label="options">
          <Option v-for="(option, optionKey, optionIndex) in data[options]" :value="optionKey" :key="optionIndex" :label="option">
            <span>{{option.substring(option.search('】') + 1)}}</span>
            <span style="float:right;color:#ccc">{{data.id}}-{{optionKey}}</span>
          </Option>
        </OptionGroup>
      </Select>
      {{optionSelect[data.id]}}
    </Card>

    <!-- <isotope :options="option" :list="shipData"> -->
    <!-- <shipBox v-for="data in shipData" :key="data.id" :data="data" /> -->
    <!-- </isotope> -->
  </div>
</template>
<script>
import shipBox from '../components/shipbox.vue'
import isotope from 'vueisotope'
export default {
  data() {
    return {
      name: 'custom',
      shipData: [],
      option: {
        getSortData: {
          id: 'id',
          name: function(itemElem) {
            return itemElem.name.toLowerCase()
          }
        },
        getFilterData: {
          isEven: function(itemElem) {
            return itemElem.id % 2 === 0
          },
          isOdd: function(itemElem) {
            return itemElem.id % 2 !== 0
          },
          filterByText: function(itemElem) {
            return itemElem.name.toLowerCase().includes(this.filterText.toLowerCase())
          }
        }
      },
      optionArray: ['艦隊收藏', '戰艦少女', '鋼鐵少女', '碧藍航線', '高校艦隊', '最終戰艦', 'November', '蒼藍鋼鐵戰艦', 'Victory_Belles'] /* '同人作品' */,
      optionSelect: {}
    }
  },
  components: {
    isotope
  },
  beforeMount() {
    let optionSelect = this.optionSelect
    axios
      .get('../src/assets/database/shipDataSlim.json')
      .then(res => {
        let shipObject = res.data
        Object.keys(shipObject).map((nationKey, nationIndex) => {
          let nationShips = Object.values(shipObject[nationKey])
          nationShips.forEach(ship => {
            this.shipData.push(ship)
            let id = ship.id
            optionSelect[id] = ship.default.toString()
          })
          Object.keys(shipObject[nationKey]).map((shipKey, shipIndex) => {})
        })
      })
      .catch(error => {
        console.log(error.message)
      })
  },
  mounted() {},
  components: {
    shipBox
  },
  created() {
    // this.$bus.on('usa', () => console.log(this.$bus.usa, 'add usa'))
    // this.$bus.once('once', () => console.log('这个监听器只会触发一次'))
  },
  mounted() {
    // console.log(this.$parent.$parent)
    // this.$bus.emit('add-todo', { text: 'this.newTodoText2' })
    // this.$bus.emit('once')
  },
  methods: {
    /* addTodo(newTodo) {
      this.todos = newTodo
    } */
    setValue: function(id, key) {
      console.log(typeof this.optionSelect[id])

      // this.optionSelect[id] = key
    }
  },
  beforeDestroy() {
    // this.$bus.off('add-todo')
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
  .ivu-card {
    margin: 20px;
    width: 214px;
    background: #ffffff99;
    display: inline-block;
    .shipName {
      text-align: center;
      font-family: 'Segoe UI', sans-serif;
      font-weight: 700;
      color: #00000099;
      position: absolute;
      top: 104px;
      background: #ffffffcc;
      border-top: 1px solid #fff9;
      width: 100%;
    }
    .shipImage {
      height: 126px;
      background-repeat: no-repeat;
      background-position: bottom;
      background-size: contain;
      border-bottom: 1px solid #fff9;
    }
  }

  .icon-destroyer {
    width: 15px;
    height: 11px;
    background: url('../assets/images/icons.png') -33px -43px;
    display: inline-block;
  }
  .icon-cruiser {
    width: 20px;
    height: 11px;
    background: url('../assets/images/icons.png') -62px -36px;
    display: inline-block;
  }
  .icon-battleship {
    width: 20px;
    height: 11px;
    background: url('../assets/images/icons.png') -62px -25px;
    display: inline-block;
  }

  .icon-aircarrier {
    width: 20px;
    height: 11px;
    background: url('../assets/images/icons.png') -33px -32px;
    display: inline-block;
  }

  .icon-arp {
    width: 32px;
    height: 32px;
    background: url('../assets/images/icons.png') 0 0;
  }

  .icon-change {
    width: 30px;
    height: 30px;
    background: url('../assets/images/icons.png') -32px 0;
  }

  .icon-premium {
    width: 33px;
    height: 25px;
    background: url('../assets/images/icons.png') 0 -32px;
  }

  .icon-premium_icon {
    width: 33px;
    height: 25px;
    background: url('../assets/images/icons.png') -62px 0;
  }
}
</style>
