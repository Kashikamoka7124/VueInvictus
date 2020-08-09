<template>
  <div>
      <navbar/>
      <topHeader/>
      <blog/>
      <footerSection/>
  </div>
</template>

<script>
import navbar from '../GeneralComponents/HeaderComponents/TopNavBar'
import topHeader from '../GeneralComponents/getInTouch/header'
import blog from './blogSection'
import footerSection from '../GeneralComponents/FooterComponents/footerSection'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{
          navbar,
          topHeader,
          blog,
          footerSection
        }
    }

</script>
