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
<?php include "./component/header.php" ?>
<!-- END HEADER SECTION -->

<br/>
<br/>
<!--=========== BEGIN CONTACT SECTION ================-->
<div class="col-12 p-0 pb-0 bg-5 bg-cover float-left border-top mt-5" id="contact">
    <!--=========== CONTACT SECTION ================-->
    <section class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center default-content-padding">
            <!-- BEGIN CALL US FEATURE -->
            <div class="col-12 single_contact_feaured mt-5 pt-5">
                <i class="fa fa-phone pb-4"></i>
                <p>+91 123-456-7890</p>
            </div>
            <!-- BEGIN CALL US FEATURE -->
            <div class="col-12 single_contact_feaured mt-5 pt-5">
                <i class="fa fa-envelope-o pb-4"></i>
                <p><a href="mailto:mintu@crystalbi.com">support@dastbi.com</a></p>
            </div>
            <!-- BEGIN CALL US FEATURE -->
            <div class="col-12 single_contact_feaured mt-5 pt-5">
                <i class="fa fa-map-marker pb-4"></i>
                <p>Building no 123, Beltola Tinali, Assam 781028, India</p>
                <p class="mt-3">Building no 123, Beltola Tinali, Assam 781028, India</p>
            </div>
        </div>
    </section>
    <!--=========== DEMO SECTION ================-->
    <section class="col-lg-6 col-md-12 col-sm-12 col-xs-12 p-0 white-bg default-content-padding">
        <div class="col-lg-12 col-md-12 pt-5">
            <div class="heading">
                <h2 class="wow fadeInLeftBig">Fill Details for Free Class</h2>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 p-0">
            <div>
                <div class="Scedule-msg"></div>
            </div>
            <form id="form1" method="post" name="form1" action="/php/sendmail.php">
                <div class="controls">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 pull-left">
                            <div class="form-group">
                                <label for="form_name">First Name *</label>
                                <input class="form-control" id="firstName" name="firstName" required type="text">
                                <div class="first-name-help-block with-errors" style="color: red"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 pull-left">
                            <div class="form-group">
                                <label for="form_lastname">Last Name *</label>
                                <input class="form-control" id="lastName" name="lastName" required type="text">
                                <div class="last-name-help-block with-errors" style="color: red"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 pull-left">
                            <div class="form-group">
                                <label for="form_lastname">E-mail Address *</label>
                                <input class="form-control" id="emailAddr" name="emailAddr" required type="email">
                                <div class="email-help-block with-errors" style="color: red"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 pull-left">
                            <div class="form-group">
                                <label for="c">Phone Number *</label>
                                <input class="form-control" id="phoneNo"
                                       name="phoneNo"
                                       onkeypress="return (event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 0) || (event.charCode == 8) || (event.charCode == 46)" required type="tel">
                                <div class="phone-help-block with-errors" style="color: red"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding-right: 15px; padding-left: 15px;">
                        <label class="form_name">Message</label>
                        <div class="form-group col-lg-12 p-0">
                            <textarea class="form-control" id="comments" name="comments" row="10"
                                      style="height: 100px;"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form_name">&nbsp;</label>
                        <div class="form-group">
                            <input class="btn btn-lg btn-success pull-left" id="mailSubmit" type="submit"
                                   value="Submit">
                            <div class="showLoading pull-left"><img src="assets/img/loader.gif"> Please wait...</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<!--=========== END CONTACT SECTION ================-->

<!--=========== BEGIN FOOTER ================-->
<?php
include "./component/footer.html"
?>

<!--=========== END FOOTER ================-->

<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- For smooth animatin  -->
<script src="js/wow.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- superslides slider -->
<script src="js/jquery.superslides.min.js" type="text/javascript"></script>
<!-- slick slider -->
<script src="js/slick.min.js"></script>
<!-- for circle counter -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>


<!-- Custom js-->
<script src="js/custom.js"></script>
<script>
    $(document).ready(function () {

        var s_round = '.s_round';
        var date = new Date()
        $("#footer_year").text(date.getFullYear())
        $(s_round).hover(function () {
            $('.b_round').toggleClass('b_round_hover');
            return false;
        });

        $(s_round).click(function () {
            $('.flip_box').toggleClass('flipped');
            $(this).addClass('s_round_click');
            $('.s_arrow').toggleClass('s_arrow_rotate');
            $('.b_round').toggleClass('b_round_back_hover');
            return false;
        });

        $(s_round).on('transitionend', function () {
            $(this).removeClass('s_round_click');
            $(this).addClass('s_round_back');
            return false;
        });
    });
</script>
</body>
</html>
