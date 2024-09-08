<?php
include '.\include\base.html';
include '.\include\header.html';
?>
 <div class="clearfix"></div>
  <div class="header-height-125"></div>
  <div class="container-fluid inner-page-nav">
    <div class="row my-own-nav">
      <div class="title-container"> </div>
    </div>
  </div>
  <div class="container">
    <p id="breadcrumbs" class="breadcrumbs fx" data-animate="fadeInDown"><span
        xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="./index.php"
            rel="v:url" property="v:title">Home</a> <span class="arrow1">&gt;</span> <strong
            class="breadcrumb_last">Management Team</strong></span></span></p>
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
  <div id="primary" class="container marbottomfull">
    <div class="row">
      <main id="main" class="site-main" role="main">
        <article id="post-12783" class="post-12783 page type-page status-publish has-post-thumbnail hentry">
          <div class="page-content">
            <div class="container">
              <div class="row">
                <div class="main-heading centered margintb marbottom">
                  <h4 class="sub-title"><span class="gray">Our</span> <span class="main-color">Team</span></h4>
                  <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12 fx animated fadeInUp management" data-animate="fadeInUp">
                  <div class="member-pp"><img src="images\IMG-20240103-WA0005.jpg" alt=""></div>
                  <h1 class="text-center">Akshay Yadav</h1>
                  <div class="text-center"><strong>General Manager,</strong></div>
                  <div class="text-center"><strong>Technology and Operations, Director (Based in Noida, India)</strong>
                  </div>
                  <p class="text-left">Founder, Shareholder and Director Akshay is one of four Founders of Data-Worth. Akshay
                    has over 4 years experience in design, development &amp; deployment of complex, large scale
                    information technology solutions for the Manufacturing, Financial, FMCG industries. He has
                    previously served as Vice President, Engineering at Agnicient Technologies, and Product architect at
                    Ideactive Consulting.</p>
                  <p class="text-left">Akshay is an enthusiastic supporter of startups and is an angel investor in
                    TeamIndus, JikkoLabs amongst other path breaking startups from India.</p> <span><strong>What they
                      say:</strong> His team calls him a Problem solver, Communicator, team player and is always ready
                    to mentor and groom talent. All his customers count on him to find the right solution, deliver on
                    time and within budget.</span>
                </div>
                <div class="col-md-6 col-sm-12 fx animated fadeInUp management" data-animate="fadeInUp">
                  <div class="member-pp"><img src="images/sachin-rathi.jpg" alt=""></div>
                  <h1 class="text-center">Sachin Rathi</h1>
                  <div class="text-center"><strong>Business Development &amp; Technology,</strong></div>
                  <div class="text-center"><strong>Director (Based in Phoenix, USA)</strong></div>
                  <p class="text-left">A Founder, Shareholder and Director, Sachin is one of four team members who
                    founded Girikon. With over 19 years of experience in Information Technology, Sachin has mastered a
                    diverse range of technologies in multiple industry settings and multiple geographical locations.
                    Before Girikon, Sachin had worked on key global technology initiatives for clients in Banking,
                    Healthcare &amp; Manufacturing sectors. Sachin firmly believes that “Hard work is the only
                    investment that never fails”. His passion is to build a bigger, better organization using his strong
                    leadership, vast knowledge and extensive experience across various industries and technologies.</p>
                  <span><strong>Great joke Sachin!</strong> Sachin’s sense of humour and energetic persona never fail to
                    make the working environment an enjoyable experience. What a great place to work!</span>
                </div>
              </div>
            </div>
          </div>
        </article>
      </main>
    </div>
  </div>
<?php
include '.\include\clientTestimonials.html';
include '.\include\partners.html';
include '.\include\delighted.html';
include '.\include\contactFooter.html';
include '.\include\footer.html';
?>
