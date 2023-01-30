<!doctype html>
 <html class="no-js" lang="">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
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
        <div class="spinner-wrapper">
            <div class="spinner">
                <div class="sk-folding-cube">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                </div>
            </div>
        </div>
        <div class="search-open">
            <div class="overlay"></div>
            <div class="search-open-inner">
                <div class="full-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-10">
                                <div class="logo">
                                    <div  id="booking2" class="booking reserve-booking">
                                        <a class="btn" href="#">BO<span>OK</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 col-sm-6 col-xs-2">
                                <div class="full-navigation-inner clearfix">
                                    <div id="clapes-close" class="clapess2 clearfix">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="open-search-inner">
                    <div class="container">
                        <div class="col-md-12">
                            <div  class="enter-search">
                                <p>What are you looking for?</p>
                                <input type="text" placeholder="Enter Your Search Here"/>
                                <input class="btn" type="submit" value="Search Now" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="xp-wrapper">
            <header id="header-2">
                <div class="col-md-3 col-sm-6 col-xs-6 mobail-logo">
                    <div class="row">
                        <div class="logo">
                            <div  id="booking"  class="booking">
                                <a class="btn" href="#">BO<span>OK</span></a>
                            </div>
                            <a href="{{ Route ('home') }}"><img src="{{ asset('images/logo1.png') }}" alt="" ></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-6 col-xs-6 mobail-nav">
                    <div class="row">
                        <div class="navigation">
                            <div class="inner-navigation">
                                <div class="navbar navbar-default" role="navigation">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                           <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav pull-right">
                                            <li><a href="{{ Route ('home') }}">Home</a></li>
                                            <li><a href="{{ Route ('services') }}">Services </a></li>
                                            <li><a href="our-packages.html">Packages </a></li>
                                            <li><a href="about-us.html">About</a></li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                            <li><a href="{{ Route ('Login') }}">Login</a></li>

                                        </ul>
                                    </div><!--/.nav-collapse -->
                                </div>
                            </div>

                            <div class="navigation-search">
                                <div class="folow-us">
                                    <p>Follow Us</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <a id="btn-closs" href="#"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section id="banner" class="banner-2">
                <div class="bainner-home">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item" style="background: url('{{ asset('images/home-bg.jpg') }}') center no-repeat; background-size: cover; ">
                            <div class="ovrlay"></div>
                            <div class="banner-text">
                                <div class="chid-pernt">
                                    <div class="child">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-box">
                                                        <h2> HELLO </h2>
                                                        <h1>WELCOME TO E & M HOTEL</h1>
                                                        <p>Best Place TO Enjoy Your Life</p>
                                                        <strong>Welcome</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="background: url('{{ asset('images/homae-bg.jpg') }}') center no-repeat; background-size: cover; ">
                            <div class="ovrlay"></div>
                            <div class="banner-text">
                                <div class="chid-pernt">
                                    <div class="child">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-box">
                                                        <h2>Come & Enjoy</h2>
                                                        <h1>Create Unforgettable Memories With Us</h1>
                                                        <p>Take Time To Relax</p>
                                                        <strong>Relax</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="background: url('{{ asset('images/home.jpg') }}') center no-repeat; background-size: cover; ">
                            <div class="ovrlay"></div>
                            <div class="banner-text">
                                <div class="chid-pernt">
                                    <div class="child">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="text-box">
                                                        <h2>Luxury. Redefined</h2>
                                                        <h1>Stay With Us, Feel At Home</h1>
                                                        <p>Enjoy Your Stay</p>
                                                        <strong>Enjoy</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p><span>E & M- </span>2023. Developed by <a href="#">Emilly</a></p>
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
                                                <p>Twice the comfort, twice the value, twice the hotel. <br> Let us stay with you. </p>
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
