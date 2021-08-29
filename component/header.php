
<!--=========== BEGIN HEADER SECTION ================-->
<header id="header">
    <!-- BEGIN MENU -->

    <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <!--<button class="navbar-toggle collapsed"  type="button" id="open-button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
                    <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar"
                            data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- LOGO -->

                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="index.php">
                        <img alt="logo" class="mt-2" src="assets/img/main_logo.png" width="200px">
                    </a>


                </div>
                <!--Menu Mobile
                <div class="menu-wrap">
                    <div class="main-menu">
                        <h4 class="title-menu">Main menu</h4>
                        <button class="close-button" id="close-button"><i class="fa fa-times"></i></button>
                    </div>
                    <ul class="nav-menu">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="">
                            <a href="about.php">About</a>
                        </li>

                        <li class="dropdown ">
                            <a href="#" data-toggle="dropdown">Branches<i class="icon-arrow"></i></a>
                            <ul class="child-nav dropdown-nav">
                                <li><a href="bidang-sundarpur.php">Bidang MMA Sundarpur</a></li>
                                <li><a href="bidang-bharalumukh.php">Bidang MMA Bharalumukh</a></li>
                                <li><a href="bidang-sarab-bhatti.php">Bidang MMA Sarab Bhatti</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">Programs<i class="icon-arrow"></i></a>
                            <ul class="child-nav dropdown-nav">
                                <li class=""><a href="mma.php">Mixed Martial Arts (MMA)</a></li>
                                <li class=""><a href="fitness.php">Fitness</a></li>
                                <li class=""><a href="weight-management.php">Weight Management</a></li>
                                <li class=""><a href="self-defense.php">Self Defense</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="facilities.php">Facilities</a>
                        </li>
                        <li class="">
                            <a href="coaches.php">Coaches</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">Our Legacy<i class="icon-arrow"></i></a>
                            <ul class="child-nav dropdown-nav">
                                <li class=""><a href="club-war.php">Bidang Club War</a></li>
                                <li class=""><a href="fight-league.php">Bidang Fight League</a></li>

                            </ul>
                        </li>
                        <li class="">
                            <a href="updates.php">Updates</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">Gallery<i class="icon-arrow"></i></a>
                            <ul class="child-nav dropdown-nav">
                                <li class=""><a href="photos.php">Photos</a></li>
                                <li class=""><a href="videos.php">Videos</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
                Menu Mobile-->

                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right main_nav" id="top-menu">
                        <?php if($home == true) { ?>
                            <li class="nav-item active"><a href="index.php">Home</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a href="index.php">Home</a></li>
                        <?php } ?>

                        <?php if($ourProgram == true) { ?>
                            <li class="nav-item dropdown-submenu active"><a href="our_programs.php">Our Programs</a>
                        <?php } else { ?>
                            <li class="nav-item dropdown-submenu"><a href="our_programs.php">Our Programs</a>
                        <?php } ?>

                            <ul class="dropdown-menu">
                                <li><a href="our_programs.php">MMA</a></li>
                                <li><a href="our_programs.php#karate">Karate</a></li>
                                <li><a href="our_programs.php#certificate">Certification</a></li>
                                <li><a href="our_programs.php#self-defense">Self Defense</a></li>
                            </ul>
                        </li>
                        <?php if($trainers == true) { ?>
                            <li class="nav-item active"><a href="trainers.php">Trainers</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a href="trainers.php">Trainers</a></li>
                        <?php } ?>
                        <?php if($gallery == true) { ?>
                            <li class="nav-item active"><a href="gallery.php">Gallery</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a href="gallery.php">Gallery</a></li>
                        <?php } ?>
                        <?php if($aboutUs == true) { ?>
                            <li class="nav-item active"><a href="#careers">About Us</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a href="#careers">About Us</a></li>
                        <?php } ?>

                        <!--                        <li><a href="#team">Team</a></li>-->
                        <li class="nav-item"><a class="demo-button" href="contact_us.php">Try Free Class</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>

    <!-- END MENU -->
</header>
<!--=========== End HEADER SECTION ================-->
