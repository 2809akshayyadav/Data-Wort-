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
          <ul id="owl-demo" style="display:none" class="cf"><li data-item="1" class="item "> <a href="./about.php" class="" title="About Us"><span><i class="menu-icons menu-icons-about"></i></span><span>About Us</span></a></li><li data-item="2" class="item active"> <a href="./featured_clients.php" class="active" title="Featured Clients"><span><img class="vc_tta-icon" alt="client-1.png" src="images/white-client.png"></span><span>Featured Clients</span></a></li><li data-item="3" class="item "> <a href="./choose.php" class="" title="Why Choose us"><span><i class="menu-icons menu-icons-why-choose"></i></span><span>Why Choose us</span></a></li><li data-item="4" class="item "> <a href="./customers_testimonials.php" class="" title="Customers Testimonials"><span><i class="menu-icons menu-icons-testimonial"></i></span><span>Customers Testimonials</span></a></li><li data-item="8" class="item "> <a href="./case_studies.php" class="" title="Case Studies"><span><i class="menu-icons menu-icons-CaseStudy"></i></span><span>Case Studies</span></a></li></ul><a class="child-page-left-arrow"><img src="images/icon-arrow-left-20.png" alt=""></a>
	 <a class="child-page-right-arrow"><img src="images/icon-arrow-right-20.png" alt=""></a>        </div>
      </div>
          </div>
  </div>
</div>
<div class="container"><p id="breadcrumbs" class="breadcrumbs fx" data-animate="fadeInDown"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="./index.php" rel="v:url" property="v:title">Home</a> <span class="arrow1">&gt;</span> <span rel="v:child" typeof="v:Breadcrumb"><a href="./company.php" rel="v:url" property="v:title">Company</a> <span class="arrow1">&gt;</span> <strong class="breadcrumb_last">Featured Clients</strong></span></span></span></p></div><script>
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
<div class="container marbottomfull">
  <div class="row">
    <div class="main-heading centered marbottom fx" data-animate="fadeInUp">
      <h1 class="sub-title"><span class="gray">Featured</span> <span class="main-color"> Clients</span></h1>
      <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/blackboard.jpg" alt="blackboard"></div>
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/informa.jpg" alt="Informa"></div>
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/tgen.jpg" alt="tgen"></div>
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/methode.jpg" alt="methode"></div>
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/five-9.jpg" alt="Five-9"></div>
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/world-learning.jpg" alt="world-learning"></div>
  </div>
  <div class="row">
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/ringcentral.jpg" alt="ringcentral"></div>
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/hp-logo.jpg" alt="hp"></div>
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/omnicom-logo.jpg" alt="omnicom"></div>
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/total-med.jpg" alt="total-med"></div>
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/protoexpress-logo.png" alt="protoexpress"></div>
    <div class="col-md-2 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200"><img class="img-responsive" src="images/meals-and-wheels.png" alt="Meals and Wheels"></div>
  </div>
</div>
<?php
include '.\include\clientTestimonials.html';
include '.\include\partners.html';
include '.\include\delighted.html';
include '.\include\contactFooter.html';
include '.\include\footer.html';
?><!-- testimonial-->