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
          <ul id="owl-demo" style="display:none" class="cf"><li data-item="1" class="item "> <a href="./about.php" class="" title="About Us"><span><i class="menu-icons menu-icons-about"></i></span><span>About Us</span></a></li><li data-item="2" class="item "> <a href="./featured_clients.php" class="" title="Featured Clients"><span><i class="menu-icons menu-icons-client"></i></span><span>Featured Clients</span></a></li><li data-item="3" class="item "> <a href="./choose.php" class="" title="Why Choose us"><span><i class="menu-icons menu-icons-why-choose"></i></span><span>Why Choose us</span></a></li><li data-item="4" class="item active"> <a href="./customers_testimonials.php" class="active" title="Customers Testimonials"><span><img class="vc_tta-icon" alt="testimonial-1.png" src="images/white-testimonial.png"></span><span>Customers Testimonials</span></a></li><li data-item="8" class="item "> <a href="./case_studies.php" class="" title="Case Studies"><span><i class="menu-icons menu-icons-CaseStudy"></i></span><span>Case Studies</span></a></li></ul><a class="child-page-left-arrow"><img src="images/icon-arrow-left-20.png" alt=""></a>
	 <a class="child-page-right-arrow"><img src="images/icon-arrow-right-20.png" alt=""></a>        </div>
      </div>
          </div>
  </div>
</div>
<div class="container"><p id="breadcrumbs" class="breadcrumbs fx" data-animate="fadeInDown"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="./index.php" rel="v:url" property="v:title">Home</a> <span class="arrow1">&gt;</span> <span rel="v:child" typeof="v:Breadcrumb"><a href="./company.php" rel="v:url" property="v:title">Company</a> <span class="arrow1">&gt;</span> <strong class="breadcrumb_last">Customers Testimonials</strong></span></span></span></p></div><script>
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
<div class="container-fluid broun-block innre-bgimg-2">
  <div class="row">
    <div class="animated fadeInUp" data-animate="fadeInUp" data-animation-delay="100" data-animation-duration="100" style="animation-delay: 100ms;">
      <div class="main-heading centered margintb marbottom">
        <h1 class="sub-title"><span class="gray">Client</span> <span class="main-color"> Testimonials</span></h1>
        <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
      </div>
    </div>
    <div class="container animated fadeInUp" data-animate="fadeInUp" data-animation-delay="300" data-animation-duration="300" style="animation-delay: 300ms;">
      <div class="row">
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
          <p class="testimonial-head1">Best Salesforce Consulting Partner…PERIOD</p>
            <p>For the past 14 years I’ve worked with numerous Salesforce Consulting partners, from very small, boutique style to very big traditional partners (big 5). Girikon has been by far the best partner I’ve worked so far. Not only they are very receptive, responsive, highly knowledgeable and technical, but when things don’t go well, as with any relationship, they are very honest and quick to find the solution, rather than playing the blaming game, as it is almost expected with other partners. When skills, language, or even personalities have been an issue, they have been very quick to address them and find agreeable solutions. Their cost and value has no comparison in the industry. I highly recommend them and give them a 5 star.</p>
            <div class="testimonials-name main-color text-center f-size">Director, Informa PLC, USA</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1">Great Salesforce Consultancy</p>
            <p>Girikon has been instrumental in the success of our Salesforce roll-out at Refuse Specialists. They are efficient and very accurate in their time estimates for both large and small custom dev projects. They are very good at translating my ideas into actionable work and consistently deliver quick fixes.</p>
            <div class="testimonials-name main-color text-center f-size">VP of IT at Refuse Specialists LLC, USA</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1">Excellent Project / Product Customizations</p>
            <p>Great company to work with. Girikon has been able to take the base Sales Force product and customize it to meet our needs. We have thrown them some significant change requests since the initial concept and they have been able to adapt while offering alternate ideas for ways to improve. I would recommend for future projects!</p>
            <div class="testimonials-name main-color text-center f-size">Plant Manager, ITW Deltar Fasteners, USA</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1">Excellent Service and Support</p>
            <p>Incredible company that has solved our previous problems to the best of their abilities. Always available and super quick with their responses. Highly recommended!</p>
            <div class="testimonials-name main-color text-cente f-sizer">CEO and Co-Founder, GoGo World, Japan</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1">We look forward to further strengthening our partnership with Girikon.</p>
            <p>I noticed several differences between Girikon and the previous firm that we engaged with. The major difference was the daily communication. I was not only able to jump on a phone call once a day to answer any questions, bounce my ideas to the team and receive progress updates, but also received a daily progress report with upcoming tasks.</p>
            <p>It is impossible to create something that runs perfectly every time, and our projects were no exception to this rule. I appreciated that we both understood this, and we were always able to work through bugs and enhancements quickly and smoothly</p>
            <p>Our engagement with Girikon has been a great learning experience for me, as an individual; as well as added to our company’s growth and experience. I now, so confidently know that when I hand off a new project to the Girikon team, it is not just going to be done on time, but also done well!</p>
            <div class="testimonials-name main-color text-center f-size">CEO, GNGF, USA</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1">Great company, great people, great results</p>
            <p>Very nice people who do good work for a great price. Very responsive, would recommend!</p>
            <div class="testimonials-name main-color text-center f-size">Operations Manager, Pure Power Engineering, USA</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1">Go! Go! World is absolutely looking forward to working with Girikon for future projects.</p>
            <p>We at Go! Go! World have had the pleasure of working with the team at Girikon these past few months on a very niche project involving multilingual Salesforce B2C management. It was a project that a previous developer had tried to create for us, but failed.</p>
            <p>Girikon managed to analyze, plan, and execute our needs perfectly. They took the time to learn our business and our needs specifically. Due to this, they were able to deliver the basics of the system that we required, and even suggested new features that we did not previously think was possible. Their work ethic and understanding of our needs were top-notch and we definitely would not have been able to receive such a product without their work.</p>
            <div class="testimonials-name main-color text-center f-size">COO, GoGo World, Japan</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1"></p>
            <p>The prime intent of Sierra was to partner with someone who could provide affordable solutions &amp; a talent pool of highly skilled resources. At Girikon we got both.</p>
            <p>The association has been growing stronger with the years. Girikon has always been extremely responsive &amp; supportive in all situations. Irrespective of the technologies involved our next project will certainly again be with the Girikon team!</p>
            <div class="testimonials-name main-color text-center f-size">CEO, Sierra Proto Express, USA</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1"></p>
            <p>We have been extremely impressed with all of our projects with Girikon. Just so, that this doesn’t come across as another quick ‘yes they are great’ review, I want to give proper context to why we have been so impressed.</p>
            <p>We went to Girikon after a very disappointing engagement with another Salesforce development firm based in the same Midwest region wherein the project had to be dropped as nothing worked there as promised. Over the course of the next four months, we completed more than ten projects together, with one of the largest being the project we tried with the other firm!</p>
            <p>Girikon has helped streamline our internal processes, and made our daily work environment a better place to be. Our work together has reduced the amount of tedious “plug-and-chug” work, helped us to innovate new processes, and allowed us to focus on helping our clients. We look forward to continuing our partnership with Girikon in the future, and continuing to improve our company with their help!</p>
            <div class="testimonials-name main-color text-center f-size">Internal Development Strategist, GNGF, USA</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1"></p>
            <p>At NSC our primary product was entrenched in pre 2000 technologies, paradigms and interfaces, not only did Girikon upgrade us, they did so with very minimal interference to existing business activities.</p>
            <p>A job well done and delivered to our satisfaction</p>
            <div class="testimonials-name main-color text-center f-size">GM, NSC Inc. USA</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1"></p>
            <p>We evaluated more than five different companies and chose Girikon as our technology partner. What I appreciate most about their services is that they always deliver with quality as what they communicate. Girikon provided our company end to end solution for e-commerce.
</p>
            <div class="testimonials-name main-color text-center f-size">Founder Director (Yebhi.com)</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="testimonials-bg text-center">
            <p class="testimonial-head1"></p>
            <p>I wanted to express my appreciation for the outstanding service, which we receive from Girikon. As you know, we have our software for about 7 years now, and we still receive the same dedicated service that we received from day one. Very few companies today offer this ongoing commitment to customer satisfaction.</p>
            <p>I highly recommend Girkon as a development and IT partner.</p>
            <div class="testimonials-name main-color text-center f-size">Jt. Dy. Director General, FIEO</div>
              <div class="text-center"><img src="images/stars.png" alt="stars"></div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
<?php
include '.\include\partners.html';
include '.\include\delighted.html';
include '.\include\contactFooter.html';
include '.\include\footer.html';
?>