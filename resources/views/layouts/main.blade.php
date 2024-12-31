<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="hazvan" />
    <meta name="description" content="مهندسین مشاور هزوان ابنیه" />
    <!-- ======== Page title ============ -->
    <title>مهندسین مشاور هزوان ابنیه</title>
    <!-- Favcion -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <!--==============================
         All CSS File
         ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" />
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>

<body class="bg-body-color">
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
    <!--********************************
         CODE START FROM HERE
         ******************************** -->
    <!-- Cursor Follower    S T A R T -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Preloader START -->
    <div id="preloader" class="preloader">
        <button class="preloader-btn style2 preloaderCls"><i class="fa-solid fa-xmark"></i> لغو</button>
        <div id="loader" class="et-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span data-preloader-text="H" class="characters">H</span>
                    <span data-preloader-text="A" class="characters">A</span>
                    <span data-preloader-text="Z" class="characters">Z</span>
                    <span data-preloader-text="V" class="characters">V</span>
                    <span data-preloader-text="A" class="characters">A</span>
                    <span data-preloader-text="N" class="characters">N</span>

                </div>
            </div>
        </div>
    </div>
    <!-- Mobilemenu    S T A R T -->
    <div class="et-menu-wrapper onepage-nav">
        <div class="et-menu-area text-center">
            <button class="et-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="#">
                    <img src="{{ asset('assets/img/logo-basic.png') }}" alt="هزوان ابنیه" />
                </a>
            </div>
            <nav class="et-mobile-menu">
                <ul>
                    <li><select name="language" id="lang" style="border: none; font-family:arial;">
                            <option value="english">En</option>
                            <option value="farsi">Fa</option>
                        </select> </li>
                    <li><a class="active" href="#">صفحه اصلی </a></li>
                    <li><a href="{{ route('home.about') }}">درباره ما </a></li>
                    <li><a href="{{ route('home.service.index') }}">خدمات</a></li>
                    <li><a href="{{ route('home.project') }}"> پروژه ها </a></li>
                    <li><a href="{{ route('home.contactUs.index') }}">تماس با ما</a></li>
                    @guest()
                        <li><a href="{{ route('login') }}">ورود به سیستم</a></li>
                    @else
                        <li><a href="{{ route('admin.home') }}">ورود به پنل ادمین</a></li>
                    @endguest
                </ul>

            </nav>
        </div>
    </div>
    <!-- Sidemenu S T A R T -->
    <div class="sidemenu-wrapper sidemenu-info d-none d-lg-block">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget">
                <div class="et-widget-about">
                    <div class="about-logo"> <a href="#"><img src="{{ asset('assets/img/logo-basic.png') }}"
                                alt="هزوان ابنیه" /></a>
                    </div>
                    <p class="text">
                        مهندسين مشاور هزوان ابنیه
                    </p>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">راه ارتباطی</h3>
                <div class="et-widget-contact">
                    <div class="info-box_text">
                        <div class="icon"> <i class="fa-solid fa-location-dot"></i> </div>
                        <div class="details"> <a
                                href="https://www.google.com/maps/place/Egens+Lab/@23.8340712,90.3631117,17z/data=!3m1!4b1!4m6!3m5!1s0x3755c14c8682a473:0xa6c74743d52adb88!8m2!3d23.8340663!4d90.3656866!16s%2Fg%2F11rs9vlwsk?entry=ttu">
                                تهران، خیابان ولیعصر، نرسیده به توانیر، پلاک ۲۴۸۶
                                مجتمع اداری تجاری طلوع، طبقه سوم، واحد ۳۰۶
                            </a>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"> <i class="fa-solid fa-phone"></i> </div>
                        <div class="details">
                            <p><a href="tel:02188883995" class="info-box_link">۰۲۱-۸۸۸۸۳۹۹۵</a></p>
                            <p><a href="tel:02188883996" class="info-box_link">۰۲۱-۸۸۸۸۳۹۹۶</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"> <i class="fa-solid fa-envelope"></i> </div>
                        <div class="details">
                            <p> <a href="mailto:hazvanabnieh@gmail.com" class="info-box_link"><span
                                        class="__cf_email__">hazvanabnieh@gmail.com</span></a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('partials.home.header')
    <!--==============================
         Main Start
         ==============================-->
    <main class="main position-relative" id="mains">
        @yield('content')
    </main>
    <!--==============================
         Main End
         ==============================-->
    @include('partials.home.footer')
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!--==============================
         All Js File
         ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Wow Animation  -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Waypoint Animation  -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Tilt Animation  -->
    <script src="{{ asset('assets/js/tilt.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script></script>
</body>

</html>
