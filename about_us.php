<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>DASTBI MMA</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="shortcut icon" type="image/png"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link href="assets/css/superslides.css" rel="stylesheet">
    <!-- Slick slider css file -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- smooth animate css file -->
    <link href="css/animate.css" rel="assets/stylesheet">
    <!-- Elastic grid css file -->
    <link href="assets/css/elastic_grid.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'
          rel='stylesheet prefetch'>
    <!-- Default Theme css file -->
    <link href="assets/css/cbi-theme.css" id="orginal" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive structure css file -->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Gravitas+One|Maitree:400,500&display=swap"
          rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- BEGIN PRELOADER -->
<!--<div id="preloader">-->
<!--<div id="status">&nbsp;</div>-->
<!--</div>-->
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- HEADER SECTION -->
<?php 
    include "./php/header_select.php";
    $aboutUs = true;
    include "./component/header.php";
?>
<!-- END HEADER SECTION -->

<br/>
<br/>
<!--=========== BEGIN ABOUT US SECTION ================-->
<section id="about-us">
    <div class="col-12 my-3">
        <img alt="img" src="./assets/img/gallery/2_brazilian_jiu_jitsu.jpeg" style="width:  100%;"/>
        <div class="container mt-3 about-us-text">
        <p>
        DASTBI MMA, founded in 2017, is an institute of Martial Arts & fitness that provides quality training to build a stronger generation and encourage people of all ages and abilities to take up MMA and other combat to develop individually and master the art of self-defense. 
    Currently we offer trainings for MMA (Mixed Martial Arts), Muay Thai which is recognized by the Olympics, Brazilian Jiu Jitsu (Gi & non-Gi), Kyokushin Karate (world’s strongest Karate), CQC (Self-protection system), Animal Flow to improve strength, power, flexibility, mobility and coordination. Callisthenic, Kettlebell, Free Hand Exercises, Strength and conditioning Training and many more. 
    </p>
    <p class="text-center">
    We also organize seminars, boot camps, free self-defense training sessions for women under the 'Divas to Defense Program.
    </p>
    
        </div>
    </div>
</section>
<!--=========== END ABOUT US SECTION ================-->

<!--=========== BEGIN FOOTER ================-->
<?php
include "./component/footer.html"
?>

<!--=========== END FOOTER ================-->

</body>
</html>
