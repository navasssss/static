<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/fevicon.png">
    <!-- CSS
         ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <!-- Base Icons -->
    <link rel="stylesheet" href="{{asset('css/pbminfotech-base-icons.css')}}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <!-- Magnific -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- AOS -->
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="{{asset('css/shortcode.css')}}">
    <!-- Base CSS -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>

<body>
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Header Main Area -->
        <header class="site-header header-style-1">
            <div class="header-overlay">
                <div class="pbmit-main-header-area pbmit-bg-color-white">
                    <div class="container-fluid">
                        <div class="pbmit-header-content d-flex justify-content-between align-items-center">
                            <div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
                                <div class="site-branding">
                                    <h1 class="site-title">
                                        <a href="{{ route('home') }}">
                                            <img class="logo-img" src="{{ asset('images/bn.png') }}" alt="Xleb">
                                        </a>
                                    </h1>
                                </div>
                                <div class="site-navigation">
                                    <nav class="main-menu navbar-expand-xl navbar-light">
                                        <div class="navbar-header">
                                            <!-- Toggle Button -->
                                            <button class="navbar-toggler" type="button">
                                                <i class="pbmit-base-icon-menu-1"></i>
                                            </button>
                                        </div>
                                        <div class="pbmit-mobile-menu-bg"></div>
                                        <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                            <div class="pbmit-menu-wrap">
                                                <span class="closepanel">
                                                    <svg class="qodef-svg--close qodef-m"
                                                        xmlns="http://www.w3.org/2000/svg" width="20.163"
                                                        height="20.163" viewBox="0 0 26.163 26.163">
                                                        <rect width="36" height="1"
                                                            transform="translate(0.707) rotate(45)"></rect>
                                                        <rect width="36" height="1"
                                                            transform="translate(0 25.456) rotate(-45)"></rect>
                                                    </svg>
                                                </span>
                                                <ul class="navigation clearfix">
                                                    <li><a href="{{ route('home') }}">Home</a></li>
                                                    <li><a href="{{ route('home') }}#about">About Us</a></li>
                                                    <li><a href="{{ route('home') }}#services">Our Services</a></li>
                                                    <li><a href="{{ asset('images/analysis-request-form.pdf') }}">
                                                            Request
                                                            Form</a></li>

                                                    <li><a href="{{ route('home') }}#contact">Contact Us</a></li>
                                                    <li><a href="{{ route('filament.admin.auth.login') }}">Login</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="pbmit-right-box d-flex align-items-center">
                                <div class="pbmit-header-button">
                                    <a href="tel:+631-213-1525">
                                        <span class="pbmit-header-button-text-1">631-213-1525</span>
                                    </a>
                                </div>

                                <!--<div class="pbmit-header-button2">-->
                                <!--	<a class="pbmit-btn" href="contact-us.html">-->
                                <!--		<span class="pbmit-button-content-wrapper">-->
                                <!--			<span class="pbmit-button-icon">-->
                                <!--				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">-->
                                <!--					<path d="m31 50.979c-.362.007-.727-.081-1.049-.28-.929-.572-1.212-1.814-.653-2.742.047-.082 5.886-9.826 17.032-15.958h-43.33c-1.103 0-2-.897-2-2s.897-2 2-2h43.33c-11.084-6.097-16.989-15.884-17.047-15.982-.547-.934-.244-2.177.689-2.73.946-.561 2.192-.236 2.757.715.909 1.45 9.433 14.449 24.722 18.046.915.225 1.549 1.026 1.549 1.952s-.63 1.729-1.532 1.948c-15.354 3.61-23.849 16.626-24.767 18.099-.36.577-1.025.919-1.7.932z"></path>-->
                                <!--				</svg>-->
                                <!--			</span>-->
                                <!--			<span class="pbmit-button-text">Appointment</span>-->
                                <!--		</span>-->
                                <!--	</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Main Area End Here -->

        @yield('content')

        <!-- footer -->
        <footer class="site-footer pbmit-bg-color-blackish">

            <div class="pbmit-footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="pbmit-footer-widget-col-1 col-md-3">
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <ul class="pbmit-social-links">
                                        <li class="pbmit-social-li pbmit-social-facebook">
                                            <a title="Facebook" href="#" target="_blank">
                                                <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                            </a>
                                        </li>
                                        <li class="pbmit-social-li pbmit-social-twitter">
                                            <a title="Twitter" href="#" target="_blank">
                                                <span><i class="pbmit-base-icon-twitter-2"></i></span>
                                            </a>
                                        </li>
                                        <li class="pbmit-social-li pbmit-social-linkedin">
                                            <a title="LinkedIn" href="#" target="_blank">
                                                <span><i class="pbmit-base-icon-linkedin-in"></i></span>
                                            </a>
                                        </li>
                                        <li class="pbmit-social-li pbmit-social-instagram">
                                            <a title="Instagram" href="#" target="_blank">
                                                <span><i class="pbmit-base-icon-instagram"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-footer-widget-col-2 col-md-3">
                            <div class="widget pbmit-two-column-menu">
                                <h2 class="widget-title">Useful Link</h2>
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('home') }}#about">About</a></li>
                                    <li><a href="{{ route('home') }}#service">Service</a></li>
                                    <li><a href="{{ route('home') }}#contact">Contact Us</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="pbmit-footer-widget-col-3 col-md-3">
                            <div class="widget widget_text">
                                <h2 class="widget-title">Address</h2>
                                <div class="pbmit-timelist-wrapper">
                                    <ul class="pbmit-timelist-list">
                                        <li>
                                            <span class="pbmit-timelist-time">106 Lake Ave S Suite 1, Nesconset, NY
                                                11767, United States</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pbmit-footer-widget-col-4 col-md-3">
                            <aside class="widget">
                                <h2 class="widget-title">Say Hello</h2>
                                <div class="pbmit-contact-widget-lines">

                                    <div class="pbmit-contact-widget-line pbmit-base-icon-phone">
                                        <a href="tel:631-213-1525"> 631-213-1525 </a>
                                    </div>
                                    <div class="pbmit-contact-widget-line pbmit-base-icon-email">
                                        <a href="mailto:contact@banartis.com"> contact@banartis.com </a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pbmit-footer-text-area">
                <div class="container">
                    <div class="pbmit-footer-text-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pbmit-footer-copyright-text-area"> Copyright © 2025 All Rights Reserved.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer End -->

    </div>
    <!-- Page Wrapper End -->

    <!-- Search Box Start Here -->
    <div class="pbmit-search-overlay">
        <div class="pbmit-icon-close">
            <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163"
                viewBox="0 0 26.163 26.163">
                <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
            </svg>
        </div>
        <div class="pbmit-search-outer">
            <form class="pbmit-site-searchform">
                <input type="search" class="form-control field searchform-s" name="s" placeholder="Search …">
                <button type="submit"></button>
            </form>
        </div>
    </div>
    <!-- Search Box End Here -->

    <!-- Scroll To Top -->
    <div class="pbmit-progress-wrap">
        <svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- Scroll To Top End -->

    <!-- JS
        ============================================ -->
    <!-- jQuery JS -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- jquery Waypoints JS -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <!-- jquery Appear JS -->
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <!-- Numinate JS -->
    <script src="{{asset('js/numinate.min.js')}}"></script>
    <!-- Slick JS -->
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <!-- Magnific JS -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Circle Progress JS -->
    <script src="{{asset('js/circle-progress.js')}}"></script>
    <!-- countdown JS -->
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <!-- AOS -->
    <script src="{{asset('js/aos.js')}}"></script>
    <!-- GSAP -->
    <script src='{{asset('js/gsap.js')}}'></script>
    <!-- Scroll Trigger -->
    <script src='{{asset('js/ScrollTrigger.js')}}'></script>
    <!-- Split Text -->
    <script src='{{asset('js/SplitText.js')}}'></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src='{{asset('js/theia-sticky-sidebar.js')}}'></script>
    <!-- GSAP Animation -->
    <script src='{{asset('js/gsap-animation.js')}}'></script>
    <!-- Scripts JS -->
    <script src="{{asset('js/scripts.js')}}"></script>

</body>

</html>