<template>
  <div class="blog_section">
    <div class="container-fluid p-0 m-0">
      <section class="img-sec head-image" :style="{ backgroundImage: `url('https://new.invictussolutions.co/${post.image}')`}">
        <div class="container">
          <div class="row justify-content-center">
            <h3 class="text-center">{{post.title}}</h3>
          </div>
        </div>
      </section>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 my-3">
          <div class="card" style="width:100%">
             <div class="card-body">
              <h5 class="card-title">{{post.title}}</h5>
              <p class="card-text card-text-style" v-html="post.content">{{post.content}}</p>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <!-- <img :src="https://new.invictussolutions.co/ + post.image" alt=""> -->
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
    post:'',
    loading:true
  }
},
created(){
  axios({
  method: 'get',
  url: `https://new.invictussolutions.co/api/postData/${this.$route.params.id}`,
})
.then(
  response => {
    console.log(response.data);
    this.post = response.data;
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
</style>
