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
$ourProgram = true;
include "./component/header.php";
?>
<!-- END HEADER SECTION -->

<br/>
<br/>
<section id="team">
    <div class="service-tab container-tab">
        <div class="col-lg-12 col-md-12 p-0">
            <div class="heading">
                <h2 class="wow fadeInLeftBig">Our Programs</h2>
            </div>
        </div>
        <!--=========== BEGIN OUR PROGRAMS ================-->
        <section class="default-container pb-0 success-stories-container" id="mma">
            <div class="col-lg-12 col-md-12 p-0 bg-1 bg-cover border-top border-bottom float-left ">
                <div class="col-sm-5 col-sm-push-7 success-stories-img">
                    <img src="assets/img/programs/MMA_trainings.jpeg" width="90%">
                </div>
                <div class="media-body col-sm-7 col-sm-pull-5 default-content-padding white-bg">
                    <h3>Mixed Martial Arts (MMA)</h3>
                    <h4>Customer</h4>
                    <div class="">
                        <span class="fa fa-arrows grey-font"></span> &nbsp; Rapidly-growing startup focused on data governance
                        and classification issues (e.g., GDPR, PII, CPNI).
                    </div>
                    <h4>Challenge</h4>
                    <div class="mt-2">
                        <span class="fa fa-arrows grey-font"></span> &nbsp; They needed help architecting and scaling their V1
                        platform to accommodate new customers on the cloud.
                    </div>
                    <h4>Solution</h4>
                    <div class="mt-2">
                        <span class="fa fa-arrows grey-font"></span> &nbsp; Our team architected a containerized and secure
                        microservices-based solution.
                    </div>
                    <h4>Outcomes</h4>
                    <div class="mt-2">
                        <span class="fa fa-arrows grey-font"></span> &nbsp; Resulted in the deployment of a Kubernetes-based &
                        cloud-agnostic solution that could also integrate with on-prem resources.
                    </div>
                    <div class="mt-2">
                        <span class="fa fa-arrows grey-font"></span> &nbsp; We also improved client’s development processes and
                        agility by instituting automated deployment systems and policies (CI:CD pipelines).
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 p-0 bg-4 bg-cover border-bottom float-left" id="karate">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 success-stories-img">
                    <img src="assets/img/programs/karate_trainings.jpeg" width="90%">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 default-content-padding white-bg">
                    <h3>Karate</h3>
                    <div class="media-body col-lg-12 col-sm-12 col-md-12 p-0">
                        <h4>Customer</h4>
                        <div class="">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; Large logistics company was acquiring a foreign
                            subsidiary in a complimentary market segment.
                        </div>
                        <h4>Challenge</h4>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; They needed an evaluation of the target
                            company’s technology stack for their private equity due diligence.
                        </div>
                        <h4>Solution</h4>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; Our team developed a strategy for measuring and
                            testing different aspects of their infrastructure and software systems.
                        </div>
                        <h4>Outcomes</h4>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; Resulted in the execution of a series of
                            comprehensive integration and user tests that would ensure acquired technology would add value to
                            the new company.
                        </div>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; We also proposed an integration roadmap and
                            growth plan for the combined technology stack of the post-merger company.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 p-0 bg-3 bg-cover border-bottom float-left" id="certificate">
                <div class="col-sm-5 col-sm-push-7 success-stories-img">
                    <img src="assets/img/programs/certificate_program.jpeg" width="90%">
                </div>
                <div class="media-body col-sm-7 col-sm-pull-5 default-content-padding white-bg">
                    <h3>Certification</h3>
                    <div class="media-body col-lg-12 col-sm-12 col-md-12 p-0">
                        <h4>Telecom Provider</h4>
                        <div class="">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; National telecom provider with large array of
                            diverse customer data across multiple data warehousing systems.
                        </div>
                        <h4>Challenge</h4>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; They needed help addressing enterprise data security
                            and governance, both from a technical and policy-level.
                        </div>
                        <h4>Solution</h4>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; Our team reviewed their internal audit results and
                            prepared an enterprise-wide plan for data security.
                        </div>
                        <h4>Outcomes</h4>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; Resulted in data security policies across Hadoop and
                            Teradata systems, including user-auditing and row-level table encryption.
                        </div>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; We also proposed a strategy for a new
                            enterprise-wide Center of Excellence for big data & security topics.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 p-0 bg-4 bg-cover border-bottom float-left" id="self-defense">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 success-stories-img">
                    <img src="assets/img/programs/Self-Defense.jpeg" width="90%">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 default-content-padding white-bg">
                    <h3>Self Defense</h3>
                    <div class="media-body col-lg-12 col-sm-12 col-md-12 p-0">
                        <h4>Customer</h4>
                        <div class="">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; Large logistics company was acquiring a foreign
                            subsidiary in a complimentary market segment.
                        </div>
                        <h4>Challenge</h4>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; They needed an evaluation of the target
                            company’s technology stack for their private equity due diligence.
                        </div>
                        <h4>Solution</h4>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; Our team developed a strategy for measuring and
                            testing different aspects of their infrastructure and software systems.
                        </div>
                        <h4>Outcomes</h4>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; Resulted in the execution of a series of
                            comprehensive integration and user tests that would ensure acquired technology would add value to
                            the new company.
                        </div>
                        <div class="mt-2">
                            <span class="fa fa-arrows grey-font"></span> &nbsp; We also proposed an integration roadmap and
                            growth plan for the combined technology stack of the post-merger company.
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--=========== END OUR PROGRAMS ================-->
    </div>
</section>


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
