<!doctype html>
<html class="no-js" lang="">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Our Services</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Style Sheets-->

        <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/color.css') }}">

        <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>
    <body>

        

        <div class="full-navgtion">
            <div class="overlay"></div>
            <div class="search-open-inner">
                <div class="full-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="full-navigation-inner clearfix">
                                    <div id="clapess2" class="clapess2 clearfix">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="full-navgtion-left">
                                    <ul>
                                        <li> <a href="{{ Route ('home') }}">Home</a></li>
                                        <li> <a href="about-us.html">About Us</a></li>
                                        <li> <a href="{{ Route ('services') }}">All Serivces</a></li>
                                        <li> <a href="{{ Route ('detail') }}">Services Details</a></li>
                                        <li> <a href="our-packages.html">Packages</a></li>
                                        <li> <a href="package-details.html">Packages Detail</a></li>
                                        <li> <a href="photo-section.html">Gallery</a></li>
                                        <li> <a href="blog.html">News</a></li>
                                        <li> <a href="blog-detail.html">News Details</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="full-navgtion-left">
                                    <ul>
                                        <li> <a id="btn-closs" href="#">Search Open Page</a></li>
                                        <li> <a href="wellness-and-spa.html">Wellness & Spa</a></li>
                                        <li> <a href="booking-room-selector.html">Booking Page</a></li>
                                        <li> <a href="booking-details.html">Booking Detail</a></li>
                                        <li> <a href="contact-us.html">Contact And Directions</a></li>
                                    </ul>
                                </div>
                                <div class="socail-infor">
                                    <h4>Follow Us:</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="tweeter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="xp-wrapper">
            <div class="main-wrapper">
                <header id="header-inner" class="header-inner-second">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="logo">
                                    <div  id="booking"   class="booking">
                                        <a class="btn" href="#">BO<span>OK</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="navigation-inner clearfix">
                                    <div id="clapess" class="pull-right">
                                        <a href="#"><i class="fa fa-bars"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <main class="main-containt">
                    <div class="container">
                        <section class="our-services">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                    <div class="hedding">
                                        <div class="inner-hadding">
                                            <h2>Our Services</h2>
                                            <span>Everything. Right, where you need it.</span>
                                        </div>
                                        <p>Experience the passion of hospitality.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="services-inner">
                                        <div class="image-holder">
                                            <a href="{{ Route ('detail') }}"><img src="{{ asset('images/services-image1.jpg') }}" alt="" /></a>
                                        </div>
                                        <div class="text-box">
                                            <h3><a href="{{ Route ('detail') }}">Hotel Parking</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="services-inner">
                                        <div class="image-holder">
                                            <a href="{{ Route ('detail') }}"><img src="{{ asset('images/services-image2.jpg') }}" alt="" /></a>
                                        </div>
                                        <div class="text-box">
                                            <h3><a href="{{ Route ('detail') }}">Self-Care</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="services-inner">
                                        <div class="image-holder">
                                            <a href="{{ Route ('detail') }}"><img src="{{ asset('images/services-image3.jpg') }}" alt="" /></a>
                                        </div>
                                        <div class="text-box">
                                            <h3><a href="{{ Route ('detail') }}">Private Gym</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="services-inner">
                                        <div class="image-holder">
                                            <a href="{{ Route ('detail') }}"><img src="{{ asset('images/services-image4.jpg') }}" alt="" /></a>
                                        </div>
                                        <div class="text-box">
                                            <h3><a href="{{ Route ('detail') }}">Free internet Wifi</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="services-inner">
                                        <div class="image-holder">
                                            <a href="{{ Route ('detail') }}"><img src="{{ asset('images/services-image5.jpg') }}" alt="" /></a>
                                        </div>
                                        <div class="text-box">
                                            <h3><a href="{{ Route ('detail') }}">Room Service</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="services-inner">
                                        <div class="image-holder">
                                            <a href="{{ Route ('detail') }}"><img src="{{ asset('images/services-image6.jpg') }}" alt="" /></a>
                                        </div>
                                        <div class="text-box">
                                            <h3><a href="{{ Route ('detail') }}">Online reservation</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </main>
            </div>
            <footer id="xp-footer" class=""  data-parallax="scroll" >
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="footer-inner">
                                <img src="{{ asset('images/footer-logo-1.png') }}" alt="" />
                                <p><span>E & M - </span>Copyright 2023. Developed by <a href="{{ Route ('home') }}">Emilly</a></p>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="footer-inner">
                                <ul>
                                    <li><a href="{{ Route ('home') }}">Home </a></li>
                                    <li><a href="{{ Route ('services') }}">Services</a></li>
                                    <li><a href="our-packages.html">Packages</a></li>
                                    <li><a href="about-us.html">About </a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="reserve-hotel">
            <div class="overlay"></div>
            <div class="search-open-inner">
                <div class="full-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-10">
                                <div class="logo">
                                    <a href="index-2.html"><img src="{{ asset('images/logo-2.png') }}" alt=""></a>
                                    <div class="booking reserve-booking">
                                        <a class="btn" href="#">BO<span>OK</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-6 col-xs-2">
                                <div class="full-navigation-inner clearfix">
                                    <div id="clapess3" class="clapess2 clearfix">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reserve-hotel-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="reserve-hotel-detail">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                            <div class="hedding">
                                                <div class="inner-hadding">
                                                    <h2>Reserve Now</h2>
                                                    <span>Best Place TO Enjoy Your Life</span>
                                                </div>
                                                <p>Twice the comfort, twice the value, twice the hotel. <br> Let us stay with you.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset class="row flat booking booking-1">
                                                <div class="col-md-3">
                                                    <div class="booking-depa from hasDatepicker">
                                                        <input placeholder="Arrive" id="date-from" type="text">
                                                        <label>Arrive</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="booking-depa">
                                                        <input placeholder="Departure" id="date-to" type="text">
                                                        <label>Departure</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="booking-depa">
                                                        <select>
                                                            <option class="selected">0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                        </select>
                                                        <label>Adults</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="booking-depa">
                                                        <select>
                                                            <option class="selected">0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                        </select>
                                                        <label>Children</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="search-now">
                                                <a class="btn" href="our-packages.html">Search Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-play-circle-o"></i> <a href="#">Search Open Page</a></li>
                                        <li><i class="fa fa-play-circle-o"></i> <a href="wellness-and-spa.html">Wellness & Spa</a></li>
                                        <li><i class="fa fa-play-circle-o"></i> <a href="booking-room-selector.html">Booking Page</a></li>
                                        <li><i class="fa fa-play-circle-o"></i> <a href="booking-details.html">Booking Detail</a></li>
                                        <li><i class="fa fa-play-circle-o"></i> <a href="contact-us.html">Contact And Directions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/vendor/isotope.pkgd.js') }}"></script>
        <script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/vendor/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.appear.js') }}"></script>
        <script src="{{ asset('js/vendor/custom.js') }}"></script>
        <script src="{{ asset('js/vendor/parallax.min.js') }}"></script>
        <script src="{{ asset('js/vendor/masonry-horizontal.js') }}"></script>
        <script src="{{ asset('js/vendor/classie.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>
