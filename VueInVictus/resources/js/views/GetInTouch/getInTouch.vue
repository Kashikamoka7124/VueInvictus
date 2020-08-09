<template>
  <div>
      <navbar/>
      <contactUsSection/>

      <footerSection/>
  </div>
</template>

<script>
import navbar from '../GeneralComponents/HeaderComponents/TopNavBar'
import contactUsSection from '../GeneralComponents/getInTouch/contactUsSection'
import footerSection from '../GeneralComponents/FooterComponents/footerSection'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{
          navbar,
          contactUsSection,
          // topHeader,
          // blog,
          footerSection
        }
    }

</script>
