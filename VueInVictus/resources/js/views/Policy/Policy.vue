<template>
  <div>
      <navbar/>
      <section style="padding: 50px; padding-top: 30px">

        <div class="clause">
        		<div class="title">
        			<h3 style="font-weight: 600">Privacy Policy</h3>
        		</div>

        		<p class="text-justify">
        			Invictussolutions.co is the Web site of Invictus Solutions, the leading software development company in Pakistan. We hope you enjoy your visit. In order to better serve your needs and enhance your overall experience at Invictussolutions.co , we collect certain information about you when you visit us.
        		</p>
        </div>

        <div class="clause">
        		<div class="sub_title">
        			<h6 style="font-weight: 600">How We Protect Your Information</h6>
        		</div>

        		<p class="text-justify">
        		We employ the latest encryption and security technology and fraud detection techniques in all areas of  Invictussolutions.co where you provide us with personal or account information. This is done to protect you from unauthorized use of the information you are sending to our server. To make sure you have the latest security features on your browser, download and install the latest version of your favorite browser. For privacy purposes, once you give us any information relating to you, it is stored on a highly secure server that is not accessible via the Internet.
        		</p>
        </div>

        <div class="clause">
        		<div class="sub_title">
        			<h6 style="font-weight: 600">What Information Do We Collect and How Do We Use It?</h6>
        		</div>

        		<p class="text-justify">
        			When you visit our Web site, our server automatically recognizes your Internet Protocol address (IP address) or domain name. In order to enhance our Web site, we may track the way our visitors and customers are using the site. Personal information, such as your name and e-mail address, is not included in this analysis. Unless you provide it, we do not collect or know your name or e-mail address. We do not follow your browsing path outside of the  Invictussolutions.co network.
        		</p>

        		<p class="text-justify">
        			In addition, like most other e-commerce Web sites, our site uses â€œcookiesâ€ â€” small files placed temporarily in your Internet browser â€” to keep track of your stay at our Web site. The text in a cookie, by itself, only tells us that you have visited our site before. When you place an order, request a catalog, or participate in a promotion or contest, we ask you to provide information including your name, postal address, e-mail address and, in the case of product orders, credit card number. Except to verify credit card information to complete your order, we do not use or release any credit card or financial information for any purpose.
        		</p>

        		<p class="text-justify">
        			If you provide us with your postal address, e-mail address or telephone number, you may receive our catalog or other promotional mailings, e-mails or telephone calls. If you receive an e-mail from us that you would rather not receive, simply follow the unsubscribe instructions set forth at the bottom of each e-mail. If you do not wish to receive our catalog or other promotional, please write to us at the address set forth below or e-mail us at <a href="#"> info@invictussolutions.co </a> We will be happy to respect your request not to participate in our direct marketing programs.
        		</p>
        </div>

        <div class="clause">
        		<div class="sub_title">
        			<h6 style="font-weight: 600">How to Opt-Out of Invictus Solutions Direct Marketing Programs</h6>
        		</div>

        		<p class="text-justify">
        			If you do not wish to receive e-mails from us, please let us know by sending an e-mail containing your exact e-mail address in the body text to Do Not Mail. For your convenience, we reprint this instruction at the bottom of each e-mail we send you so that you may opt-out of our program at any time. If you do not wish to receive postal mailings or telephone calls from us, please let us know by emailing or faxing a letter containing your name and address to:
        		</p>

        		<ul style="list-style: none;">
        			<li>Invictus Solutions PVT Limited</li>
        			<li>31, Regency  Arcade, The Mall, Faisalabad, Pakistan</li>
        			<li>Phone: +92(041)2408084</li>
        			<li>Website: <a href="#">https://invictussolutions.co </a> </li>
        		</ul>

        		<p class="text-justify">
        			To ensure that your request is handled accurately, please include a copy of your catalog label with your request. Make sure to contact us for each address you have left with us. You may also use the above address for any of the following catalog mailing services:
        		</p>

        		<ul style="list-style: none;">
        			<li>To eliminate duplicate catalogs</li>
        			<li>To take your name off our catalog mailing list</li>
        			<li>To update your name and address we will use when we mail you catalogs (If youâ€™re moving, please indicate when the new address will be in effect.)</li>
        		</ul>

        </div>


        <div class="clause">
        		<div class="sub_title">
        			<h6 style="font-weight: 600">LINKS</h6>
        		</div>

        		<p class="text-justify">
        			Our site contains links to other sites not within the  Invictussolutions.co network.  Invictussolutions.co is not responsible for the privacy practices or the content of such Web sites.
        		</p>
        </div>

        <div class="clause">
        		<div class="sub_title">
        			<h6 style="font-weight: 600">CONSENT</h6>
        		</div>

        		<p class="text-justify">
        			By using our Web site, you consent to the collection and use of this information by Invictus Solutions as described in this Policy. If we change our privacy policy we will post any change on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.
        		</p>
        </div>

        <div class="clause">
        		<div class="sub_title">
        			<h6 style="font-weight: 600">Refund Policy</h6>
        		</div>

        		<p class="text-justify">
        			We will notify you of the status of your refund after inspecting the case. If your return is approved, we will initiate a partial or full refund to your method of payment.
        		</p>
        </div>

        </section>
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
