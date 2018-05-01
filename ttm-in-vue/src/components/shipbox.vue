<template>
  <!-- <div id="Container">
      <template id="shipBox">
        <div class="mix">
          <p class="ship">
            <span class="tier">__TIER__</span>__NAME__</p>
          <div class="img_container">
            <div class="addon">
              <img src="__SHIP_PREVIEWS__">
            </div>
          </div>
          <select name="__ID__" data-am-selected>
            <optgroup label="__BAND__">
              <option value="__ID__0">【__BAND__】__NAME__</option>
            </optgroup>
          </select>
        </div>
      </template>
    </div> -->
  <Card :id="data.id" :padding="0" :bordered="false">
    <div class="shipImage" :style="`background-image:url(../src/assets/images/nation_flag/flag_${data.nation}.png)`">
      <img :src="`../src/assets/images/ship_previews/${data.id}-${data.default}.png`" :alt="data.name + ' image'">
    </div>
    <p class="shipName">
      <span :class="`icon-${data.type}`"></span> {{data.tier}} {{data.name}}
    </p>
    <Select v-model="optionSelect" placeholder="Select..." not-found-text="Data not found" :element-id="data.id">
      <OptionGroup v-if="data[options]" v-for="(options, groupIndex) in optionArray" :key="groupIndex" :label="options">
        <Option v-for="(option, key, optionIndex) in data[options]" :value="key" :key="optionIndex" :label="option">
          <span>{{option.substring(option.search('】') + 1)}}</span>
          <span style="float:right;color:#ccc">{{data.id}}-{{key}}</span>
        </Option>
      </OptionGroup>
    </Select>
  </Card>
</template>
<script>
export default {
  name: 'shipbox',
  props: {
    /* nation: String,
    id: String,
    name: String,
    tier: String,
    type: String,
    defaultImg: [Number, String],
    change: Boolean,
    premiom: Boolean,
    arp: Boolean,
    kancolle: Object,
    battleshipGirl: Object,
    steelShipGirl: Object,
    azurLane: Object,
    November: Object,
    lastBattleship: Object,
    victoryBelles: Object,
    arpeggioOfBlueSteel: Object,
    highSchoolFleet: Object,
    fanWork: Object,
    optionArray: Array, */
    data: Object
  },
  beforeMount() {
    this.optionSelect = this.data.default.toString()
  },
  computed: {},
  methods: {},
  data() {
    return {
      optionArray: ['艦隊收藏', '戰艦少女', '鋼鐵少女', '碧藍航線', '高校艦隊', '最終戰艦', 'November', '蒼藍鋼鐵戰艦', 'Victory_Belles'] /* '同人作品' */,
      optionSelect: Number
    }
  }
}
</script>
<style lang="scss" scoped>
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
</style>
