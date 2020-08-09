<template>
  <div>
      <navbar/>
      <!-- <topHeader/>
      <blog/> -->
      <div class="section md-padding bg-grey" id="career">


    <div class="container">

      <!-- <div class="row justify-content-center" >
  			<h1 class="display-1 text-center">Career At invictus Solutions </h1>
        Drop your CV at <b style="color: #000;">career@invictussolutions.co</b>
  		<div class="display yellow-text text-center">WHAT WE BELIEVE IN VALUES</div>
  		</div> -->
        <div class="row justify-content-center">


            <div class="section-header text-center">
                <h2 class="title">Career At invictus Solutions </h2>
                Drop your CV at <b style="color: #000;">career@invictussolutions.co</b>
            </div>

        </div>


        <div class="row" style="margin-top:30px;margin-bottom:30px;">
            <div class="col-md-6">
                <h4 class="title">Join our Best Team</h4>
                <p>Working at InvictusSolutions is something other than a vocation—it's a chance to be a piece of something greater. Our work is having any kind of effect in the lives of millions around the globe. Through diligent work, determination, and profound responsibility we transform restricted assets into groundbreaking arrangements.</p>
                <p>At InvictusSolutions we trust that through philanthropic acts we make known the simply, lenient and cherishing character of God. In spite of the fact that we work as a corporate office, our association with the Adventist church gives us an elevated promise to what we do. We meet up as a network with a craving to change the world, while urging our staff to flourish both professionally and by and by.</p>

            </div>
            <div class="col-md-6">
                <h4 class="title">Benifits</h4>
                <p><strong>Working at Invictus Solutions has its advantages! Here is the thing that our workplace brings to the table you:</strong></p>
                <ul style="list-style: none;">
                    <li><span class="fa fa-angle-double-right main-color"> </span> Chance to enable networks and people.</li>
                    <li><span class="fa fa-angle-double-right main-color"> </span> Steady partners that watch over each other past the working environment.</li>
                    <li><span class="fa fa-angle-double-right main-color"> </span> Ground breaking outlook open to new thoughts and advancements.</li>
                    <li><span class="fa fa-angle-double-right main-color"> </span> Adaptable and family-situated work life adjust.</li>
                    <li><span class="fa fa-angle-double-right main-color"> </span> The opportunity to step up and develop professionally.</li>
                </ul>
            </div>
        </div>


    </div>


</div>
      <footerSection/>
  </div>
</template>

<script>
import navbar from '../GeneralComponents/HeaderComponents/TopNavBar'
// import topHeader from '../GeneralComponents/getInTouch/header'
// import blog from '../GeneralComponents/getInTouch/blog'
import footerSection from '../GeneralComponents/FooterComponents/footerSection'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{
          navbar,
          // topHeader,
          // blog,
          footerSection
        }
    }

</script>
