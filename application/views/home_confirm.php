<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Book Awesome Trip - Element</title>
    <!-- Font Google -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7COpen+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <!-- End Font Google -->
    <!-- Library CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/home/');?>css/library/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/');?>css/library/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/');?>css/library/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/');?>css/library/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/');?>css/library/jquery.mb.YTPlayer.min.css">
    <!-- End Library CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/home/');?>css/style.css">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="tb-cell">
            <div id="page-loading">
                <div></div>
                <p>Loading</p>
            </div>
        </div>
    </div>
    <!-- Wrap -->
    <div id="wrap"> 
        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <!-- Logo -->
                <div class="logo float-left">
                    <a href="<?php echo site_url('home') ?>" title=""><img src="<?php echo base_url('assets/home/');?>images/logo-header.png" alt=""></a>
                </div>
                <!-- End Logo -->
                <!-- Bars -->
                <div class="bars" id="bars"></div>
                <!-- End Bars -->

                <!--Navigation-->
                <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner">
                        <a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                <ul class="menu-list text-uppercase">

                                    <!-- Home -->
                                    <li class="current-menu-parent">
                                        <a href="<?php echo site_url('home') ?>" title="">Home</a>
                                    </li>

                                    <!-- Flight -->
                                    <li>
                                        <a href="#">Booking</a>
                                    </li>

                                    <!-- About -->
                                    <li>
                                        <a href="<?php echo site_url('about');?>" title="">About</a>
                                    </li>

                                    <!-- Contact -->
                                    <li>
                                        <a href="<?php echo site_url('contact');?>" title="">Contact</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <!--End Navigation-->
            </div>
        </header>
        <!-- End Header -->

        <!--Banner-->
        <section class="sub-banner">
            <!--Background-->
            <div class="bg-parallax bg-1"></div>
            <!--End Background-->
            <!-- Logo -->
            <div class="logo-banner text-center">
                <a href="" title="">
                    <img src="images/logo-banner.png" alt="">
                </a>
            </div>
            <!-- Logo -->
        </section>
        <!--End Banner-->

        <!-- Main -->
        <div class="main">
            <div class="container">
                <div class="main-cn bg-white clearfix">
                    <!--Breakcrumb-->
                    <div class="step">
                        <!-- Step -->
                        <ul class="payment-step text-center clearfix">
                            <li class="step-select">
                                <span>1</span>
                                <p>Choose Your Flight</p>
                            </li>
                            <li class="step-select">
                                <span>2</span>
                                <p>Your Booking &amp; Payment Details</p>
                            </li>
                            <li class="step-part">
                                <span>3</span>
                                <p>Booking Completed!</p>
                            </li>
                        </ul>
                        <!-- End Step -->
                    </div>
                    <section class="element-sc">                                            
                        <!--Alert Box - Caneldar-->
                        <div class="element-cn my-profile">
                            <div class="row">
                                <!--Alert Box-->
                                <div class="col-md-12">
                                    <h2>Congratulations ! </h2>
                                    <!--Alert Box Success-->
                                    <div class="alert-box alert-success">
                                        <h6>Success  message</h6>
                                        <span>Your have successfully book a plane from -- to --- . This recap from your booking :</span>
                                    </div>
                                    <!--End Alert Box Success-->
                                </div>
                                <!--End Alert Box-->
                            </div>
                            <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="my-profile__title">Personal Information</h4> 
                                            <ul>
                                                <li><span>First Name</span>JohDoe</li>
                                                <li><span>Last Name</span>Black</li>
                                                <li><span>Email</span>Joh@gmail.com</li>
                                                <li><span>Phone number</span>+84 973.085.425</li>
                                                
                                            </ul>   
                                        </div>

                                        <div class="col-md-6">
                                            <h4 class="my-profile__title">Location</h4> 
                                            <ul>
                                                <li><span>Home Airport</span>JohDoe</li>
                                                <li><span>Street Address</span>Black</li>
                                                <li><span>City</span>Joh@gmail.com</li>
                                                <li><span>Country of passport</span>+84 973.085.425</li>
                                            </ul>   
                                    </div>
                            </div>
                        </div>
                        <!--End Alert Box - Caneldar-->
                    </section>
                </div>
            </div>
        </div>
        <!-- End Main -->

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-md-4">
                        <div class="logo-foter">
                            <a href="index.html" title=""><img src="images/logo-footer.png" alt=""></a>
                        </div>
                    </div>
                    <!-- End Logo -->
                    <!-- Navigation Footer -->
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><a href="about.html" title="">About</a></li>
                                <li><a href="blog.html" title="">Blog</a></li>
                                <li><a href="fqa.html" title="">FQA</a></li>
                                <li><a href="careers.html" title="">Carrers</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navigation Footer -->
                    <!-- Navigation Footer -->
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><a href="contact.html" title="">Contact Us</a></li>
                                <li><a href="#" title="">Privacy Policy</a></li>
                                <li><a href="#" title="">Term of Service</a></li>
                                <li><a href="#" title="">Security</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navigation Footer -->
                    <!-- Footer Currency, Language -->
                    <div class="col-sm-6 col-md-4">
                        <!-- Language -->
                        <div class="currency-lang-bottom dropdown-cn float-left">
                            <div class="dropdown-head">
                                <span class="angle-down"><i class="fa fa-angle-down"></i></span>
                            </div>
                            <div class="dropdown-body">
                                <ul>
                                    <li class="current"><a href="#" title="">English</a></li>
                                    <li><a href="#" title="">Bahasa Melayu</a></li>
                                    <li><a href="#" title="">Català</a></li>
                                    <li><a href="#" title="">Dansk</a></li>
                                    <li><a href="#" title="">Deutsch</a></li>
                                    <li><a href="#" title="">Francais</a></li>
                                    <li><a href="#" title="">Italiano</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Language -->
                        <!-- Currency -->
                        <div class="currency-lang-bottom dropdown-cn float-left">
                            <div class="dropdown-head">
                                <span class="angle-down"><i class="fa fa-angle-down"></i></span>
                            </div>
                            <div class="dropdown-body">
                                <ul>
                                    <li class="current"><a href="#" title="">US</a></li>
                                    <li><a href="#" title="">ARS</a></li>
                                    <li><a href="#" title="">ADU</a></li>
                                    <li><a href="#" title="">CAD</a></li>
                                    <li><a href="#" title="">CHF</a></li>
                                    <li><a href="#" title="">CNY</a></li>
                                    <li><a href="#" title="">CZK</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Currency -->
                        <!--CopyRight-->
                        <p class="copyright">
                            © 2009 – 2014 Bookyourtrip™ All rights reserved.
                        </p>
                        <!--CopyRight-->
                    </div>
                    <!-- End Footer Currency, Language -->
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        
    </div>
    
    <!-- Library JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>js/library/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>js/library/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>js/library/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>js/library/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>js/library/parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>js/library/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>js/library/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>js/library/jquery.mb.YTPlayer.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>js/library/SmoothScroll.js"></script>
    <!-- End Library JS -->
    <!-- Main Js -->
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>js/script.js"></script>
    <!-- End Main Js -->
</body>
</html>