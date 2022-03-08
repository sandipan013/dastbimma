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
<?php include "./component/header.php" ?>
<!-- END HEADER SECTION -->

<br/>
<br/>
<section id="team">
    <div class="service-tab container-tab">
        <div class="col-lg-12 col-md-12 p-0">
            <div class="heading">
                <h2 class="wow fadeInLeftBig">DFS Fighters</h2>
            </div>
        </div>
        <!--=========== BEGIN FOUNDER ================-->
        <!--=========== BEGIN TEAM SECTION ================-->
        <div class="tabs">
            <div class="row">
                <?php

                for ($x = 0; $x <= 10; $x++) {
                    ?>
                    <!-- Sandipan -->
                    <div class="teamContainer inactive p-0 m-0">
                        <div class="team">
                            <div class="side front">
                                <!-- front content -->
                                <img class="team-img-top" data-holder-rendered="true"
                                     src="assets/img/team/sandipan-1.jpg" style="height: auto; width: 100%; display: block;">
                                <div class="team-block">
                                    <h4 class="team-title text-center">Sandipan</h4>
                                    <label class="team-des">Web and Mobile developer</label>
                                    <div class="col-12 text-center">
                                        <a href="https://www.linkedin.com/in/sandipan-biswas-741a6317/" target="_blank"><img
                                                class="text-center linkedin-filter" src="assets/img/linkedin_logo.png"
                                                width="40px"></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!--=========== END TEAM SECTION ================-->
    </div>
</section>


<!--=========== BEGIN FOOTER ================-->
<?php
include "./component/footer.html"
?>

<!--=========== END FOOTER ================-->

</body>
</html>
