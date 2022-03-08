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
$gallery = true;
include "./component/header.php";
?>
<!-- END HEADER SECTION -->

<br/>
<br/>
<section id="team">
    <div class="service-tab container-tab">
        <div class="col-lg-12 col-md-12 p-0">
            <div class="heading">
                <h2 class="wow fadeInLeftBig">Gallery Photos And Videos</h2>
            </div>
        </div>

        <?php
        include "./php/gallery_photos_videos.php";

        ?>
        <!--=========== BEGIN Verses Championship Details ================-->

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 p-0">
                <h3 class="mt-0" style="text-align: center;">Photos</h3>
                <!-- BEGIN SERVICE  -->
                <div class="apporach_area">
                    <?php
                    for ($x = 0; $x < count($myPhotosArray); $x++) {
                    ?>
                    <div class="col-12">
                        <div class="col-lg-2 col-md-2 col-xs-12 col-sm-2">
                            <!-- BEGIN SINGLE SERVICE -->
                            <div class="single_apporach wow fadeInRight">
                                <img class="team-img-top" data-holder-rendered="true" style="height: 150px; border-radius: 10px !important;"
                                     src=<?=$myPhotosArray[$x] ?> >
                            </div>
                        </div>

                    </div>
                    <?php
                    }
                    ?>
                </div>
                <a href="https://www.youtube.com/channel/UCC4l7tKkbzPz-XRAyDPbypg" target="_blank"><h4 class="mt-0" style="text-align: right;">Show All Photos></h4></a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 p-0">
                <h3 class="mt-0" style="text-align: center;">Videos</h3>
                <!-- BEGIN SERVICE  -->
                <div class="apporach_area">
                    <?php
                    for ($x = 0; $x < count($myVideosArray); $x++) {
                    ?>
                    <div class="col-12">
                        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3">
                            <!-- BEGIN SINGLE SERVICE -->
                            <div class="single_apporach wow fadeInRight">
                                <iframe src=<?=$myVideosArray[$x] ?> class="m-2 youtube-iframe" style="height: 250px;">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <a href="https://www.youtube.com/channel/UCC4l7tKkbzPz-XRAyDPbypg" target="_blank"><h4 class="mt-0" style="text-align: right;">Show All Videos></h4></a>
            </div>
        </div>
    </div>
</section>


<!--=========== BEGIN FOOTER ================-->
<?php
include "./component/footer.html"
?>

<!--=========== END FOOTER ================-->

</body>
</html>
