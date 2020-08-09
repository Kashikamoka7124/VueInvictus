<template>
  <div class="blog_section">
    <div class="container">
      <h1 class="display-1 text-center text-uppercase" style="color: purple">Our</h1>
      <div class="text-center display text-primary text-uppercase" >Blogs</div>
      <div class="row">
        <div class="col-md-6 my-3" v-for="post in posts" :key="post.id">
          <div class="card" style="width:100%;height:360px ">
            <div class="p-2">
              <img class="card-img-top customimg" :src="'https://new.invictussolutions.co/' + post.image" alt="Card image">
            </div>
             <div class="card-body">
              <router-link :to="{ name: 'post', params: {id: post.id } }"><h5 class="card-title">{{post.title}}</h5></router-link>
              <p class="card-text card-text-style">{{post.description.substring(0,76)}}</p>
            </div>
          </div>
        </div>
        <div class="col-md-12 my-4 text-center">
          <div class="text-center section-button">
           <router-link to="/blog" class="section-button"  type="button">
               Learn More</router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
name: 'OfferPage',
props:['posts']
}
</script>
<style scoped>


.customimg{
  
  height: 256px;
  width: 516px;
  
}

</style>
