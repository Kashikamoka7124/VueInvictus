<template>
  <div>
        <navbar/>
      <whyChooseUs/>
      <footerSection/>
  </div>
</template>

<script>
import navbar from '../GeneralComponents/HeaderComponents/TopNavBar'
import whyChooseUs from '../GeneralComponents/ChooseUs/whyChooseUs'
import footerSection from '../GeneralComponents/FooterComponents/footerSection'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{
          navbar,
          whyChooseUs,
          footerSection

        }
    }

</script>
