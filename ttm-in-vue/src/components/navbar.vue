<template>
  <Menu mode="horizontal" theme="light" active-name="1">
    <router-link to="/" replace>
      <MenuItem name="1">
      <Icon type="ios-paper"></Icon>
      TechTreeMoe
      </MenuItem>
    </router-link>
    <router-link to="intro" replace>
      <MenuItem name="2">
      <Icon type="ios-people"></Icon>
      介紹與教學
      </MenuItem>
    </router-link>
    <router-link to="custom" replace>
      <MenuItem name="3">
      <Icon type="ios-people"></Icon>
      客製化
      </MenuItem>
    </router-link>
    <router-link to="about" replace>
      <MenuItem name="4">
      <Icon type="settings"></Icon>
      更新紀錄與詳細資訊
      </MenuItem>
    </router-link>
    <router-link to="charts" replace>
      <MenuItem name="5">
      <Icon type="settings"></Icon>
      統計數據與萌化進度
      </MenuItem>
    </router-link>
    <Button type="ghost" shape="circle" @click="clickEvent">Circle</Button>
  </Menu>
</template>
<script>
export default {
  data() {
    return {
      activeIndex: '1',
      activeIndex2: '1'
    }
  },
  methods: {
    handleSelect(key, keyPath) {
      console.debug(key, keyPath)
    },
    clickEvent() {
      this.$ga.event({
        eventCategory: 'clickCount',
        eventAction: 'click',
        eventLabel: 'downloadZIP'
      })
    }
  }
}
</script>
<style>

</style>


