<template>
    <div id="preview" class="main">
        <Carousel v-model="carouselIndex" loop>
            <CarouselItem class="previewImage" :on-change="changeCarousel(carouselIndex)" v-for="nation in nations" :key="nation.index" :style="{background: 'url(img/preview/' + nation.code + '.jpg) center no-repeat', 'background-size': 'contain', height: 'calc(100vh - 90px)'}">
                <router-link to="/">
                    <Icon type="close" size="20"></Icon>
                </router-link>
                <h1>{{previewTitle}}</h1>
            </CarouselItem>
        </Carousel>
    </div>
</template>
<script>
export default {
  name: 'preview',
  data() {
    return {
      carouselIndex: 0,
      previewTitle: '效果預覽',
      nations: [
        {
          index: 0,
          code: 'japan',
          local: '日本'
        },
        {
          index: 1,
          code: 'usa',
          local: '美國'
        },
        {
          index: 2,
          code: 'germany',
          local: '德國'
        },
        {
          index: 3,
          code: 'ussr',
          local: '蘇聯'
        },
        {
          index: 4,
          code: 'uk',
          local: '英國'
        },
        {
          index: 5,
          code: 'france',
          local: '法國'
        },
        {
          index: 6,
          code: 'italia',
          local: '義大利'
        },
        {
          index: 7,
          code: 'commonwealth',
          local: '聯邦'
        },
        {
          index: 8,
          code: 'pan_asia',
          local: '泛亞'
        },
        {
          index: 9,
          code: 'poland',
          local: '波蘭'
        },
        {
          index: 10,
          code: 'arp',
          local: '蒼藍鋼鐵戰艦'
        },
        {
          index: 11,
          code: 'haifuri',
          local: '高校艦隊'
        }
      ]
    }
  },
  methods: {
    changeCarousel(id) {
      this.previewTitle = this.nations[id].local + '預覽'
    }
  }
}
</script>
<style lang="scss">
#preview {
  background-color: #25323a;
  .previewImage {
    h1 {
      text-align: center;
      color: #fff;
    }
    a {
      color: #fff;
      float: right;
      margin: 10px;
    }
  }
}
</style>
