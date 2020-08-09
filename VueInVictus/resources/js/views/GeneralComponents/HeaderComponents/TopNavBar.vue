<template>
  <div class="">
    <nav class="navbar navbar-expand-lg bg-transparent navbar-dark sticky-top ">
       <!-- Brand/logo -->
      <a class="navbar-brand ml-5" href="#">
        <img src="https://new.invictussolutions.co/assets/images/2.jpg" alt="logo" style="width:175px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
        <span class="navbar-toggler-icon"> <i class="fa fa-bars" style="color:#b300b3; font-size:28px;"></i></span>
      </button>
      <!-- Links -->
       <div class="collapse navbar-collapse text-center " id="collapsenavbar">
        <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item">
                  <router-link to="/" exact class="nav-link text-primary"style="border-right: 3px solid yellow;padding: 5px 10px 6px 15px; border-radius: 50px 0px 0px 50px;  ">Home</router-link>
                </li>
                <li class="nav-item dropdown">
                  <router-link to="/about">
                  <a class="nav-link  text-primary dropdown-toggle" href="" style="border-right: 3px solid yellow;padding: 5px 10px 6px 15px " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> About </a>
                </router-link>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><router-link to="/about#values" v-scroll-to="'#values'" class="dropdown-item text-primary" href="#">Our Values</router-link></li>
                  </ul>
              </li>
                <!-- <li class="nav-item">
                  <router-link to="/" class="nav-link text-primary" style="border-right: 3px solid yellow;padding: 5px 10px 6px 15px ">Our Values</router-link>
                </li> -->
                <li class="nav-item">
                  <router-link exact to="/blog" class="nav-link text-primary "style="border-right: 3px solid yellow;padding: 5px 10px 6px 15px ">Blog</router-link>
                </li>
                <li class="nav-item">
                  <router-link exact to="/portfolio" class="nav-link text-primary "style="border-right: 3px solid yellow;padding: 5px 10px 6px 15px ">Porfolio</router-link>
                </li>
                <li class="nav-item">
                  <router-link exact to="/services" class="nav-link text-primary "style="border-right: 3px solid yellow;padding: 5px 10px 6px 15px ">Services</router-link>
                </li>
                <li class="nav-item">
                  <router-link exact to="/career" class="nav-link text-primary "style="border-right: 3px solid yellow;padding: 5px 10px 6px 15px ">Career</router-link>
                </li>
                <li class="nav-item">
                  <router-link exact to="/policy" class="nav-link text-primary"style="border-right: 3px solid yellow;padding: 5px 10px 6px 15px">Our Policy</router-link>
                </li>
                <li class="nav-item">
                  <router-link exact to="/contact" class="nav-link text-primary "style="border-right: 3px solid yellow;padding: 5px 10px 6px 15px;border-radius: 0px 50px 50px 0px;">Get in Touch</router-link>
                </li>
              </ul>
    </div>

    </nav>
  </div>
</template>

<script>
    export default {
    data(){
      return{

      }
    },
    mounted() {
    var section=this.$router.currentRoute.hash.replace("#", "");
    if (section == 'values'){
        this.$nextTick(()=> window.document.getElementById(section).scrollIntoView());
      }
},

    }
</script>
<style lang = "scss">
.router-link-exact-active {
  background-color: #007bff ;
  color:white !IMPORTANT;
}
.router-link-active {
  background-color: #007bff ;
  color:white !IMPORTANT;
}
.router-link-active a{
  background-color: #007bff ;
  color:white !IMPORTANT;
}
.navbar-nav li:hover > ul.dropdown-menu {
    display: block;
}
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top:-6px;
}

/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
    text-decoration: underline;
    transform: rotate(-90deg);
}
</style>
