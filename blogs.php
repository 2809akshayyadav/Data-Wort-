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
                        href="./index.php" rel="v:url" property="v:title">Home</a> <span
                        class="arrow1">&gt;</span> <strong class="breadcrumb_last">Blogs</strong></span></span></p>
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
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h1>1. Akshay</h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQHk0G50OL5LtcCnB_-MtftjwtjYROektaeac6hZN6wilFnqkN53Naw9On6w&s" alt="">
            <p>Find out which posts are a hit with Blogger’s built-in analytics. You’ll see where your audience is coming from and what they’re interested in. You can even connect your blog directly to Google Analytics for a more detailed look.Find out which posts are a hit with Blogger’s built-in analytics. You’ll see where your audience is coming from and what they’re interested in. You can even connect your blog directly to Google Analytics for a more detailed look.Find out which posts are a hit with Blogger’s built-in analytics. You’ll see where your audience is coming from and what they’re interested in. You can even connect your blog directly to Google Analytics for a more detailed look.Find out which posts are a hit with Blogger’s built-in analytics. You’ll see where your audience is coming from and what they’re interested in. You can even connect your blog directly to Google Analytics for a more detailed look.</p>
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
