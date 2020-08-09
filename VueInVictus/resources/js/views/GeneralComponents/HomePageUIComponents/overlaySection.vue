<template>

  <div style="padding-top: 40px; padding-bottom: 40px; background-image: url(assets/images/home/11.png); background-repeat: no-repeat; background-size: cover;-webkit-filter: grayscale(70%);
    filter: grayscale(70%);">
   <div class="container">
     <div class="row justify-content-center" >
      <div class="col-md-3 text-center">
        <i class="fa fa-users" aria-hidden="true" style="font-size: 40px;  color: white"></i>
        <h3 class="display-6 yellow-text pt-2 " >{{clients}}</h3>
        <h5 class="yellow-text mx-auto">Happy Clients</h5>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa-trophy" aria-hidden="true" style="font-size: 40px; color: white"></i>
         <h3 class="display-6 yellow-text pt-2 " >{{affiliations}}</h3>
        <h5 class="yellow-text" >Affiliations</h5>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa-coffee" aria-hidden="true" style="font-size: 40px; color: white"></i>
         <h3 class="display-6 yellow-text pt-2" >{{cups}}+</h3>
        <h5 class="yellow-text">Cups of coffee</h5>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa fa-sticky-note" aria-hidden="true" style="font-size: 40px;  color: white"></i>
         <h3 class="display-6 yellow-text pt-2" >{{projects}}</h3>
        <h5 class="yellow-text">Projects completed</h5>
      </div>

    </div>

   </div>
  </div>

</template>
<script>
export default {
name: 'OfferPage',
props:['homeData'],
data(){
    return {
      cups:'',
      affiliations:'',
      projects:'',
      clients:''
    }
},
created(){
  this.cups = this.homeData.cups;
  this.affiliations = this.homeData.affiliations;
  this.projects = this.homeData.projects;
  this.clients = this.homeData.clients;
}
}
</script>
<style scoped>

</style>
