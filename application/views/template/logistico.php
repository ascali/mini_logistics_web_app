<!DOCTYPE html>
<html  lang="en" class="no-js" lang="zxx">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website tracking PT. Multiartha Retalindo Lestari">
    <meta name="keywoards" content="kirim barang, tracking, pelayaran, pengiriman">
    <meta name="theme-color" content="#563d7c">
    <meta name="author" content="PT. Multiartha Retalindo Lestari, Ascaliko"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $judul; ?> · PT. Multiartha Retalindo Lestari</title>

    <link rel="canonical" href="<?= base_url(); ?>">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>public/vendor/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/js/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">

    <!-- Favicons -->
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/nawala.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/img/nawala.png" sizes="180x180">
    <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.png" sizes="16x16" type="image/png">
    <!-- <link rel="manifest" href="<?= base_url(); ?>assets/img/favicons/manifest.json"> -->
    <!-- <link rel="mask-icon" href="<?= base_url(); ?>assets/img/favicons/safari-pinned-tab.svg" color="#563d7c"> -->
    <link rel="icon" href="<?= base_url(); ?>assets/img/nawala.png">
    <!-- <meta name="msapplication-config" content="https://getbootstrap.com/docs/4.4/assets/img/favicons/browserconfig.xml"> -->
    <style type="text/css">
        /*Handle bar*/
            /* width */
            ::-webkit-scrollbar {
                width: 10px;
            }
            /* Track */
            ::-webkit-scrollbar-track {
                background: #f1f1f1; 
            }
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #ff3414; 
            }
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #fd7e14; /*#555*/ 
            }
        /* Handle bar */
        /* WA Float CSS */
            .wa-float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:40px;
                right:40px;
                background-color:#25d366;
                color:#FFF;
                border-radius:50px;
                text-align:center;
                font-size:30px;
                box-shadow: 2px 2px 3px #999;
                z-index:100;
            }

            .my-wa-float{
                margin-top:16px;
            }
        /* WA Float CSS  */
    </style>

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/animate.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/logistico/css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="<?= base_url(); ?>assets/img/nawala.png" width="35%" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope"></i> info@nawala-express.com</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i> 1601-609 6780</a></li>
                                    </ul>
                                </div>

                                <div class="book_btn d-none d-lg-block">
                                    <a class="boxed-btn3-line" href="#" id="signinup">Sign in / up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="<?= base_url(); ?>assets/img/nawala.png" width="35%" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.html">home</a></li>
                                            <li><a  href="service.html">Services</a></li>
                                            <li><a href="About.html">about</a></li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="service_details.html">service details</a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                    <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8">
                        <div class="slider_text text-center justify-content-center">
                            <p>For Personal & Business</p>
                            <h3>Global Logistic Service
                                For Business</h3>
                                <a class="boxed-btn3" href="service.html">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="transportaion_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="<?= base_url(); ?>assets/vendor/logistico/img/svg_icon/airplane.png" alt="">
                        </div>
                        <h3>Transportation</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing drawing.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="<?= base_url(); ?>assets/vendor/logistico/img/svg_icon/live.png" alt="">
                        </div>
                        <h3>Live Monitoring</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing drawing.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="<?= base_url(); ?>assets/vendor/logistico/img/svg_icon/world.png" alt="">
                        </div>
                        <h3>Worldwide Service</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing drawing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h3>
                            Services We Offer
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                        <div class="single_service">
                            <div class="thumb">
                                <img src="<?= base_url(); ?>assets/vendor/logistico/img/service/1.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Ocean Freight</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="<?= base_url(); ?>assets/vendor/logistico/img/service/2.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Land Transport</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="<?= base_url(); ?>assets/vendor/logistico/img/service/3.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Air Freight</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="<?= base_url(); ?>assets/vendor/logistico/img/service/1.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Ocean Freight</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact_action_area  -->
    <div class="contact_action_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-6">
                    <div class="action_heading">
                        <h3>100% secure and safe</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing drawing.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="call_add_action">
                        <a href="#" class="boxed-btn3">+10 672 457 356</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->
    <!-- chose_area  -->
    <div class="chose_area ">
        <div class="container">
            <div class="features_main_wrap">
                <div class="row  align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="about_image">
                            <img src="<?= base_url(); ?>assets/vendor/logistico/img/about/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="features_info">
                            <h3>Why Choose Us?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.
                            </p>
                            <ul>
                                <li> Apartments frequently or motionless. </li>
                                <li> Duis aute irure dolor in reprehenderit in voluptate. </li>
                                <li> Voluptatem quia voluptas sit aspernatur.</li>
                            </ul>

                            <div class="about_btn">
                                <a class="boxed-btn3-line" href="about.html">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ chose_area  -->

    <!-- counter_area  -->
    <div class="counter_area">
        <div class="container">
            <div class="offcan_bg">
                <div class="row">
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">42</span> <span>+</span> </h3>
                            <p>Countries Covered</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">97</span> <span>+</span> </h3>
                            <p>Business Success</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">2342</span></h3>
                            <p>Happy Client</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">3245</span></h3>
                            <p>Business Done</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /counter_area  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="<?= base_url(); ?>assets/vendor/logistico/img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
                                    Pellentesque id dolor tempor sapien feugiat ultrices.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?= base_url(); ?>assets/vendor/logistico/img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="<?= base_url(); ?>assets/vendor/logistico/img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
                                    Pellentesque id dolor tempor sapien feugiat ultrices.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?= base_url(); ?>assets/vendor/logistico/img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="<?= base_url(); ?>assets/vendor/logistico/img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
                                    Pellentesque id dolor tempor sapien feugiat ultrices.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?= base_url(); ?>assets/vendor/logistico/img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- Estimate_area start  -->
    <div class="Estimate_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <h3>Get free Estimate</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing.</p>
                        <a href="#" class="boxed-btn3">+10 672 457 356</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="form">
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Product type">Product type</option>
                                            <option value="1">small</option>
                                            <option value="2">standard</option>
                                            <option value="3">high</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Product size">Product size</option>
                                            <option value="1">M</option>
                                            <option value="2">L</option>
                                            <option value="3">Xl</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="City of departure">City of departure</option>
                                            <option value="1">departure</option>
                                            <option value="2">departure</option>
                                            <option value="3">departure</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Delivery city">City of departure</option>
                                            <option value="1">Delivery</option>
                                            <option value="2">Delivery</option>
                                            <option value="3">Delivery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <button class="boxed-btn3-line" type="submit">Send Estimate</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Estimate_area end  -->

    <!-- contact_location  -->
    <div class="contact_location">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="location_left">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?= base_url(); ?>assets/img/nawala.png" width="35%" alt="">
                            </a>
                        </div>
                        <ul>
                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="<?= base_url(); ?>assets/vendor/logistico/img/icon/address.svg" alt=""> Location</h3>
                        <p>600/D, Kings road, Green lane
                            NewYork-2563</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="<?= base_url(); ?>assets/vendor/logistico/img/icon/support.svg" alt=""> Location</h3>
                        <p>+10 267 3563 4562 <br>
                            support@logistico.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ contact_location  -->


    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">Air Transportation</a></li>
                                <li><a href="#">Ocean Freight</a></li>
                                <li><a href="#">Ocean Cargo</a></li>
                                <li><a href="#">Logistics</a></li>
                                <li><a href="#">Warehouse Moving</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#"> Testimonials</a></li>
                                <li><a href="#"> Why Us?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Industries
                            </h3>
                            <ul>
                                <li><a href="#">Chemicals</a></li>
                                <li><a href="#">Automotive</a></li>
                                <li><a href="#"> Consumer Goods</a></li>
                                <li><a href="#">Life Science</a></li>
                                <li><a href="#">Foreign Trade</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
<!-- Button trigger modal -->
  
    <!-- Modal -->
    <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="serch_form">
                <input type="text" placeholder="input no resi dan pantau kiriman anda" >
                <button type="submit">cari</button>
            </div>
          </div>
        </div>
    </div>

    <!-- Login Modal -->
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Masuk</h5>
            <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>
          </div>
          <div class="modal-body">

            <table style="width: 100%;">
              <tr style="vertical-align: top;">
                <td style="width: 50%; border-right:1px solid #eeeeee; padding-right: 10px;">
                  <form method="post" action="<?php echo base_url(); ?>index.php/customer/ceklogin">
                    <fieldset>
                      <legend>Sudah Terdaftar</legend>
                      <table style="width: 100%;">
                        <tr>
                          <td><label for="txtEmail">Email</label></td>
                          <td>&nbsp;</td>
                          <td><input id="txtEmail" class="form-control form-control-sm" name="txtEmail" type="text" placeholder="ketik email disini"></td>
                        </tr>
                        <tr>
                          <td><label for="txtPassword">Password</label></td>
                          <td>&nbsp;</td>
                          <td><input id="txtPassword" class="form-control form-control-sm" name="txtPassword" type="password" placeholder="ketik password disini"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td><button type="submit" class="btn btn-sm btn-primary float-right">Masuk</button></td>
                        </tr>
                      </table>
                    </fieldset>
                  </form>
                </td>
                <td style="width: 50%; padding-left: 10px;">
                  <fieldset>
                    <legend>Belum Terdaftar</legend>
                    <label>
                      Bagi Anda yang belum memiliki akun, silahkan 
                      <a href="<?= base_url(); ?>index.php/page/daftar_pelanggan">klik disini</a>.
                    </label>
                  </fieldset>
                </td>
              </tr>
            </table> 

          </div>
        </div>
      </div>
    </div>
    <!-- Login Modal -->

    <!-- WA Float -->
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Halo, saya butuh bantuan mengenai ..." class="wa-float" target="_blank">
        <i class="fa fa-whatsapp my-wa-float"></i>
    </a>
    <!-- WA Float -->
    <!-- JS here -->
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/ajax-form.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/scrollIt.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/nice-select.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/jquery.slicknav.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/plugins.js"></script>
    <!-- <script src="<?= base_url(); ?>assets/vendor/logistico/js/gijgo.min.js"></script> -->
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/slick.min.js"></script>



    <!--contact js-->
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/contact.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/jquery.form.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/logistico/js/mail-script.js"></script>


    <script src="<?= base_url(); ?>assets/vendor/logistico/js/main.js"></script>
    <script type="text/javascript">
        $('#signinup').click(function(){
            $('#loginModal').modal('show');
        });
    </script>



</body>

</html>