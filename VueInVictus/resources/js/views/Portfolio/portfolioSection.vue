<template>
  <div class="blog_section">
    <div class="container">
      <h1 class="display-1 text-center text-uppercase" style="color: purple">Our</h1>
      <div class="text-center display text-primary text-uppercase" >portfolio</div>
      <div class="row">
        <div class="col-md-6 my-3" v-for="portfolio in portfolios" :key="portfolio.id" v-if="loading == false">
          <div class="card" style="width:100%;height:360px ">
            <div class="p-2">
              <img class="card-img-top customimg" :src="'https://new.invictussolutions.co/' + portfolio.image" alt="Card image">
            </div>
             <div class="card-body">
              <router-link :to="{ name: 'portfolioDetail', params: {id: portfolio.id } }"><h5 class="card-title">{{portfolio.title}}</h5></router-link>
              <p class="card-text card-text-style" v-html="portfolio.content"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios';
export default {
name: 'OfferPage',
data(){
  return {
    portfolios:'',
    loading:true
  }
},
created(){
  axios({
  method: 'get',
  url: 'https://new.invictussolutions.co/api/portfoliosData',
})
.then(
  response => {
    console.log(response.data);
    this.portfolios = response.data.portfolios;
    this.loading = false;
  }
);
}
}
</script>
<style scoped>
.customimg{  
  height: 256px;
  width: 516px;
}
</style>
