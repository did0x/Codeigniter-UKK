<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Book Awesome Trip - Reservation</title>
    <!-- Font Google -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7COpen+Sans:300italic,300,400,700' rel='stylesheet' type='text/css'>
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
                <div class="main-cn bg-white clearfix">

                    <div class="step">
                        <!-- Step -->
                        <ul class="payment-step text-center clearfix">
                            <li class="step-select">
                                <span>1</span>
                                <p>Choose Your Flight</p>
                            </li>
                            <li class="step-part">
                                <span>2</span>
                                <p>Your Booking &amp; Payment Details</p>
                            </li>
                            <li>
                                <span>3</span>
                                <p>Booking Completed!</p>
                            </li>
                        </ul>
                        <!-- End Step -->
                    </div>

                    <!-- Payment flight -->
                    <div class="payment-flight">
                        <?php foreach ($flight as $f ) { ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="payment-info">
                                    <h1><?php echo $f->description; ?></h1>
                                    <ul>
                                        <li>
                                            <span>Depart:</span>
                                            <?php echo $f->rute_from; ?>
                                        </li> 
                                        <li>
                                            <span>Arrived to: </span>
                                            <?php echo $f->rute_to; ?>
                                        </li>
                                        <li>
                                            <span>Depart at: </span>
                                            <?php echo date("H:i",strtotime($f->depart_at)); ?> WIB
                                        </li>
                                        <li>
                                            <span>Arrived at:</span>
                                            <?php echo date("H:i",strtotime($f->arrived)); ?> WIB
                                        </li>
                                        <li name="seat" style="display: none">
                                            <?php echo $f->seat_qty;?>
                                        </li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Payment Flight -->
                    <form action="<?php echo site_url('home/confirm') ?>" method="post">
                    <div class="payment-form payment-offline">
                        <h2>Your Information</h2>
                        <div class="row form">
                            <div class="col-md-6">
                                <div class="form-field">
                                    <input type="text" placeholder="First Name*" class="field-input">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Last Name" class="field-input">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Email*" class="field-input">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Email (confirm)" class="field-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-field">
                                    <input type="text" placeholder="Phone number*" class="field-input">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="City*" class="field-input">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Country of Passport*" class="field-input">
                                </div>
                                <div class="radio-checkbox">
                                    <input type="checkbox" class="checkbox" id="accept">
                                    <label for="accept">I am not staying at the hotel. I am making this booking for someone else.</label>
                                </div>
                            </div>
                        </div>

                         <div id="holder">
                            <ul id="place">
                                
                            </ul>
                        </div>

                        <div class="submit text-center">
                            <p>
                                By selecting to complete this booking I acknowledge that I have read and accept the <span>rules &amp; restrictions terms &amp; conditions</span> , and <span>privacy policy</span>.
                            </p>

                            <button type="submit" class="awe-btn awe-btn-1 awe-btn-lager">Submit</button>

                        </div>

                    </div>
                    </form>
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
    <script type="text/javascript">
        $(function () {
            var seatQty = $('li[name=seat]').text();

            var settings = {
                rows:8,
                cols: seatQty/8,
                rowCssPrefix: 'row-',
                colCssPrefix: 'col-',
                seatWidth: 30,
                seatHeight: 30,
                seatCss: 'seat',
                selectedSeatCss: 'selectedSeat',
                selectingSeatCss: 'selectingSeat'
            };

            function changeName(n) {
                var ordA = 'A'.charCodeAt(0);
                var ordZ = 'Z'.charCodeAt(0);
                var len = ordZ - ordA + 1;
              
                var s = "";
                while(n >= 0) {
                    s = String.fromCharCode(n % len + ordA) + s;
                    n = Math.floor(n / len) - 1;
                }
                return s;
            }


            var init = function (reservedSeat) {
                var str = [], seatNo, className;
                for (i = 0; i < settings.rows; i++) {
                    for (j = 0; j < settings.cols; j++) {

                        seatNo = (changeName(i) + ( j + 1 ) );
                        className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString();

                        if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                            className += ' ' + settings.selectedSeatCss;
                        }

                        if (settings.rows < 6) {
                        str.push('<li class="' + className + '"' +
                                 'style="top:' + (i * settings.seatHeight).toString() + 'px;' + 
                                 'left:' + (j * settings.seatWidth).toString() + 'px;' + 
                                 'margin:' + (settings.rows - 1)+'px '+ (settings.rows - 1) + 'px;' +
                                 'width:' + settings.rows * 7.5 +'px;' + 'height:' + settings.rows * 7.5 +'px;">' +
                                 '<a title="' + seatNo + '">' + seatNo + '</a>' +
                                 '</li>');
                        } else {
                        str.push('<li class="' + className + '"' +
                                 'style="top:' + (i * settings.seatHeight).toString() + 'px;' + 
                                 'left:' + (j * settings.seatWidth).toString() + 'px;' + 
                                 'margin:' + (settings.rows - 2)+'px '+ (settings.rows - 2) + 'px;' +
                                 'width:' + settings.rows * 7.2 +'px;' + 'height:' + settings.rows * 7.2 +'px;">' +
                                 '<a title="' + seatNo + '">' + seatNo + '</a>' +
                                 '</li>');
                        }
                    }
                }
                
                $('#place').html(str.join(''));
            };

            //case I: Show from starting
            init();

            //Case II: If already booked
            // var bookedSeats = [5, 10, 25];
            // init(bookedSeats);


            $('.' + settings.seatCss).click(function () {
            if ($(this).hasClass(settings.selectedSeatCss)){
                alert('This seat is already reserved');
            }
            else{
                $(this).toggleClass(settings.selectingSeatCss);
                }
            });

            $('#btnShow').click(function () {
                var str = [];
                $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.'+ settings.selectingSeatCss + ' a'), function (index, value) {
                    str.push($(this).attr('title'));
                });
                alert(str.join(','));
            })

            $('#btnShowNew').click(function () {
                var str = [], item;
                $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
                    item = $(this).attr('title');                   
                    str.push(item);                   
                });
                alert(str.join(','));
            })
        });
    
    </script>
</body>
</html>
