<template>
  <div class="blog_section">
    <div class="container-fluid p-0 m-0">
      <section class="img-sec head-image" :style="{ backgroundImage: `url('https://new.invictussolutions.co/${portfolio.image}')`}">
        <div class="container">
          <div class="row justify-content-center">
            <h3 class="text-center">{{portfolio.title}}</h3>
          </div>
        </div>
      </section>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-3">
          <div class="card" style="width:100%">
             <div class="card-body">
              <h5 class="card-title">{{portfolio.title}}</h5>
              <p class="card-text card-text-style" v-html="portfolio.content">{{portfolio.content}}</p>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <!-- <img class = "customimg" :src="https://new.invictussolutions.co/ + post.image" alt=""> -->
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
    id:this.$route.params.id,
    portfolio:'',
    loading:true
  }
},
created(){
  axios({
  method: 'get',
  url: `https://new.invictussolutions.co/api/portfolioData/${this.$route.params.id}`,
})
.then(
  response => {
    console.log(response.data);
    this.portfolio = response.data;
    this.loading = false;
  }
);
}
}
</script>
<style scoped>
.head-image{
  	background-repeat: no-repeat;
    background-size: cover;

}
.customimg{  
  height: 256px;
  width: 516px;
}
</style>
