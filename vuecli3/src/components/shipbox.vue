<template>
  <Card :id="data.id" :padding="0">
    <div class="shipImage" :style="flag(data.nation,data.special,data.id)">
      <span v-if="data.premium" class="addon icon-premium"></span>
      <span v-if="data.special === 'arp'" class="addon icon-arp"></span>
      <a v-if="data.change" @click="openModal">
        <span class="change icon-change"></span>
      </a>
      <img :src="`img/ship_previews/${data.id}-${defaultOption}.png`" :alt="data.name + ' image'">
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
  methods: {
    openModal: function() {
      this.$store.commit('modalControl', true)
      this.$store.commit('modalData', this.data)
    },
    flag: function(nation, special, id) {
      if (special === 'arp') {
        return `background-image:url(img/nation_flag/flag_${id}.png)`
      } else if (special === 'haifuri') {
        return 'background-image:url(img/nation_flag/flag_haifuri.png)'
      } else {
        return `background-image:url(img/nation_flag/flag_${nation}.png)`
      }
    }
  },
  computed: {
    defaultOption: function() {
      if (this.data.default === undefined) {
        this.data.default = 1
      }
      return this.data.default
    }
  }
}
</script>
<style lang="scss" scoped>
.ivu-card {
  margin: 10px;
  width: 216px;
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
  background: url('../assets/icons.png') -39px -38px;
  display: inline-block;
}

.icon-arp {
  width: 32px;
  height: 32px;
  background: url('../assets/icons.png') -2px -2px;
  display: inline-block;
}

.icon-battleship {
  width: 20px;
  height: 11px;
  background: url('../assets/icons.png') -72px -2px;
  display: inline-block;
}

.icon-change {
  width: 30px;
  height: 30px;
  background: url('../assets/icons.png') -38px -2px;
  display: inline-block;
}

.icon-cruiser {
  width: 20px;
  height: 11px;
  background: url('../assets/icons.png') -72px -17px;
  display: inline-block;
}

.icon-destroyer {
  width: 15px;
  height: 11px;
  background: url('../assets/icons.png') -72px -32px;
  display: inline-block;
}

.icon-premium {
  width: 33px;
  height: 25px;
  background: url('../assets/icons.png') -2px -38px;
  display: inline-block;
}
</style>
