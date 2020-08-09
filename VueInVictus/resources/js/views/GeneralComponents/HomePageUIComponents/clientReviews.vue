<template>

  <div class="main">
  <div class="container">
    <h1 class="display-1 text-white text-center">WHAT OUR</h1>
    <div class="text-center display" style="color: yellow">CLIENTS ARE SAYING</div>
    <div class="row justify-content-center">
      <div class="col-md-12">
        <b-carousel
           id="carousel-1"
           v-model="slide"
           :interval="4000"
           controls
           background="#1565C0"
           img-width="1024"
           img-height="320"
           style="text-shadow: 1px 1px 2px #333;"
           @sliding-start="onSlideStart"
           @sliding-end="onSlideEnd"
         >
           <!-- Text slides with image -->
           <b-carousel-slide v-for="item in reviews" img-blank :key="item.id"

           >
           <div class="row justify-content-center">
             <div class="col-md-8 text-white text-center mt-4">
              {{item.review}}
               <h4 class="display-6 text-white text-center my-2">{{item.name}}</h4>
             </div>
           </div>
           <div class="row">
             <img :src="'https://new.invictussolutions.co/'+item.image" class="mx-auto d-block rounded-circle" style="width: 150px; height: 150px;" alt="Cinque Terre">
           </div>
         </b-carousel-slide>

         </b-carousel>
      </div>
    </div>
  </div>
  </div>

</template>
<script>
export default {
name: 'OfferPage',
props:['reviews'],
data(){
  return {
    slide: 0,
    sliding: null
  }
},
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
