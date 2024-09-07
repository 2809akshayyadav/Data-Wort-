<?php
include '.\include\base.html';
include '.\include\header.html';
?>
<div class="clearfix"></div>
<div class="header-height-115"></div><div class="container-fluid inner-page-nav"><!-- child-page-links -->
  <div class="row my-own-nav">
    <div class="title-container">
            <div class="mybreadcrumbs fx" data-animate="fadeInDown">
        <div class="inner">
          <ul id="owl-demo" style="display:none" class="cf"><li data-item="1" class="item "> <a href="./about.php" class="" title="About Us"><span><i class="menu-icons menu-icons-about"></i></span><span>About Us</span></a></li><li data-item="2" class="item "> <a href="./featured_clients.php" class="" title="Featured Clients"><span><i class="menu-icons menu-icons-client"></i></span><span>Featured Clients</span></a></li><li data-item="3" class="item active"> <a href="./choose.php" class="active" title="Why Choose us"><span><img class="vc_tta-icon" alt="why-choose-1.png" src="images/white-why-choose.png"></span><span>Why Choose us</span></a></li><li data-item="4" class="item "> <a href="./customers_testimonials.php" class="" title="Customers Testimonials"><span><i class="menu-icons menu-icons-testimonial"></i></span><span>Customers Testimonials</span></a></li><li data-item="8" class="item "> <a href="./case_studies.php" class="" title="Case Studies"><span><i class="menu-icons menu-icons-CaseStudy"></i></span><span>Case Studies</span></a></li></ul><a class="child-page-left-arrow"><img src="images/icon-arrow-left-20.png" alt=""></a>
	 <a class="child-page-right-arrow"><img src="images/icon-arrow-right-20.png" alt=""></a>        </div>
      </div>
          </div>
  </div>
</div>
<div class="container"><p id="breadcrumbs" class="breadcrumbs fx" data-animate="fadeInDown"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="./index.php" rel="v:url" property="v:title">Home</a> <span class="arrow1">&gt;</span> <span rel="v:child" typeof="v:Breadcrumb"><a href="./company.php" rel="v:url" property="v:title">Company</a> <span class="arrow1">&gt;</span> <strong class="breadcrumb_last">Why Choose us</strong></span></span></span></p></div><script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script src="js/api_1.js"></script>
    <div>
        <link rel="stylesheet" id="style_assets" href="css/home-slide.css" type="text/css">
        <link rel="stylesheet" id="style_assets" href="css/flexslider.css" type="text/css">
        <link rel="stylesheet" id="style_assets" href="css/assets.css" type="text/css">
    </div>
<div class="container marbottomfull animated fadeInUp">
  <div class="">
    <div class="row">
      <div class="main-heading centered marbottom">
        <h1 class="sub-title"><span class="gray">Why</span> <span class="main-color">Choose Us</span></h1>
        <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
      </div>
    </div>
  </div>
  <div class="col-md-12 fx centered animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200" style="animation-delay: 200ms;">
    <h2 class="heading-style">We Listen</h2>
    <p class="para-style">We know how important IT needs are to everyday operations for all business; which is why, at Girikon, we take the time to understand your requirements and work diligently to provide the best possible solutions to meet your needs.</p>
    <h2 class="heading-style">We treat you like partners</h2>
    <p class="para-style">This is an important thing for us at Girikon. We realize that you have a lot riding on your IT needs, large or small.</p>
<p class="para-style">We understand that without your partnership, our organization will not realise it’s vision. At Girikon you will find a group of people excited about getting to know all about you and your organization &amp; how we can partner with you provide you with a quality outcome.</p>  
    <h2 class="heading-style">We are innovative</h2>
    <p class="para-style">Every day our teams find themselves in environments where innovation is requirement. Our customers are always looking for innovative ideas. Our philosophy “brainstorm all ideas, keep the great ones, and not continue with ones that are not seen as beneficial.” This philosophy works each and every time and Girikon guarantees it will work for you. Actions speak louder than words and therefore our testimonials from happy clients can validate this philosophy.</p>
    
    <h2 class="heading-style">We are responsive</h2>
    <p class="para-style">The phrase “time is money” is as true today as it has always been. We know how valuable your time is and that when you have an idea or question you need to hear from us. We will respond to all requests, queries or actions each and every time. We will take the time to listen to you and work with you to help develop a plan of action for to satisfy your needs. We understand how frustrating it is you do not get a response therefore our commitment to you is that we respond to your requests as quickly as humanly possible.</p>
    
    <h2 class="heading-style">We believe in values:</h2>
    <p class="para-style">Our priorities are completing great work, treating our people with a high regard, and meeting our clients’ expectations each and every time. Our big idea is really pretty simple, we want to become one organization comprised of the right people who help organizations move forward by finding intelligent &amp; simplified solutions.</p>
  <p class="para-style">Our working culture is:</p>
    <p class="para-style text-center"><b>People + Process + Technology = Customer Satisfaction</b></p>
    <h2 class="heading-style">We are Global</h2>
    <p class="para-style">Our priority is to support you and are now available for you in USA, India, Australia, UK, and Singapore.</p>
  </div>
  

</div>
<?php
include '.\include\clientTestimonials.html';
include '.\include\partners.html';
include '.\include\delighted.html';
include '.\include\contactFooter.html';
include '.\include\footer.html';
?><!-- testimonial-->