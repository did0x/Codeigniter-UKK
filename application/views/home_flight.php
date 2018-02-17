<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Book Awesome Trip - Flight List</title>
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
                    <a href="index.html" title=""><img src="<?php echo base_url('assets/home/');?>images/logo-header.png" alt=""></a>
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
                                        <a href="index.html" title="">Home</a>
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
                    <img src="<?php echo base_url('assets/home/');?>images/logo-banner.png" alt="">
                </a>
            </div>
            <!-- Logo -->
        </section>
        <!--End Banner-->

        <!-- Main -->
        <div class="main">
            <div class="container">
                <div class="main-cn flight-page bg-white clearfix">
                    <div class="row">

                        <!-- Flight Right -->
                        <div class="col-md-9 col-md-push-3">

                            <!-- Breakcrumb -->
                            <section class="breakcrumb-sc">
                                <ul class="breadcrumb arrow">
                                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li><a href="hotel.html" title="">Hotels</a></li>
                                    <li><a href="#" title="">Europe </a></li>
                                    <li>Netherlands</li>
                                </ul>
                            </section>
                            <!-- End Breakcrumb -->

                            <!-- Flight List -->
                            <section class="flight-list">

                                <!-- Flight Statis -->
                                <div class="flight-statis">
                                    <div class="row">
                                        <div class="col-sm-4 flight-statis-item">
                                            <span class="icon"><i class="fa fa-tags"></i></span>
                                            <h5>Cheapest</h5>
                                            <p><ins>$258</ins><span>/ 23h 52m</span> (Average)</p>
                                        </div>
                                        <div class="col-sm-4 flight-statis-item">
                                            <span class="icon"><i class="fa fa-bolt"></i></span>
                                            <h5>Quickest</h5>
                                            <p><ins>$358</ins><span>/ 23h 52m</span> (Average)</p>
                                        </div>
                                        <div class="col-sm-4 flight-statis-item">
                                            <span class="icon"><i class="fa fa-thumbs-up"></i></span>
                                            <h5>Best Value</h5>
                                            <p><ins>$358</ins><span>/ 23h 52m</span> (Average)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Flight Statis -->

                                <!-- Flight List Head -->
                                <div class="flight-list-head">
                                    <span class="icon"><img src="images/icon-outbound.png" alt=""></span>    
                                    <h3>Bangkok - New York</h3>
                                    <p><span>110</span> trips</p>
                                </div>
                                <!-- Flight List Head -->

                                <!-- Flight List Table -->
                                <div class="flight-list-cn">
                                    <div class="scroll-table">
                                        <table class="table flight-table table-radio">
                                            <thead>
                                                <tr>
                                                    <th>Airlines</th>
                                                    <th>Departure</th>
                                                    <th>Arrival</th>
                                                    <th class="text-center">Duration</th>
                                                    <th class="text-center">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="td-airline">
                                                        <div class="radio-checkbox">
                                                            <input type="radio" name="airline"  id="radio-air-11" class="radio">
                                                            <label for="radio-air-11"></label>
                                                        </div>
                                                        <img src="images/flight/icon/icon-3.png" alt="">
                                                        Qatar Airways
                                                    </td>
                                                    <td class="td-time">
                                                        <p>08:35 <small>AM</small> <span>BKK</span></p>
                                                    </td>
                                                    <td class="td-time">
                                                        <p>09:00 <small>AM</small> <span>JFK</span></p>
                                                    </td>
                                                    <td class="td-stop text-center">
                                                        <div class="stop-cn">
                                                            <label>18h15m</label>
                                                            <span class="stops">
                                                                <span class="stop"></span>
                                                            </span>
                                                            <label>1 Stop</label>
                                                        </div>
                                                    </td>
                                                    <td class="td-price text-center">
                                                        <span><ins>1,453</ins> USD</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End Flight List Table -->

                            </section>
                            <!-- End Flight List -->

                        </div>
                        <!-- End Flight Right -->

                        <!-- Sidebar -->
                        <div class="col-md-3 col-md-pull-9">
                            <!-- Sidebar Content -->
                            <div class="sidebar-cn">

                                <!-- Search Result -->
                                <div class="search-result">
                                    <p>
                                        We found <br>
                                        <ins>640</ins> <span>properties availability</span>
                                    </p>
                                </div>
                                <!-- End Search Result -->
                                <!-- Search Form Sidebar -->
                                <div class="search-sidebar">
                                    <ul class="form-radio">
                                        <li>
                                            <div class="radio-checkbox">
                                                <input type="radio" name="radio-1" id="radio-1" class="radio">
                                                <label for="radio-1">Round Trip</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input type="radio" name="radio-1" id="radio-2" class="radio">
                                                <label for="radio-2">One-way</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input type="radio" name="radio-1" id="radio-3" class="radio">
                                                <label for="radio-3">Multiple Destinations</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="form-search clearfix">
                                            <div class="form-field col-md-12">
                                                <label for="picking"><span>From:</span> City or airport</label>
                                                <input type="text" name="picking" id="picking" value="" class="field-input">
                                            </div>
                                            <div class="form-field col-md-12">
                                                <input type="text" name="flightto" id="flightto" value="" class="field-input" placeholder="To">
                                            </div>
                                            <div class="form-field field-date col-md-6">
                                                <input type="text" class="field-input calendar-input" placeholder="Depart">
                                            </div>
                                            <div class="form-field field-date col-md-6">
                                                <input type="text" class="field-input calendar-input" placeholder="Return">
                                            </div>
                                            <div class="form-field field-select col-md-6">
                                                <div class="select">
                                                    <span data-placeholder="Select">Adults</span>
                                                    <select>
                                                        <option>Adults</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-field field-select col-md-6">
                                                <div class="select">
                                                    <span data-placeholder="Select">Children</span>
                                                    <select>
                                                        <option>Children</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-submit col-md-12">
                                                <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Search Form Sidebar -->
                                <!-- Narrow your results -->
                                <div class="narrow-results">
                                    <h6>Narrow your results</h6>
                                    <div class="narrow-form">
                                        <form action="action" method="get">
                                            <input type="text" name="" class="narrow-input" placeholder="Property name contains:">
                                            <button class="submit-narrow"></button>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Narrow your results -->
                                <!-- Max Flight Duration Slider -->
                                <div class="widget-sidebar price-slider-sidebar">
                                    <h4 class="title-sidebar">Max Flight Duration</h4>
                                    <div class="slider-sidebar time-slider" data-start="1200">
                                        <input type="text" class="range" />
                                    </div>
                                </div>
                                <!-- End Max Flight Duration Slider -->
                                <!-- Stops -->
                                <div class="widget-sidebar facilities-sidebar">
                                    <h4 class="title-sidebar">Stops</h4>
                                    <ul class="widget-ul">
                                        <li>
                                            <div class="radio-checkbox">
                                                <input name="radio-stop" id="stop-1" type="radio" class="radio" />
                                                <label for="stop-1">Non-stop-</label>
                                            </div>
                                            <span>$2,120</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input name="radio-stop" id="stop-2" type="radio" class="radio" checked />
                                                <label for="stop-2">Max 1 stop</label>
                                            </div>
                                            <span>$1,027</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input name="radio-stop" id="stop-3" type="radio" class="radio" />
                                                <label for="stop-3">Any stops</label>
                                            </div>
                                            <span>$863</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Stops -->
                                <!-- Depart times Slider -->
                                <div class="widget-sidebar price-slider-sidebar">
                                    <h4 class="title-sidebar">Depart times</h4>
                                    <div class="slider-sidebar time-slider" data-start="0" data-end="1440">
                                        <input type="text" class="range" />
                                    </div>
                                </div>
                                <!-- End Depart times Slider -->
                                <!-- Return times Slider -->
                                <div class="widget-sidebar price-slider-sidebar">
                                    <h4 class="title-sidebar">Return times</h4>
                                    <div class="slider-sidebar time-slider" data-start="0" data-end="1440">
                                        <input type="text" class="range" />
                                    </div>
                                </div>
                                <!-- End Return times Slider -->
                                <!-- Airline -->
                                <div class="widget-sidebar facilities-sidebar">
                                    <h4 class="title-sidebar">Airlines</h4>
                                    <ul class="widget-ul">
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="check-1" type="checkbox" class="checkbox" />
                                                <label for="check-1">American Airlines</label>
                                            </div>
                                            <span>$2,120</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="check-2" type="checkbox" class="checkbox" checked />
                                                <label for="check-2">Air France</label>
                                            </div>
                                            <span>$1,027</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="check-3" type="checkbox" class="checkbox" />
                                                <label for="check-3">Asiana</label>
                                            </div>
                                            <span>$863</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="check-4" type="checkbox" class="checkbox" />
                                                <label for="check-4">Cathay Pacific</label>
                                            </div>
                                            <span>$2,120</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="check-5" type="checkbox" class="checkbox" />
                                                <label for="check-5">China Southern</label>
                                            </div>
                                            <span>$1,027</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="check-6" type="checkbox" class="checkbox" />
                                                <label for="check-6">Jet Airways</label>
                                            </div>
                                            <span>$863</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="check-7" type="checkbox" class="checkbox" />
                                                <label for="check-7">Vietnam Airlines</label>
                                            </div>
                                            <span>$2,120</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="check-8" type="checkbox" class="checkbox" />
                                                <label for="check-8">Qatar Airways</label>
                                            </div>
                                            <span>$1,027</span>
                                        </li>
                                        <li>
                                            <div class="radio-checkbox">
                                                <input id="check-9" type="checkbox" class="checkbox" />
                                                <label for="check-9">Singapore Airlines</label>
                                            </div>
                                            <span>$1,027</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Airline -->

                            </div>
                            <!-- End Sidebar Content -->
                        </div>
                        <!-- End Sidebar -->

                        
                    </div>

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
    <script type="text/javascript" src="<?php echo base_url('assets/home/');?>http://maps.google.com/maps/api/js?sensor=false"></script>
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
