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

<?php
include "./php/header_select.php";
$home = true;
include "./component/header.php";
?>
<!-- END HEADER SECTION -->

<div class="content-wrapper">
<!-- BEGIN SLIDER AREA-->
<?php include "./component/main_slider.html"?>
<!-- END SLIDER AREA -->

<!--=========== BEGIN OUR PROGRAMS SECTION ================-->
<section id="competencies">
    <div class="col-lg-12 col-md-12 p-0 ">
        <div class="heading">
            <h2 class="wow fadeInLeftBig">Our Programs</h2>
        </div>
    </div>
    <?php
        include "./php/programs_model.php";

    ?>
    <!--=========== BEGIN PROGRAMS SECTION ================-->
    <div class="container">
        <div class="tabs">

            <div class="row">
            <?php
            for ($x = 0; $x < count($myProgramsArray); $x++) {
            ?>
                <div class="programContainer col-md-3 col-sm-6 col-xs-12">
                    <div class="product-image-wrapper">
                        <a href=<?=$myProgramsArray[$x][2] ?>>
                            <div class="product-content program">
                                <!-- front content -->
                                <img class="p-img-top" data-holder-rendered="true"
                                     src=<?=$myProgramsArray[$x][1] ?> >
                                <div class="info-products">
                                    <h3 class="team-title text-center"><?=$myProgramsArray[$x][0] ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            <?php
            }
            ?>

            </div>
        </div>
    </div>
</section>
<!--=========== END PROGRAMS SECTION ================-->

<!--=========== BEGIN WHY DASTBI SECTION ================-->
<?php include  "./component/whydastbi.html" ?>

<!--=========== BEGIN APPROACH SECTION ================-->
<?php include  "./component/subsidiaries.html" ?>
<!--=========== END APPROACH SECTION ================-->
<?php include  "./component/gallery_videos.html" ?>

<!--=========== BEGIN TEAM SECTION ================-->
<!-- team section goes here... Deleted on 28th Sept, 2020 -->
<!--=========== END TEAM SECTION ================-->

<!--=========== BEGIN FOOTER ================-->
<?php
include "./component/footer.html"
?>
</div>
<!--=========== END FOOTER ================-->

<!-- Javascript Files
================================================== -->

</body>
</html>
