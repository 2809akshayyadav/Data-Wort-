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
          <ul id="owl-demo" style="display:none" class="cf"><li data-item="1" class="item active"> <a href="./about.php" class="active" title="About Us"><span><img class="vc_tta-icon" alt="about-1.png" src="images/white-about.png"></span><span>About Us</span></a></li><li data-item="2" class="item "> <a href="./featured_clients.php" class="" title="Featured Clients"><span><i class="menu-icons menu-icons-client"></i></span><span>Featured Clients</span></a></li><li data-item="3" class="item "> <a href="./choose.php" class="" title="Why Choose us"><span><i class="menu-icons menu-icons-why-choose"></i></span><span>Why Choose us</span></a></li><li data-item="4" class="item "> <a href="./customers_testimonials.php" class="" title="Customers Testimonials"><span><i class="menu-icons menu-icons-testimonial"></i></span><span>Customers Testimonials</span></a></li><li data-item="8" class="item "> <a href="./case_studies.php" class="" title="Case Studies"><span><i class="menu-icons menu-icons-CaseStudy"></i></span><span>Case Studies</span></a></li></ul><a class="child-page-left-arrow"><img src="images/icon-arrow-left-20.png" alt=""></a>
	 <a class="child-page-right-arrow"><img src="images/icon-arrow-right-20.png" alt=""></a>        </div>
      </div>
          </div>
  </div>
</div>
<div class="container">
    <p id="breadcrumbs" class="breadcrumbs fx" data-animate="fadeInDown"><span
        xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="./index.php"
            rel="v:url" property="v:title">Home</a> <span class="arrow1">&gt;</span><a href="./company.php"
            rel="v:url" property="v:title">Company</a> <span class="arrow1">&gt;</span> <strong
            class="breadcrumb_last">About</strong></span></span></p>
  </div>
  <script>
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
  <div class="">
    <div class="row">
      <div class="main-heading centered marbottom fx" data-animate="fadeInUp">
        <h1 class="sub-title"><span class="gray">About</span> <span class="main-color">Us</span></h1>
        <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
      </div>
    </div>
  </div>
  <div class="col-md-12 fx centered" data-animate="fadeInUp" data-animation-delay="200" data-animation-duration="200" style="animation-delay: 200ms;">
    
    <p class="para-style">Girikon enables our clients and partners to maximize their business success through their people, a disciplined approach, technical experience and knowledge. Girikon is exceptional at Information Technology Consulting and Developing world-class software. Girikon is now Global and is based out of US, Phoenix, Arizona with a development centre in Noida, India and offices in Melbourne, Australia.</p>	
	<p class="para-style">Girikon is a Salesforce Consulting, Oracle Gold, Microsoft Gold Application Development and Adobe Technology Partner. Apart from this, we are also ISO 9001, ISO 14001 and ISO 27001 certified, which ensures high quality standards in terms of service delivery. We support all the latest technology platforms and provide additional boutique services such as Data Management, Data Mining, AI etc.</p>
	<p class="para-style">Our customers and services are many and varied, from Fortune 500 companies implementing large E-Business programs to small-medium enterprises implementing sophisticated solutions to gain a competitive advantage. We are also trusted partners to many more than our featured list and believe in and delivering scalable and simplified solutions at a competitive cost.</p>
	<p class="para-style">Girikon’s team comprises of 300+ dynamic, seasoned and qualified professionals who have a vast experience in Information Technology, experience with leading Technology Platforms and vast industry experience. We boast greater than 200 Salesforce consultants and 400+ Salesforce Certifications, We are proud of our Strong Customer Testimonials and have delivered over 400 quality projects on time and on budget.</p>
	<p class="para-style">Our Global network of offices allows Girikon to quickly respond to customer’s requirements with a view to effectively delivering a quality product and service. Girikon also works with its Partner Success Managers to continue developing expertise on latest offerings from our technology partners e.g. Salesforce Einstein, MuleSoft, Commerce Cloud etc. ensuring that our customers can leverage the technology platform to its full potential.</p>
	
	<h2 class="heading-style">Our Ingredients for Success</h2>
	<p class="para-style text-center"><strong>People + Processes + Technology = Customer Satisfaction</strong></p>
	
	<h3 class="heading-style">Our People – Foundation</h3>
	<ul class="para-list">
		<li><i class="fa fa-adjust"></i> We focus on building strong thriving team members “Girikonites”
</li>
		<li><i class="fa fa-adjust"></i> We provide opportunities to our team members through training which enables diversity and retention.</li>
	</ul>
	<h3 class="heading-style">Our Processes – Discipline</h3>
	<ul class="para-list">
		<li><i class="fa fa-adjust"></i> Strong Project Management, nimble and agile methods sets us apart from our competition</li>
		<li><i class="fa fa-adjust"></i> Our processes enable successful project execution and nimble so can pivot when there is change</li>
	</ul>
	<h3 class="heading-style">Our Technology – Knowledge &amp; Experience</h3>
	<ul class="para-list">
		<li><i class="fa fa-adjust"></i> Knowledge of cutting edge IT solutions</li>
		<li><i class="fa fa-adjust"></i> Our strength is in Salesforce Consultancy and Administration, Cloud Solutions, Marketing Automation and many more.</li>
	</ul>
	
	<h2 class="heading-style">Who We Serve</h2>
	<p class="para-style text-center"><strong>Large or Small – Our customers always come first</strong></p>
	<p class="para-style">Girikon is professional consulting, implementation, development services organisation primarily focussed on providing consultancy for clients using the Salesforce Ecosystem across the world.</p>	
	<p class="para-style">Girikon also services for Mean Stack, Atlassian APP, Microsoft Dynamics CRM, Mobile APPs, JAVA, PHP, ASP, .NET and AI is within scope.</p>
	<p class="para-style">Our customers and services are many and varied from Fortune 500 companies implementing large E-Business programs to small-medium enterprises implementing Billing Systems.</p>

	<h2 class="heading-style">Our Vision</h2>
	<p class="para-style text-center"><strong>Girikon is fast becoming the trusted service partner in Information Technology.</strong></p>
	<p class="para-style">Our vision is to become a trusted name across the globe and across multiple industries enabling our clients and partners to maximize their business success through our people, our disciplined approach and our technical experience and knowledge.</p>
	
    <h2 class="heading-style">Value Proposition</h2>
		<p class="para-style">Competitive Pricing – the low cost advantage</p>
		<ul class="para-list">
			<li><i class="fa fa-adjust"></i> Dedicated state of the art offshore development and support infrastructure</li>
			<li><i class="fa fa-adjust"></i> Blended onsite/offshore resource models </li>
		</ul>	
		<p class="para-style">Quality Delivery – the solution you require</p>
		<ul class="para-list">
			<li><i class="fa fa-adjust"></i> Quality discovery phase to ensure all your requirements are understood</li>
			<li><i class="fa fa-adjust"></i> Onsite &amp; offshore flexibility for time zone coverage for better communication and quality outcomes</li>
		</ul>	
		<p class="para-style">Great Customer Testimonials – Experience</p>
		<ul class="para-list">
			<li><i class="fa fa-adjust"></i> Services from a trusted partner Girikon</li>
			<li><i class="fa fa-adjust"></i> 5 Star recommendations</li>
		</ul>
  </div>
</div>
<?php
include '.\include\clientTestimonials.html';
include '.\include\partners.html';
include '.\include\delighted.html';
include '.\include\contactFooter.html';
include '.\include\footer.html';
?><!-- testimonial-->