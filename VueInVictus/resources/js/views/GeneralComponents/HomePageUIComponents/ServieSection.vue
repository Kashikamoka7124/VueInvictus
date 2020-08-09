<template>
  <div class="ServieSection  container-fluid">
   <h1 class="display-1 text-white text-center">INDUSTRIES</h1>
    <div class="text-center display" style="color: yellow;">WE SERVE</div>
    <div class="container-fluid p-5">
      <vueper-slides
      class="no-shadow"
      :visible-slides="5"
      slide-multiple
      :gap="3"
      :arrows="false"
      :bullets="false"
      :autoplay="true"
      :slide-ratio="1 / 5"
      :dragging-distance="200"
      fixed-height="260px"
      :breakpoints="{ 800: { visibleSlides: 2, slideMultiple: 2 },550: { visibleSlides: 1, slideMultiple: 1 }  }">
      <vueper-slide v-for="i in industries"
       :key="i.id"
       :title="i.title"
       :image="'https://new.invictussolutions.co/'+ i.image"
       :style='"color:white; padding-top:225px"'
      />
    </vueper-slides>
    </div>
  </div>
</template>
<script>
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'
export default {
  components: { VueperSlides, VueperSlide },
  props:['industries'],
  data(){
    return {
  }
  }
 }
</script>
<style scoped>

</style>
