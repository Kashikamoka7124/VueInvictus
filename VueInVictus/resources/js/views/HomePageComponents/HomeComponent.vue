<template>
  <div class="container-fluid  p-0">
        <navbar/>
        <headerSlider/>
        <OfferComponent/>
        <featuredWork :portfolio="this.portfolio" v-if="this.loading == false" />
        <ServieSection :industries="this.industries" v-if="this.loading == false" />
        <overlaySection :homeData="this.homeData" v-if="this.loading == false" />
        <clientReviews :reviews="this.reviews" v-if="this.loading == false" />
        <blogSection :posts="this.posts" v-if="this.loading == false"/>
        <contactUsSection/>
        <footerSection/>
  </div>
</template>

<script>
import navbar from '../GeneralComponents/HeaderComponents/TopNavBar'
import headerSlider from '../GeneralComponents/HomePageUIComponents/headerSlider'
import OfferComponent from '../GeneralComponents/HomePageUIComponents/OfferComponent'
import featuredWork from '../GeneralComponents/HomePageUIComponents/featuredWork'
import ServieSection from '../GeneralComponents/HomePageUIComponents/ServieSection'
import overlaySection from '../GeneralComponents/HomePageUIComponents/overlaySection'
import blogSection from '../GeneralComponents/HomePageUIComponents/blogSection'
import clientReviews from '../GeneralComponents/HomePageUIComponents/clientReviews'
import contactUsSection from '../GeneralComponents/HomePageUIComponents/contactUsSection'
import footerSection from '../GeneralComponents/FooterComponents/footerSection'
import axios from 'axios';
    export default {
        mounted() {
        },
        data(){
          return {
            loading:true,
            homeData: '',
            reviews:'',
            industries:'',
            portfolio:'',
            posts:''
          }
        },
        components:{
          navbar,
          headerSlider,
          OfferComponent,
          featuredWork,
          ServieSection,
          overlaySection,
          clientReviews,
          blogSection,
          contactUsSection,
          footerSection
        },
        created(){
          axios({
          method: 'get',
          url: 'https://new.invictussolutions.co/api/homeData',
        })
        .then(
          response => {
            console.log(response.data);
            this.industries = response.data.industries;
            this.homeData = response.data.content;
            this.portfolio = response.data.portfolio;
            this.reviews = response.data.reviews;
            this.posts = response.data.posts;
            this.loading = false;
          }
        );
        }

    }

</script>
