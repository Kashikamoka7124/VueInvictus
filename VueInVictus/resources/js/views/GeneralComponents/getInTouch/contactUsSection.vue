<template>
  <div class="contact-us-section">
    <h1 class="display-1 text-center" style="color: purple">GET</h1>
    <div class="text-center display text-primary" >IN TOUCH</div>
    <div class="container ">

      <div class="row mt-5 mb-5 mx-md-5">
        <div class="col-md-6  mt-4">
          <div class="row">
            <div class="col-lg-6">
              <div class="md-form">
                 <input type="text" id="form-name" class="form-control  mb-3" placeholder="Your name">
               </div>
            </div>
            <div class="col-lg-6">
              <div class="md-form">
                <input type="text" id="form-email" class="form-control mb-3" placeholder="Your email">
              </div>
            </div>
          </div>
            <div class="md-form">
              <input type="text" id="form-Subject" class="form-control mb-3" placeholder="Subject">
            </div>
            <div class="form-group">
             <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <div class="text-center mt-4">
              <!-- <button class="btn btn-light-blue">Submit</button> -->
              <button type="button" class="btn btn-block   btn-primary" >Submit</button>
            </div>
        </div>
        <div class="col-md-6 ml-auto">
          <!--Card content-->
        <div class="card-body card-body-cascade text-center">
          <!--Google map-->
          <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.726213245124!2d73.08724791448017!3d31.421668559154526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922695036afbba7%3A0x3b0fb64f9ec3a217!2sInvictus%20Solutions%20(Pvt.)%20Ltd!5e0!3m2!1sen!2s!4v1594448087693!5m2!1sen!2s" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <!--/.Card content-->
        </div>
      </div>
      <div class="row mt-5 text-left mx-5">
        <div class="col-lg-4 col-md-6 mt-3">
          <h6 class="text-purple text-uppercase">Head office</h6>
          <h3 class="text-purple text-uppercase ">FAISALABAD</h3>
          <p class="text-purple">
           <i class="fa fa-phone" aria-hidden="true"></i> + 92 123 987</p>
          <p class="text-purple">
           <i class="fa fa-envelope-o" aria-hidden="true"></i> info@invictus solution.com</p>
           <p class="text-purple">
           <i class="fa fa-map-marker" aria-hidden="true"></i> 31, Regency Arcade, The Mall, Fasisalabad,PAKISTAN</p>
        </div>
         <div class="col-lg-4 col-md-6 mt-3">
          <h6 class="text-purple text-uppercase">sub office</h6>
          <h3 class="text-purple text-uppercase">LAHORE</h3>
          <p class="text-purple">
           <i class="fa fa-phone" aria-hidden="true"></i> + 92 123 987</p>
          <p class="text-purple">
           <i class="fa fa-envelope-o" aria-hidden="true"></i>  info@invictus solution.com</p>
           <p class="text-purple">
           <i class="fa fa-map-marker" aria-hidden="true"></i> Road Garden Block,New Garden Town, Lahore,PAKISTAN.54660</p>
        </div> <div class="col-lg-4 col-md-6 mt-3">
          <h6 class="text-purple text-uppercase">sub office</h6>
          <h3 class="text-purple text-uppercase">ISLAMABAD</h3>
          <p class="text-purple">
           <i class="fa fa-phone" aria-hidden="true"></i> + 92 123 987</p>
          <p class="text-purple">
           <i class="fa fa-envelope-o" aria-hidden="true"></i>  info@invictus solution.com</p>
           <p class="text-purple">
           <i class="fa fa-map-marker" aria-hidden="true"></i> 26, 3rd Floor, Al-Anayat Mall G-11 Makaz Islamabad,PAKISTAN</p>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <h6 class="text-purple text-uppercase">sub office</h6>
          <h3 class="text-purple text-uppercase">USA </h3>
          <p class="text-purple">
           <i class="fa fa-envelope-o" aria-hidden="true"></i>  info@invictus solution.com</p>
           <p class="text-purple">
           <i class="fa fa-map-marker" aria-hidden="true"></i> 1659 Scott Blvd. Suite 255 Santa Clara, CA 95050</p>
        </div>
              <div class="col-lg-4 col-md-6 mt-3">
          <h6 class="text-purple text-uppercase">sub office</h6>
          <h3 class="text-purple text-uppercase">Dubai</h3>
          <p class="text-purple">
           <i class="fa fa-envelope-o" aria-hidden="true"></i>info@invictussolutions.com</p>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <h6 class="text-purple text-uppercase">sub office</h6>
          <h3 class="text-purple text-uppercase">London</h3>
          <p class="text-purple">
           <i class="fa fa-envelope-o" aria-hidden="true"></i>info@invictussolutions.co</p>
        </div>
    </div>
    </div>
    </div>
  </div>
</template>
<script>
export default {
name: 'OfferPage',
}
</script>
<style scoped>

</style>
