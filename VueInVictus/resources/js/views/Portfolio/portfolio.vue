<template>
  <div>
      <navbar/>
      <topHeader/>
      <portfolio/>
      <footerSection/>
  </div>
</template>

<script>
import navbar from '../GeneralComponents/HeaderComponents/TopNavBar'
import topHeader from '../GeneralComponents/getInTouch/header'
import portfolio from './portfolioSection'
import footerSection from '../GeneralComponents/FooterComponents/footerSection'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{
          navbar,
          topHeader,
          portfolio,
          footerSection
        }
    }

</script>
