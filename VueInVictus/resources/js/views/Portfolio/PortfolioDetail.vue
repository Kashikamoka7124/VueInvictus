<template>
  <div>
      <navbar/>
      <!-- <topHeader/> -->
      <detailSection/>
      <footerSection/>
  </div>
</template>

<script>
import navbar from '../GeneralComponents/HeaderComponents/TopNavBar'
import topHeader from '../GeneralComponents/getInTouch/header'
import detailSection from './detailSection'
import footerSection from '../GeneralComponents/FooterComponents/footerSection'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{
          navbar,
          topHeader,
          detailSection,
          footerSection
        }
    }

</script>
