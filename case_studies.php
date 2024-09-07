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
          <ul id="owl-demo" style="display:none" class="cf"><li data-item="1" class="item "> <a href="./about.php" class="" title="About Us"><span><i class="menu-icons menu-icons-about"></i></span><span>About Us</span></a></li><li data-item="2" class="item "> <a href="./featured_clients.php" class="" title="Featured Clients"><span><i class="menu-icons menu-icons-client"></i></span><span>Featured Clients</span></a></li><li data-item="3" class="item "> <a href="./choose.php" class="" title="Why Choose us"><span><i class="menu-icons menu-icons-why-choose"></i></span><span>Why Choose us</span></a></li><li data-item="4" class="item "> <a href="./customers_testimonials.php" class="" title="Customers Testimonials"><span><i class="menu-icons menu-icons-testimonial"></i></span><span>Customers Testimonials</span></a></li><li data-item="8" class="item active"> <a href="./case_studies.php" class="active" title="Case Studies"><span><img class="vc_tta-icon" alt="CaseStudy-1.png" src="images/white-CaseStudy.png"></span><span>Case Studies</span></a></li>></ul><a class="child-page-left-arrow"><img src="images/icon-arrow-left-20.png" alt=""></a>
	 <a class="child-page-right-arrow"><img src="images/icon-arrow-right-20.png" alt=""></a>        </div>
      </div>
          </div>
  </div>
</div>
<div class="container"><p id="breadcrumbs" class="breadcrumbs fx" data-animate="fadeInDown"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="./index.php" rel="v:url" property="v:title">Home</a> <span class="arrow1">&gt;</span> <span rel="v:child" typeof="v:Breadcrumb"><a href="./company.php" rel="v:url" property="v:title">Company</a> <span class="arrow1">&gt;</span> <strong class="breadcrumb_last">Case Studies</strong></span></span></span></p></div><script>
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
<div class="container animated fx" data-animate="fadeInUp">
  <div class="">
    <div class="row">
      <div class="main-heading centered marbottom">
        <h1 class="sub-title h4"><span class="gray">Case</span> <span class="main-color"> Studies</span></h1>
        <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
      </div>
    </div>
  </div>
</div>
<div class="container">    
	<div class="row">
	<div class="col-md-12">
		<div class="casestudieslist">        	
                  	
            <div class="case-studies-box post-item col-md-4 fx 9695" data-animate="fadeInUp">				
				<div class="post-image"><a href="https://www.girikon.com/blog/casesstudy/usa-based-healthcare-provider/" class="post-thumbnail"><img width="300" height="211" src="images/Picture7-300x211.jpg" class="attachment-blog-small-image size-blog-small-image wp-post-image wp-post-image" alt="case study" srcset="images/Picture7-300x211.jpg 300w, images/Picture7-768x539.jpg 768w, images/Picture7.jpg 1018w" sizes="(max-width: 300px) 85vw, 300px"><!--<img src="http://www.it-rays.org/superfine/wp-content/uploads/2013/01/119-400x380.jpg" class="attachment-blog-small-image size-blog-small-image wp-post-image" alt="" width="400" height="380">--></a></div>
				<div class="case-studise-icon-heading">
					<div class="case-studise-icon casepadtop"></div>
					<div class="case-studise-title"><a href="https://www.girikon.com/blog/casesstudy/usa-based-healthcare-provider/">USA based Healthcare Provider</a></div>
					<div class="clearfix"></div>
				</div>
				<div class="post-info-container"> 
					The client, a major hospital in the USA with 1500+ staff members, use the Salesforce Platform to manage their day to day activities.				</div>
				<div class="case-studies-box-bottom text-right ">
					<a href="https://www.girikon.com/blog/casesstudy/usa-based-healthcare-provider/" class="btn read-more">Read More</a>
				</div>
			</div>
          
		</div>
   </div>
   </div>
</div>
<style>
.casestudieslist{margin-bottom:30px}
.post-item .post-image {
    position: relative;
    text-align: center;
    display: table;
    width: 100%;
	border-bottom: 5px solid #0e71b6;
	padding: 0px;
    box-shadow: inset 0 0 0px rgba(0,0,0,0);
	margin-top:0px;
}
.post-item{border-top: 0px solid #0e71b6;}
.post-item .post-image, .post-item .slick-slide {
    overflow: hidden;
}
.case-studies-box:hover .post-image {
	border-bottom: 5px solid #f5f5f5;
	transition-duration: 1s,1s;
    transition-delay: 0s,1s;
}
.case-studies-box:hover, .post-item:hover {
    border-top: 0px solid #f5f5f5;
    transition-duration: 1s,1s;
    transition-delay: 0s,1s;
    color: #fff;
}

.post-item .post-content, .post-item .post-content{border-top-color: #a9bf04;}
.post-item .post-content{background: #f5f5f5;}
.post-item .post-info-container {
    padding: 20px 20px 0;
    margin: 0;
    overflow: hidden;
}
.post-item:hover .post-image img, .post-img:hover img {
    transform: scale(1.3);
    -webkit-transform: scale(1.3);
    -moz-transform: scale(1.3);
    -ms-transform: scale(1.3);
}
.post-item .post-image img {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    width: 100%;
    display: table;
}
</style>
<!-- testimonial-->
<?php
include '.\include\clientTestimonials.html';
include '.\include\partners.html';
include '.\include\delighted.html';
include '.\include\contactFooter.html';
include '.\include\footer.html';
?><!-- testimonial-->