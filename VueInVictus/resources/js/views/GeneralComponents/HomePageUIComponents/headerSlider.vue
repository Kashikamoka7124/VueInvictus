<template>
  <div class="container-fluid m-0 p-0">
    <div class=" top-banner-section">

        <div><img src="assets/images/home/28.png" alt="" class="img-fluid"></div>
    </div>
    <div class=" header-text text-center">
      <router-link to="/contact">
      <button type="button" class="banner-btn text-primary   ">Get in Touch</button>
    </router-link>
    <router-link to="/about">
      <button type="button" class="banner-btn text-primary  " >About us</button>
    </router-link>
    </div>
  </div>

</template>
<script>
import Slider from 'vue-plain-slider'

export default {
name: 'slider-demo',
components: { Slider },
methods: {
  onSlideChangeStart (currentPage, el) {
    console.log('onSlideChangeStart', currentPage, el);
  },
  onSlideChangeEnd (currentPage, el) {
    console.log('onSlideChangeEnd', currentPage, el);
  }
}
}
</script>
<style scoped>

</style>
