<template>
  <div>
      <navbar/>
      <topHeader/>

      <OfferComponent/>
      <footerSection/>
  </div>
</template>

<script>
import navbar from '../GeneralComponents/HeaderComponents/TopNavBar'
import OfferComponent from './OfferComponent'
import topHeader from '../GeneralComponents/getInTouch/header'
import footerSection from '../GeneralComponents/FooterComponents/footerSection'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{
          navbar,
          topHeader,
          OfferComponent,
          footerSection
        }
    }

</script>
