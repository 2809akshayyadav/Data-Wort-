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
            class="breadcrumb_last">Services</strong></span></span></p>
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
  <div>
    <link rel="stylesheet" id="style_assets" href="css/home-slide.css" type="text/css">
    <link rel="stylesheet" id="style_assets" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" id="style_assets" href="css/assets.css" type="text/css">
  </div>
  <div class="container my-marg-bot-50 page-heading-top-parent padtop70">
    <div class="row">
      <div class="container">
        <div class="heading side-head fx" data-animate="fadeInUp">
          <div class="head-6">
            <h1 class="main-color h3"><i class="fa fa-circle-o-notch"></i>Salesforce Cloud</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row fx" data-animate="fadeInUp">
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/offshore-salesforce-development/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/web.png"
                alt="Salesforce Development"><span class="my-text-break">Salesforce Development</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/salesforce-implementation-services/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/computer.png"
                alt="Salesforce Sales and Service Cloud"><span class="my-text-break">Salesforce Sales and Service
                Cloud</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/force-com-app-development/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/gear.png"
                alt="Force.com Development"><span class="my-text-break">Force.com Development</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/salesforce-communities-implementation-services/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/community.png"
                alt="Salesforce Communities"><span class="my-text-break">Salesforce Communities</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a class="service" href="/salesforce-integration-services/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/arrows.png"
                alt="Salesforce Integration"><span class="my-text-break">Salesforce Integration Services</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/salesforce-support/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/person.png"
                alt="Salesforce Support"><span class="my-text-break">Salesforce Support</span></div>
          </div>
        </a></div>
    </div>
  </div>
  <div class="container fx" data-animate="fadeInUp">
    <div class="row">
      <div class="container">
        <div class="heading side-head">
          <div class="head-6">
            <h3 class="main-color"><i class="fa fa-circle-o-notch"></i>Program Management &amp; PMO</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a
          href="/services/program-management-pmo/end-to-end-program-management/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/clock.png"
                alt="End to End Program Management"><span class="my-text-break">End to End Program Management</span>
            </div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/program-management-pmo/financial-management/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/money.png"
                alt="Financial Management"><span class="my-text-break">Financial Management</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/program-management-pmo/consulting/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/signs.png"
                alt="Consulting"><span class="my-text-break">Consulting</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a
          href="/services/program-management-pmo/pmo-processes-tools-including-clarity-sharepoint/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/wrench.png"
                alt="PMO processes &amp; tools including Clarity, SharePoint"><span class="my-text-break">PMO processes
                &amp; tools including Clarity, SharePoint</span></div>
          </div>
        </a> </div>
    </div>
  </div>
  <div class="container my-marg-top-50 my-marg-bot-50 fx" data-animate="fadeInUp">
    <div class="row">
      <div class="container">
        <div class="heading side-head">
          <div class="head-6">
            <h3 class="main-color"><i class="fa fa-circle-o-notch"></i>Mobile</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/mobile/mobile-app-development/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/telephone.png"
                alt="Mobile App Development"><span class="my-text-break">Mobile App Development</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/mobile/ios-app-development/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/technology.png"
                alt="iOS App Development"> <span class="my-text-break">iOS App Development</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/mobile/android-app-development/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/system.png"
                alt="Android App Development"><span class="my-text-break">Android App Development</span></div>
          </div>
        </a> </div>
    </div>
  </div>
  <div class="container fx" data-animate="fadeInUp">
    <div class="row">
      <div class="container">
        <div class="heading side-head">
          <div class="head-6">
            <h3 class="main-color"><i class="fa fa-circle-o-notch"></i>Atlassian</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/professional-services/atlassian/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/Atlassian.png"
                alt="Atlassian Consulting Services &amp; Plugin Development"><span class="my-text-break">Atlassian
                Consulting Services &amp; Plugin Development</span></div>
          </div>
        </a> </div>
    </div>
  </div>
  <div class="container my-marg-top-50 my-marg-bot-50 fx" data-animate="fadeInUp">
    <div class="row">
      <div class="container">
        <div class="heading side-head">
          <div class="head-6">
            <h3 class="main-color"><i class="fa fa-circle-o-notch"></i>Technology Areas</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/technology-areas/java/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/cup.png"
                alt="JAVA"><span class="my-text-break">JAVA</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/technology-areas/net/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/dotnet-logo.png"
                alt=".NET"><span class="my-text-break">.NET</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/technology-areas/python/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/icon.png"
                alt="Python"><span class="my-text-break">Python</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/technology-areas/php/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/black.png"
                alt="PHP"><span class="my-text-break">PHP</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/technology-areas/force-com/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/force.png"
                alt="Force.com"><span class="my-text-break">Force.com</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/technology-areas/node-js/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/nodejs.png"
                alt="Node.Js"><span class="my-text-break">Node.Js</span></div>
          </div>
        </a> </div>
    </div>
  </div>
  <div class="container fx" data-animate="fadeInUp">
    <div class="row">
      <div class="container">
        <div class="heading side-head">
          <div class="head-6">
            <h3 class="main-color"><i class="fa fa-circle-o-notch"></i>Saas Implementation &amp; Integration</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a
          href="/services/saas-implementation-integration/microsoft-dynamics/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive"
                src="images/Microsoft_Dynamics_logo.png" alt="Microsoft Dynamics"><span class="my-text-break">Microsoft
                Dynamics</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/saas-implementation-integration/google-apps/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive"
                src="images/apps-for-work-social-icon.png" alt="Google Apps"><span class="my-text-break">Google
                Apps</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a
          href="/services/saas-implementation-integration/share-pointmoss/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/share-point.png"
                alt="Share Point(MOSS)"><span class="my-text-break">Share Point(MOSS)</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/saas-implementation-integration/drupal/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/internet.png"
                alt="Drupal"><span class="my-text-break">Drupal</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/saas-implementation-integration/orchard/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/orchard.png"
                alt="Orchard"><span class="my-text-break">Orchard</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/saas-implementation-integration/wordpress/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/social.png"
                alt="WordPress"><span class="my-text-break">WordPress</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/saas-implementation-integration/magento/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/magento-logo.png"
                alt="Magento"><span class="my-text-break">Magento</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/saas-implementation-integration/joomla/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/joomla.png"
                alt="Joomla"><span class="my-text-break">Joomla</span></div>
          </div>
        </a> </div>
    </div>
  </div>
  <div class="container my-marg-top-50 my-marg-bot-50 fx" data-animate="fadeInUp">
    <div class="row">
      <div class="container">
        <div class="heading side-head">
          <div class="head-6">
            <h3 class="main-color"><i class="fa fa-circle-o-notch"></i>Quality Engineering / Testing</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/quality-engineering-testing/girikon-sqae/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/quality.png"
                alt="Girikon SQAE"><span class="my-text-break">Girikon SQAE</span></div>
          </div>
        </a> </div>
    </div>
  </div>
  <div class="container fx" data-animate="fadeInUp">
    <div class="row">
      <div class="container">
        <div class="heading side-head">
          <div class="head-6">
            <h3 class="main-color"><i class="fa fa-circle-o-notch"></i>Professional Services</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a
          href="/services/professional-services/responsive-web-development/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/responsive.png"
                alt="Responsive Web Development"><span class="my-text-break">Responsive Web Development</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/professional-services/big-data-analysis/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/big-data.png"
                alt="Big Data Analysis"><span class="my-text-break">Big Data Analysis</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/professional-services/devops-automation/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/DevOps.png"
                alt="DevOps Automation"><span class="my-text-break">DevOps Automation</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/professional-services/e-commerce-solutions/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/e-commerce.png"
                alt="E-Commerce Solutions"> <span class="my-text-break">E-Commerce Solutions</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/professional-services/e-learning-solutions/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/e-learning.png"
                alt="e-Learning Solutions"> <span class="my-text-break">e-Learning Solutions</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a
          href="/services/professional-services/content-management-system/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/cms.png"
                alt="Content Management System"> <span class="my-text-break">Content Management System</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/professional-services/resourcing-staffing/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/resource.png"
                alt="Resourcing / Staffing"> <span class="my-text-break">Resourcing / Staffing</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a
          href="/services/professional-services/business-process-services-bpo/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/bpo.png"
                alt="Business Process Services / BPO"> <span class="my-text-break">Business Process Services /
                BPO</span></div>
          </div>
        </a> </div>
    </div>
  </div>
  <div class="container my-marg-top-50 my-marg-bot-50 fx" data-animate="fadeInUp">
    <div class="row">
      <div class="container">
        <div class="heading side-head">
          <div class="head-6">
            <h3 class="main-color"><i class="fa fa-circle-o-notch"></i>Cloud Services</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/cloud-services/oracle-cloud-services/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/oracle.png"
                alt="Oracle Cloud Services"> <span class="my-text-break">Oracle Cloud Services</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="/services/cloud-services/microsoft-cloud-services/">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/microsoft.png"
                alt="Microsoft Cloud Services"> <span class="my-text-break">Microsoft Cloud Services</span></div>
          </div>
        </a> </div>
    </div>
  </div>
<?php
include '.\include\clientTestimonials.html';
include '.\include\partners.html';
include '.\include\delighted.html';
include '.\include\contactFooter.html';
include '.\include\footer.html';
?>