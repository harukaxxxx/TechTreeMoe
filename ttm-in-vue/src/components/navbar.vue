<template>
  <el-menu
    :default-active="activeIndex"
    :router="true"
    mode="horizontal"
    @select="handleSelect"
    background-color="#545c64"
    text-color="#fff"
    active-text-color="#ffd04b">
    <el-menu-item index="1" route="/">TechTreeMoe</el-menu-item>
    <el-menu-item index="2" route="intro">介紹與教學</el-menu-item>
    <el-menu-item index="3" route="custom">客製化</el-menu-item>
    <el-menu-item index="4" route="about">更新紀錄與詳細資訊</el-menu-item>
    <el-menu-item index="5" route="charts">統計數據與萌化進度</el-menu-item>
  </el-menu>
</template>
<script>
export default {
  data() {
    return {
      activeIndex: "1",
      activeIndex2: "1"
    };
  },
  methods: {
    handleSelect(key, keyPath) {
      console.log(key, keyPath);
    }
  }
};
</script>
<style>
.el-menu--horizontal {
  border-bottom: none;
}
</style>


