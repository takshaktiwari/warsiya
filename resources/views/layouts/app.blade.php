<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tutorgo - Online Learning and Education HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">

    <!-- CSS here  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elegent-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- css end  here-->

    @stack('styles')
</head>

<body>
    <x-alertt-alert />

    <div class="tp-preloader">
        <div class="tp-preloader__center">
            <span>
                <svg width="170" height="132" viewBox="0 0 170 132" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_6_12)">
                        <path
                            d="M113.978 61.1738L55.4552 2.8186C52.8594 0.230266 48.7298 0.230266 46.252 2.8186L1.88784 46.4673C-0.707934 49.0557 -0.707934 53.1735 1.88784 55.6441L14.5127 68.2329L66.9002 120.353L113.86 75.7626C118.108 71.8801 118.108 65.2916 113.978 61.1738Z"
                            fill="black" />
                        <path
                            d="M167.781 51.5263L90.2621 129.059C86.1325 133.177 79.6431 133.177 75.5134 129.059L31.6212 85.2923C35.7509 89.4101 42.2403 89.4101 46.37 85.2923L123.889 7.75996C126.485 5.17163 130.615 5.17163 133.092 7.75996L167.663 42.2319C170.377 44.8202 170.377 48.938 167.781 51.5263Z"
                            fill="#5392FB" />
                        <path
                            d="M74.9235 35.0551C76.6933 36.8199 78.4632 38.467 79.9971 39.8788C82.1209 41.6436 82.2389 44.8202 80.233 46.8203L48.8478 78.1156C44.1282 82.8217 36.4588 82.8217 31.7392 78.1156C27.0197 73.4095 27.0197 65.7622 31.7392 61.0561L63.1245 29.7608C65.1303 27.7607 68.3161 27.8784 70.0859 29.9961C71.5018 31.5256 73.1536 33.2904 74.9235 35.0551Z"
                            fill="currentColor" class="path-yellow" />
                    </g>
                    <defs>
                        <clipPath id="clip0_6_12">
                            <rect width="169.787" height="131.064" fill="white" transform="translate(0 0.936172)" />
                        </clipPath>
                    </defs>
                </svg>

            </span>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <button class="tp-backtotop">
        <span><i class="fal fa-angle-double-up"></i></span>
    </button>
    <!-- back to top end -->


    <!-- header area start -->
    <header>
        <div class="tp-header__area tp-header__transparent">
            <div class="tp-header__main" id="header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="logo has-border">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/img/logo/white-logo.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('galleries.groups') }}">Gallery</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Courses</a>
                                            <ul class="submenu">
                                                @foreach ($boards as $board)
                                                    <li><a
                                                            href="{{ route('board', [$board]) }}">{{ $board->short_name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-6">
                            <div class="tp-header__main-right d-flex justify-content-end align-items-center pl-30">
                                <div class="header-acttion-btns d-flex align-items-center d-none d-md-flex">
                                    <a href="tel:+91 9999999999" class="tp-phone-btn d-none d-xl-block"><i
                                            class="fa-thin fa-phone"></i>+91 9999999999 <span></span></a>
                                    <a href="{{ route('contact') }}" class="tp-btn br-0">
                                        <span>Query Now <i class="fa-regular fa-arrow-right"></i> </span>
                                        <div class="transition"></div>
                                    </a>
                                </div>
                                <div class="tp-header__hamburger ml-50 d-lg-none">
                                    <button class="hamburger-btn offcanvas-open-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__close text-end">
                    <button class="offcanvas__close-btn offcanvas-close-btn">
                        <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="offcanvas__top mb-40">
                    <div class="offcanvas__subtitle">
                        <span class="text-white d-inline-block mb-25 d-none d-lg-block">ELEVATE YOUR BUSINESS
                            WITH</span>
                    </div>
                    <div class="offcanvas__logo mb-40">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="offcanvas-info d-none d-lg-block">
                        <p>Limitless customization options & Elementor compatibility let anyone create a beautiful
                            website
                            with Valiance. </p>
                    </div>
                    <div class="offcanvas__btn d-none d-lg-block">
                        <a href="{{ route('contact') }}" class="tp-btn">Contact us <span></span></a>
                    </div>
                </div>
                <div class="mobile-menu fix mb-40"></div>


                <div class="offcamvas__bottom">
                    <div class="offcanvas__cta mt-30 mb-20">
                        <h3 class="offcanvas__cta-title">Contact info</h3>
                        <span>27 Division St, New York,</span>
                        <span>+154 4808 84082 4830</span>
                        <span><a href="https://data.themeim.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="8bf8fefbfbe4f9ffcbe5e4f3e2eaa5e8e4e6">[email&#160;protected]</a></span>
                        <span>Office Hours: 8AM - 5PM</span>
                        <span>Sunday - Wekend Day</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>

        {{ $slot }}


    </main>

    <!-- footer area start -->
    <footer>
        <div class="footer__area grey-bg">
            <div class="container">
                <div class="footer__top ">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                            <div class="footer__widget mb-50 footer-col-1">
                                <div class="footer__widget-logo mb-30">
                                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/logo.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="footer__widget-content">
                                    <p>Aut cum mollitia reprehenderit.
                                        Eos cumque dicta adipisci amet</p>
                                    <div class="footer__social">
                                        <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                        <span><a href="#" class="yt"><i
                                                    class="fab fa-youtube"></i></a></span>
                                        <span><a href="#" class="tw"><i
                                                    class="fab fa-twitter"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-6">
                            <div class="footer__widget mb-50 footer-col-2">
                                <h3 class="footer__widget-title">Information</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        <li><a href="{{ route('root') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('galleries.groups') }}">Gallery</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        <li><a href="#">Privacy</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-6">
                            <div class="footer__widget mb-50 footer-col-3">
                                <h3 class="footer__widget-title">Courses</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        @foreach ($boards as $board)
                                            <li>
                                                <a href="{{ route('board', [$board]) }}">
                                                    {{ $board->short_name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6">
                            <div class="footer__widget mb-50 footer-col-4">
                                <h3 class="footer__widget-title">Address Info</h3>
                                <div class="footer__widget-content">
                                    <div class="footer__subscribe">
                                        <p>
                                            <span>
                                                <i class="fa-solid fa-location-dot"></i>
                                            </span>
                                            <span>
                                                Aut cum mollitia reprehenderit.
                                                Eos cumque dicta adipisci amet
                                                architecto culpa.
                                            </span>
                                        </p>
                                        <p>
                                            <span>
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                            <span>
                                                info@xyz.com
                                            </span>
                                        </p>
                                        <p>
                                            <span>
                                                <i class="fa-solid fa-phone"></i>
                                            </span>
                                            <span><a href="+9199999999999">+91 99999999999</a>, <a
                                                    href="+9199999999999">+91 99999999999</a></span>
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer__copyright text-center">
                                <p> © {{ now()->format('Y') }} Tutorgo, All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->


    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
