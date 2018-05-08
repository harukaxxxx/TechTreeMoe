<template>
  <div id="top" class="main">
    <h1 class="top-title">{{appTitle}}</h1>
    <p>{{appDescription}}</p>
    <router-link to="preview">
      <Button shape="circle" long>效果預覽</Button>
    </router-link>
  </div>
</template>
<script>
export default {
  name: 'top',
  data() {
    return {
      appTitle: 'TechTreeMoe - 戰艦世界科技樹萌化',
      appDescription: '結合艦隊收藏、戰艦少女、鋼鐵少女、碧藍航線、最終戰艦、Victory Belles以及同人作品，讓科技樹萌起來吧！'
    }
  },
  beforeMount() {
    if (window.location.search && process.env.NODE_ENV !== 'production') {
      window.location.href = window.location.origin + '#/charts' + window.location.search
    }
  }
}
</script>
<style lang="scss">
#top {
  background: {
    image: url('/static/images/hero_bg.png');
    color: #1e5b94;
    size: contain;
    position: center center;
    repeat: no-repeat;
  }
  color: #fff;
  text-align: center;
  .top-title {
    margin-top: calc(40vh - 80px);
    font-size: xx-large;
    border: 2px solid #fff;
    padding: 20px;
    display: inline-block;
  }
  p {
    margin: 15px 0;
  }
  button {
    width: 30%;
  }
}
</style>
