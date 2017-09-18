<!doctype html>
<html class="no-js" lang="en">
<head>
    <base href="<?php echo base_url().'public/';?>"></head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bhandari Samaj, Bhandari Samaj Online" />
    <meta name="keywords" content="Bhandari Samaj, Community, event, online Rural Details" />
    <meta name="author" content="BDEXPERT" />

    <!--====== TITLE TAG ======-->
    <title>:: Bhandari Samaj Online ::</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/overwrite.css">
    <link rel="stylesheet" href="css/pogo-slider.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/icofont.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"><img src="img/loading.svg" alt=""></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="icofont icofont-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header <?php if( ( ($this->uri->segment(1)=="home") || ($this->uri->segment(1)=="") ) && ( ($this->uri->segment(2)=="") || ($this->uri->segment(2)=="index"))){echo 'class="top-area"';} else {echo 'class="top-area single-page"'; }?> class="" id="home">
        <div class="header-top-area">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="call-to-action">
                                <p><i class="icofont icofont-smart-phone"></i> <a>info@bhandari-samaj-online.com</a></p>
                                <p><i class="icofont  icofont-phone"></i> <a>+1 800 234 5678</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="top-menu">
                                <ul>
                                    <li><a><i class="icofont icofont-sign-in"></i> Login</a></li>
                                    <li><a><i class="icofont icofont-checked"></i> Register</a></li>
                                    <li>
                                        <a>
                                            <i class="icofont icofont-users-alt-3"></i>
                                            શ્રી સમસ્ત ચોર્યાસી ભંડારી જ્ઞાતિ પંચ
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button 
                                type="button" 
                                class="navbar-toggle" 
                                data-toggle="collapse" 
                                data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a 
                                class="navbar-brand" 
                                href="<?php echo base_url()."home/index";?>">
                                <img src="img/main_logo.png" alt="">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul id="nav" class="nav navbar-nav navbar-right">
                                <li <?php if( ( ($this->uri->segment(1)=="home") || ($this->uri->segment(1)=="") ) && ( ($this->uri->segment(2)=="") || ($this->uri->segment(2)=="index"))){echo 'class="active"';}?>>
                                    <a href="<?php echo base_url()."home/index";?>">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown">About</a>
                                    <ul class="dropdown-menu">
                                        <li <?php if( ($this->uri->segment(1)=="aboutus" ) && ( ($this->uri->segment(2)=="") || ($this->uri->segment(2)=="index"))){echo 'class="active"';}?>> <a href="<?php echo base_url()."aboutus/index";?>">About Samaj</a> </li>
                                        <li <?php if( ($this->uri->segment(1)=="committee" ) && ( ($this->uri->segment(2)=="") || ($this->uri->segment(2)=="index"))){echo 'class="active"';}?>> <a href="<?php echo base_url()."committee/index";?>">Committee-Members</a> </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown">Events</a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="<?php echo base_url()."events/wedding";?>">Marriage</a> </li>
                                        <li> <a href="<?php echo base_url()."events/index";?>">Other Events</a> </li>
                                    </ul>
                                </li>
                                <li> <a href="<?php echo base_url()."rural/index";?>">Rural</a> </li>
                                <li> <a href="<?php echo base_url()."gallery/index";?>">Gallery</a> </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown">Services</a>
                                    <ul class="dropdown-menu">
                                        <li <?php if( ($this->uri->segment(1)=="aboutus" ) && ( ($this->uri->segment(2)=="") || ($this->uri->segment(2)=="index"))){echo 'class="active"';}?>> <a href="<?php echo base_url()."aboutus/index";?>">Eduction Scholarship</a> </li>
                                        <li <?php if( ($this->uri->segment(1)=="committee" ) && ( ($this->uri->segment(2)=="") || ($this->uri->segment(2)=="index"))){echo 'class="active"';}?>> <a href="<?php echo base_url()."committee/index";?>">Medical Help</a> </li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url()."contactus/index";?>">Contact</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        <!--HHOME SLIDER AREA-->
        <?php 
            if( ( ($this->uri->segment(1)=="home") || ($this->uri->segment(1)=="") ) && ( ($this->uri->segment(2)=="") || ($this->uri->segment(2)=="index"))){
        ?>
            <div class="slider-area">
                <div class="pogoSlider">
                    <div 
                        class="pogoSlider-slide" 
                        data-transition="fade"
                        style="background:url(img/slider/banner1.png) no-repeat scroll 0 0 / cover;">
                            <h1 
                                class="pogoSlider-slide-element" 
                                data-in="slideDown" 
                                data-out="flipX" 
                                data-duration="700">
                                શ્રી સમસ્ત ચોર્યાસી ભંડારી જ્ઞાતિ પંચ
                            </h1>
                    </div>
                    <div 
                        class="pogoSlider-slide" 
                        data-transition="fade" 
                        style="background:url(img/slider/banner2.png) no-repeat scroll 0 0 / cover;">
                        <h1 
                            class="pogoSlider-slide-element" 
                            data-in="slideDown" 
                            data-out="flipX" 
                            data-duration="700">
                            શ્રી સમસ્ત ચોર્યાસી ભંડારી જ્ઞાતિ પંચ
                        </h1>
                    </div>
                </div>
            </div>
        <?php
            } else {
                    $content1 = '';
                    $content2 = '';
                if( ($this->uri->segment(1)=="aboutus" ) && ( ($this->uri->segment(2)=="") || ($this->uri->segment(2)=="index"))){
                    $content1 = 'About';
                    $content2 = 'About Us';
                } else if( ($this->uri->segment(1)=="contactus" ) && ( ($this->uri->segment(2)=="") || ($this->uri->segment(2)=="index"))){
                    $content1 = 'Contact';
                    $content2 = 'Contact Us';
                }
            ?>
            <!-- <div class="welcom-barner-area">
                <div class="page-barner-bg" data-stellar-background-ratio="0.5"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="welcome-text text-center">
                                <h1> <?php echo $content1; ?> </h1>
                                <h3>Home / <?php echo $content2; ?> </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->    
            <?php
            }
        ?>
        
        <!--HOME SLIDER AREA END-->

    </header>
    <!--END TOP AREA-->

    <?php echo $body; ?>

    <!--FOOER AREA-->
    <footer class="footer-area">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a><img src="img/main_logo.png" alt=""></a>
                            </div>
                            <div class="footer-text">
                                <p>Kindergarten school is a wonderland for Kids to learn, play, and grow naturally and creatively. </p>
                                <ul>
                                    <li><i class="icofont icofont-check"></i> Advanced Educational Programs</li>
                                    <li><i class="icofont icofont-check"></i> Creativity & Thinking</li>
                                    <li><i class="icofont icofont-check"></i> Yoga & Swimming</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-offset-1 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget">
                            <h3 class="yellow relative">Instagram</h3>
                            <div class="instagram" id="instagram"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-lg-offset-1 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget">
                            <div class="footer-subscriber-form">
                                <h3 class="red relative">Newsletter Signup</h3>
                                <p>Get Update Our News Evertime, You Need Just Subscribe</p>
                                <div class="subscriber-form">
                                    <!--<form action="#">
                                        <input type="email" name="subscriber_email" id="subscriber_email">
                                        <button type="submit"><i class="icofont icofont-reply"></i></button>
                                    </form>-->

                                    <form id="mc-form">
                                        <label class="mt10" for="mc-email"></label>
                                        <input type="email" id="mc-email" placeholder="Enter Your Email">
                                        <button type="submit" class="plus-btn"><i class="icofont icofont-reply"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="footer-social-bookmark">
                                <ul>
                                    <li><a><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li><a><i class="icofont icofont-social-linkedin"></i></a></li>
                                    <li><a><i class="icofont icofont-social-instagram"></i></a></li>
                                    <li><a><i class="icofont icofont-social-skype"></i></a></li>
                                    <li><a><i class="icofont icofont-social-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center">
                            <p>&copy; 2017 <a>Bhandari Samaj</a> All Right Reserved. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->

    <!--====== SCRIPTS JS ======-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.pogo-slider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/instafeed.min.js"></script>
    <script src="js/jquery.ajaxchimp.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/navigation.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>

    <!--==== GOOGLE MAPS ====-->
    <?php 
        if(($this->uri->segment(1)=="home") || ($this->uri->segment(1)=="") || ($this->uri->segment(1)=="contactus")){
    ?>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&amp;sensor=false"></script>
        <script src="js/maps.active.js"></script>
    <?php } ?>
    
</body>
</html>
