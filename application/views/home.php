<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Book Awesome Trip - Home Flight</title>
    <!-- Font Google -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7COpen+Sans:300,400,600' rel='stylesheet' type='text/css'>
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
        <header id="header" class="header" style=" background:linear-gradient(to right, rgb(6, 21, 70) 0%, rgb(7, 18, 65) 25%, rgb(7, 19, 65) 50%, rgb(10, 26, 77) 75%, rgb(11, 30, 85) 100%)">
            <div class="container">
                <!-- Logo -->
                <div class="logo float-left">
                    <a href="<?php echo base_url();?>" title=""><img src="<?php echo base_url('assets/home/');?>images/logo-banner.png" alt=""></a>
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
                                        <a href="flight-list.html">Booking</a>
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
        <section class="banner">
            <!--Background-->
            <div class="bg-parallax bg-6"></div>
            <div class="overlay"></div>
            <!--End Background-->
            <div class="container">
                <!-- Banner Content -->
                <div class="banner-cn">
                    <!-- Logo -->
                    <div class="logo-banner text-center">
                        <a href="" title="">
                            <img src="<?php echo base_url('assets/home/');?>images/logo-banner.png" alt="">
                        </a>
                    </div>
                    <!-- Logo -->
                    <!-- Category Singer -->
                    <div class="category-singer clearfix">
                        <div class="cate-singer-icon float-left">
                            <h2>Flight</h2>
                            <img src="<?php echo base_url('assets/home/');?>images/icon-flight.png" alt="">
                        </div>
                        <p>Over <span>150,000</span> flights for you choice</p>
                    </div>
                    <!-- End Category Singer -->
                    <!-- Form Search -->
                    <div class="form-cn form-flight">
                        <h2>Where would you like to go?</h2>
                        <div class="form-search clearfix">
                            <div class="form-field field-from">
                                <label for="flight-from"><span>Flight from:</span> Airport</label>
                                <input type="text" name="flightfrom" id="flight-from" class="field-input">
                            </div>
                            <div class="form-field field-to">
                                <label for="flight-to"><span>To :</span> Country, Airpor</label>
                                <input type="text" id="flight-to" class="field-input">
                            </div>
                            <div class="form-field field-date">
                                <input type="text" class="field-input calendar-input" placeholder="Departing">
                            </div>
                            <div class="form-field field-date">
                                <input type="text" class="field-input calendar-input" placeholder="Returning">
                            </div>
                            <div class="form-field field-select field-adult">
                                <div class="select">
                                    <span>Adults</span>
                                    <select>
                                        <option>Adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-field field-select field-children">
                                <div class="select">
                                    <span>Children</span>
                                    <select>
                                        <option>Children</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-submit">
                                <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Search -->
                </div>
                <!-- End Banner Content -->
            </div>

        </section>
        <!--End Banner-->

        <!-- Flight Deals -->
        <section class="cruise-deals">
            <!-- Title -->
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>Last-Minute Flight Deals: <span> Jakarta, Bali, Papua &amp; more</span></h2>
                    </div>
                </div>
            </div>
            <!-- End Title -->
            <!-- Cruise Deals Content -->
            <div class="container">
                <div class="cruise-deals-cn clearfix">
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="" title="">
                                    <img src="<?php echo base_url('assets/home/');?>images/deal/img-3.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Jakarta</a>
                                </div>
                                <div class="flight-price">
                                    <span class="price">Rp. 300.000</span>
                                    depart from your place
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="" title="">
                                    <img src="<?php echo base_url('assets/home/');?>images/deal/img-9.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Surabaya</a>
                                </div>
                                <div class="flight-price">
                                    <span class="price">Rp. 345.000</span>
                                    depart from your place
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="" title="">
                                    <img src="<?php echo base_url('assets/home/');?>images/deal/img-4.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Yogyakarta</a>
                                </div>
                                <div class="flight-price">
                                    <span class="price">Rp. 250.000</span>
                                    depart from your place
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="" title="">
                                    <img src="<?php echo base_url('assets/home/');?>images/deal/img-6.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Palembang</a>
                                </div>
                                <div class="flight-price">
                                    <span class="price">Rp. 425.000</span>
                                    depart from your place
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="" title="">
                                    <img src="<?php echo base_url('assets/home/');?>images/deal/img-7.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Papua</a>
                                </div>
                                <div class="flight-price">
                                    <span class="price">Rp. 500.000</span>
                                    depart from your place 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="" title="">
                                    <img src="<?php echo base_url('assets/home/');?>images/deal/img-1.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Bali</a>
                                </div>
                                <div class="flight-price">
                                    <span class="price">Rp. 450.000</span>
                                    depart from your place
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="" title="">
                                    <img src="<?php echo base_url('assets/home/');?>images/deal/img-8.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Sumba</a>
                                </div>
                                <div class="flight-price">
                                    <span class="price">Rp. 490.000</span>
                                    depart from your place
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    <!-- Flight Deal Item -->
                    <div class="col-xs-6 col-md-4 col-lg-3">
                        <div class="flight-deal-item">
                            <figure class="flight-img">
                                <a href="" title="">
                                    <img src="<?php echo base_url('assets/home/');?>images/deal/img-5.jpg" alt="">
                                </a>
                            </figure>
                            <div class="flight-text">
                                <div class="flight-name">
                                    <a href="#" title="">Malang</a>
                                </div>
                                <div class="flight-price">
                                    <span class="price">Rp. 315.000</span>
                                    depart from your place
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Flight Deal Item -->
                    
                </div>
            </div>
            <!-- End Cruise Deals Content -->
        </section>
        <!-- End Flight Deals -->

        <!-- Travel Destinations -->
        <section class="destinations">

            <!-- Background -->
            <div class="bg-parallax bg-2"></div>
            <!-- End Background -->

            <!-- Title -->
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>Top Travel Destinations</h2>
                    </div>
                    <a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view all</a>
                </div>
            </div>
            <!-- End Title -->

            <!-- Destinations Content -->
            <div class="destinations-cn">

                <div class="container">
                    <div class="row">
                        <!-- Destinations Filter -->
                        <div class="col-md-4 col-lg-3">
                            <div class="intro-filter">
                                <div class="intro">
                                    <p>
                                        <small>Discover</small><br>
                                        <span>2364</span> destinations
                                    </p>
                                    <p>
                                        <small>With</small><br>
                                        <span>152,364</span> properties
                                    </p>
                                </div>
                                <ul class="filter">
                                    <li class="active">
                                        <a data-toggle="tab" href="#destinations-1"><i class="fa fa-map-marker"></i> Recommendation for you</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-2"><i class="fa fa-map-marker"></i> Australia &amp; Oceania</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-3"><i class="fa fa-map-marker"></i> Asia</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-4"><i class="fa fa-map-marker"></i> Europe</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-5"><i class="fa fa-map-marker"></i> USA &amp; Canada</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-6"><i class="fa fa-map-marker"></i> The rest of the world</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- End Destinations Filter -->
                        <!-- Destinations Grid -->
                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content destinations-grid">
                                <!-- Tab One -->
                                <div id="destinations-1" class="clearfix tab-pane fade active in ">
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item ">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">London - UK</a>
                                                </div>
                                                <span class="properties-nb">
                                                    <ins>1289</ins> properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-1.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Paris - France</a>
                                                </div>
                                                <span class="properties-nb">
                                                    239 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-2.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Rome - Italy</a>
                                                </div>
                                                <span class="properties-nb">
                                                    478 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-3.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Barcelona - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    452 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-4.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Madrid - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    794 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-5.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Vienna - Austria</a>
                                                </div>
                                                <span class="properties-nb">
                                                    1289 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-6.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                </div>
                                <!-- End Tab One -->
                                <!-- Tab Two -->
                                <div id="destinations-2" class="clearfix tab-pane fade">
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item ">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">London - UK</a>
                                                </div>
                                                <span class="properties-nb">
                                                    <ins>1289</ins> properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-1.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Paris - France</a>
                                                </div>
                                                <span class="properties-nb">
                                                    239 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-2.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Rome - Italy</a>
                                                </div>
                                                <span class="properties-nb">
                                                    478 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-3.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Barcelona - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    452 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-4.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Madrid - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    794 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-5.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Vienna - Austria</a>
                                                </div>
                                                <span class="properties-nb">
                                                    1289 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="<?php echo base_url('assets/home/');?>images/destinations/img-6.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                </div>
                                <!-- End Tab Two -->
                            </div>
                        </div>
                        <!-- ENd Destinations Grid -->
                    </div>
                </div>
            
            </div>
            <!-- End Destinations Content -->

        </section>
        <!-- End Travel Destinations -->

        <!-- Confidence -->
        <section class="confidence-subscribe">

            <!-- Background -->
            <div class="bg-parallax bg-3"></div>
            <!-- End Background -->

            <!-- Title -->
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>Book with confidence <span>, No worries with the charges</span></h2>
                    </div>                
                </div>
            </div>
            <!-- End Title -->

            <!-- Confidence -->
            <div class="confidence-subscribe">
                
                <div class="container">
                    <div class="row cs-sb-cn">

                        <div class="col-md-6">
                            <div class="confidence">
                                <ul>
                                    <li>
                                        <span class="label-nb">01</span>
                                        <h5>No booking charges</h5>
                                        <p>We don't charge you an extra fee for booking a hotel room with us</p>
                                    </li>
                                    <li>
                                        <span class="label-nb">02</span>
                                        <h5>No cancellation fees</h5>
                                        <p>We don't charge you a cancellation or modification fee in case plans change</p>
                                    </li>
                                    <li>
                                        <span class="label-nb">03</span>
                                        <h5>Instant confirmation</h5>
                                        <p>Instant booking confirmation whether booking online or via the telephone</p>
                                    </li>
                                    <li>
                                        <span class="label-nb">04</span>
                                        <h5>Flexible booking</h5>
                                        <p>You can book up to a whole year in advance until the moment of your stay</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <!-- End Confidence -->
            
        </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-md-4">
                        <div class="logo-foter">
                            <a href="index.html" title=""><img src="<?php echo base_url('assets/home/');?>images/logo-footer.png" alt=""></a>
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
    <!-- Scroll Change Color -->
    <script type="text/javascript">
    $(document).ready(function(){       
           var scroll_start = 0;
           var startchange = $('.banner');
           var offset = startchange.offset();
        $(document).scroll(function() { 
            scroll_start = $(this).scrollTop();
            if(scroll_start > offset.top) {
                //Header Color
                $('#header').css('background', '#fff');
                //Image Logo
                $('.logo a img').attr('src','<?php echo base_url('assets/home/');?>images/logo-header.png');
                //Current Menu
                $('.nav-desktop ul ul li:hover, .nav-desktop ul li.current-menu-parent, .nav-desktop ul ul li.current-menu-item').css('background-color','#061546');
                //List Text Color
                $('.nav-desktop ul > li > a').css('color',"#061546");
                //Curent List Text Color
                $('.nav-desktop ul li.current-menu-parent > a, .nav-desktop ul ul li.current-menu-item > a, .nav-desktop ul li.current-menu-parent > span, .nav-desktop ul ul li.current-menu-item > span').css('color','#fff');
            } else {
                //Header Color
                $('#header').css('background', 'linear-gradient(to right, rgb(6, 21, 70) 0%, rgb(7, 18, 65) 25%, rgb(7, 19, 65) 50%, rgb(10, 26, 77) 75%, rgb(11, 30, 85) 100%)');
                //Image Logo
                $('.logo a img').attr('src','<?php echo base_url('assets/home/');?>images/logo-banner.png');
                //Bars
                $('.header.header-stick .bars').css('border-color','#fff');
                //Current Menu
                $('.nav-desktop ul ul li:hover, .nav-desktop ul li.current-menu-parent, .nav-desktop ul ul li.current-menu-item').css('background-color','#fff');            
                //List Text Color
                $('.nav-desktop ul > li > a').css('color',"#fff");
                //Current List Text Color
                $('.nav-desktop ul li.current-menu-parent > a, .nav-desktop ul ul li.current-menu-item > a, .nav-desktop ul li.current-menu-parent > span, .nav-desktop ul ul li.current-menu-item > span').css('color','#061546')
            }
        });
    });

    </script>
</body>
</html>
