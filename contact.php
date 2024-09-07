<?php
include '.\include\base.html';
include '.\include\header.html';
?>
 <div class="clearfix"></div>
    <div class="header-height-72"></div>
    <div class="container-fluid inner-page-nav">
        <div class="row my-own-nav">
            <div class="title-container"> </div>
        </div>
    </div>
    <div class="container">
        <p id="breadcrumbs" class="breadcrumbs fx" data-animate="fadeInDown"><span
                xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a
                        href="" rel="v:url" property="v:title">Home</a> <span
                        class="arrow1">&gt;</span> <strong class="breadcrumb_last">Contact Us</strong></span></span></p>
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
    <div class="main-heading centered marbottom fx " data-animate="fadeInUp">
        <h1 class="sub-title"><span class="gray">Contact</span> <span class="main-color">Us</span></h1>
        <div class="heading-separator"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <section>
                    <div class="fx" data-animate="fadeInUp">
                        <p class="para-style" style="margin-top: 9px; font-weight: 400;">Leave a comment and we will get
                            back to you as soon as humanly possible. We always endeavour to respond within 1 business
                            day; however, it could be earlier. Or alternatively, call us on either of the phone numbers
                            below:</p> <span class="pra-medium pra-medium-font">USA <img class="country-flag-1"
                                title="USA Flag" src="images/usa-flag.jpg" alt="USA Flag"> +1 480-382-1320,</span> <span
                            class="pra-medium pra-medium-font"> Australia <img class="country-flag-1"
                                title="Australia Flag" src="images/australia-flag.jpg" alt="Australia Flag"> +61
                            1300-332-888,</span> <span class="pra-medium pra-medium-font"> India <img
                                class="country-flag-1" title="india Flag" src="images/india-flag.jpg" alt="india Flag">
                            +91 9811400594 </span>
                        <form id="GlobalContactform" class="contact-form" action="/contact-action-v3.php" method="POST"
                            name="GlobalContactform"> <input id="g-recaptcha-response" name="g-recaptcha-response"
                                type="hidden">
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12"> <input id="fname" class="form-control"
                                        maxlength="40" name="first_name" size="20" type="text" placeholder="First name">
                                </div>
                                <div class="form-group col-sm-6 col-xs-12"> <input id="lname" class="form-control"
                                        maxlength="40" name="last_name" size="20" type="text" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6 col-xs-12"> <input id="emailaddress"
                                        class="form-control" maxlength="80" name="email" size="20" type="email"
                                        placeholder="Email address"> </div>
                                <div class="form-group col-sm-6 col-xs-12"> <input id="mobileno" class="form-control"
                                        style="font-family: arial;" maxlength="40" name="mobile" size="20" type="text"
                                        placeholder="Mobile"> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12"> <textarea id="desc" class="form-control"
                                        style="height: 150px !important;" name="description" rows="3"
                                        placeholder="Brief Description of Your Project or Requirement"></textarea>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12"></div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <div class="vc_cta3-actions float-none">
                                        <div class="vc_btn3-container vc_btn3-center2"> <input
                                                class="vc_general vc_btn3 submit-modal-form vc_btn3-size-lg vc_btn3-shape-s shape vc_btn3-style-custom border5px"
                                                title="Submit" type="submit" value="SEND MESSAGE"> </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-sm-4 col-xs-12 fx" data-animate="fadeInRight">
                <h4 class="pra-h4">Enquiries</h4>
                <p class="ptag">We love providing solutions. Let’s plan our next project together.</p> <a class="pra-a"
                    href="mailto:sales@girikon.com">sales@girikon.com</a>
                <h4 class="pra-h4">Employment</h4>
                <p class="ptag">Explore exciting career options with us!</p> <a class="pra-a"
                    href="mailto:careers@girikon.com">careers@girikon.com</a>
                <h4 class="pra-h4">Feedback</h4>
                <p class="ptag">We would love to hear from you!</p> <a class="pra-a"
                    href="mailto:info@girikon.com">info@girikon.com</a>
                <h4 class="pra-h4">Employment Verification</h4> <a class="pra-a"
                    href="mailto:hr@girikon.com">hr@girikon.com</a>
            </div>
        </div>
    </div>
    <div class="container-fluid home-contact-2">
        <div class="main-heading centered marbottom fx " data-animate="fadeInUp">
            <h4 class="sub-title"><span class="grey">Locate</span> <span class="main-color">Us</span></h4>
            <div class="heading-separator"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 text-center fx " data-animate="fadeInLeft">
                    <h3 class="pra-medium-2">Headquarters</h3>
                    <h4>15433 N Tatum Blvd #105, Phoenix, AZ 85032, USA</h4><br>
                    <h4>3010 W Lyndon B Johnson Freeway, Suite 1200, Dallas, TX 75234<br> Telephone:2146615785</h4>
                </div>
                <div class="col-sm-4 col-xs-12 text-center fx " data-animate="fadeInLeft">
                    <h3 class="pra-medium-2">Australia Office</h3>
                    <h4>Greenwood Business Park, LG,<br> Building 1/301 Burwood Hwy,<br> Burwood VIC 3125, Australia
                    </h4>
                </div>
                <div class="col-sm-4 col-xs-12 text-center fx " data-animate="fadeInRight">
                    <h3 class="pra-medium-2">India Office Locations</h3>
                    <h4><strong>Noida</strong>: B-24, Sec 65 Noida 201301, UP, India</h4>
                    <h4><strong>Bengaluru</strong>: 2nd Floor, 447, 7th Main, 80 Ft Road, Krishnananda Rd, HRBR Layout,
                        Kalyan Nagar, Bengaluru, Karnataka 560043</h4>
                </div>
            </div>
        </div>
    </div>
<?php
include '.\include\clientTestimonials.html';
include '.\include\partners.html';
include '.\include\delighted.html';
include '.\include\contactFooter.html';
include '.\include\footer.html';
?>