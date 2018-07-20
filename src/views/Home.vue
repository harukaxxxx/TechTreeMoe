<template>
  <div class="home">
     <h1 class="top-title">{{$t("top.title")}}</h1>
    <p>{{$t("top.description")}}</p>
    <router-link to="preview">
      <Button shape="circle" long>{{$t("top.preview")}}</Button>
    </router-link>
  </div>
</template>

<script>
export default {
  name: 'home',
  beforeMount() {
    if (window.location.search && process.env.NODE_ENV !== 'production') {
      window.location.href = window.location.origin + '#/charts' + window.location.search
    }
  }
}
</script>
<style lang="scss">
.home {
  height: calc(100vh - 94px);
  overflow-y: auto;
  background: {
    image: url('../assets/hero_bg.png');
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