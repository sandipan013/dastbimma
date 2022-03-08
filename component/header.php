
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
                                <li><a href="our_programs.php#certificate">Muay Thai</a></li>
                                <li><a href="our_programs.php#certificate">Brazilian Jiu Jitsu</a></li>
                                <li><a href="our_programs.php#certificate">Kyokushin Karate</a></li>
                                <li><a href="our_programs.php#certificate">Kettlebell</a></li>
                                <li><a href="our_programs.php#certificate">Kickboxing</a></li>
                                <li><a href="our_programs.php#self-defense">Combat Self defense</a></li>
                                <li><a href="our_programs.php#self-defense">Certifications</a></li>
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
                            <li class="nav-item active"><a href="about_us.php">About Us</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a href="about_us.php">About Us</a></li>
                        <?php } ?>

                        <!--                        <li><a href="#team">Team</a></li>-->
                        <?php if($contactUs == true) { ?>
                            <li class="nav-item active"><a href="contact_us.php">Contact Us</a></li>
                        <?php } else { ?>
                            <li class="nav-item"><a href="contact_us.php">Contact Us</a></li>
                        <?php } ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>

    <!-- END MENU -->
</header>
<!--=========== End HEADER SECTION ================-->
