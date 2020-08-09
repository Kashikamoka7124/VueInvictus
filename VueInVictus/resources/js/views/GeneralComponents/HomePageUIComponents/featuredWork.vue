<template>
  <div class="main mt-n5">
     <h1 class="display-1 text-white text-center">FEATURED</h1>
    <div class="text-center display" style="color: yellow">WORK</div>
    <!-- The slideshow -->
    <div class="container">
      <b-carousel
         id="carousel-1"
         v-model="slide"
         :interval="4000"
         controls
         background="#1565C0"
         img-width="1024"
         img-height="480"
         style="text-shadow: 1px 1px 2px #333;"
         @sliding-start="onSlideStart"
         @sliding-end="onSlideEnd"
       >
         <!-- Text slides with image -->
         <b-carousel-slide v-for="item in portfolio" :key="item.id"

           :img-src="'https://new.invictussolutions.co/' + item.image"
         >
        <router-link :to="{ name: 'portfolioDetail', params: {id: item.id } }"  style="text-decoration:none;">  <h4 class="text-white">{{item.title}}</h4> </router-link>
       </b-carousel-slide>

       </b-carousel>

  </div>
</div>

</template>
<script>
  export default {
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    props:['portfolio'],

    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
  }
</script>
<style scoped>

</style>
