<template>
  <Card :id="data.id" :padding="0">
    <div class="shipImage" :style="`background-image:url(../src/assets/images/nation_flag/flag_${data.nation}.png)`">
      <span v-if="data.premium" class="addon icon-premium"></span>
      <span v-if="data.arp" class="addon icon-arp"></span>
      <a v-if="data.change" @click="openModal">
        <span class="change icon-change"></span>
      </a>
      <img :src="`../src/assets/images/ship_previews/${data.id}-${data.default}.png`" :alt="data.name + ' image'">
    </div>
    <p class="shipName">
      <span :class="`icon-${data.type}`"></span> {{data.tier}} {{data.name}}
    </p>
  </Card>
</template>
<script>
export default {
  name: 'shipbox',
  props: {
    data: Object
  },
  beforeMount() {},
  computed: {},
  methods: {
    openModal: function() {
      this.$parent.$parentz.modal = true
      this.$parent.$parentz.modalData = this.data
    }
  },
  data() {
    return {}
  }
}
</script>
<style lang="scss" scoped>
.ivu-card {
  margin: 10px;
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
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
    border-top: 1px solid #fff9;
    width: 100%;
  }
  .shipImage {
    height: 126px;
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: contain;
    .addon {
      position: absolute;
      right: 5px;
      top: 5px;
    }
    .change {
      position: absolute;
      right: 5px;
      bottom: 0px;
      z-index: 99;
    }
    img {
      border-radius: 4px;
    }
  }
}

.icon-aircarrier {
  width: 20px;
  height: 11px;
  background: url('../assets/images/icons.png') -39px -38px;
  display: inline-block;
}

.icon-arp {
  width: 32px;
  height: 32px;
  background: url('../assets/images/icons.png') -2px -2px;
  display: inline-block;
}

.icon-battleship {
  width: 20px;
  height: 11px;
  background: url('../assets/images/icons.png') -72px -2px;
  display: inline-block;
}

.icon-change {
  width: 30px;
  height: 30px;
  background: url('../assets/images/icons.png') -38px -2px;
  display: inline-block;
}

.icon-cruiser {
  width: 20px;
  height: 11px;
  background: url('../assets/images/icons.png') -72px -17px;
  display: inline-block;
}

.icon-destroyer {
  width: 15px;
  height: 11px;
  background: url('../assets/images/icons.png') -72px -32px;
  display: inline-block;
}

.icon-premium {
  width: 33px;
  height: 25px;
  background: url('../assets/images/icons.png') -2px -38px;
  display: inline-block;
}
</style>
