<!-- Footer Area   S T A R T -->
<footer class="footer-area pt-5">
    <div class="widget-area style1 pb-60">
        <div class="container-fluid">
            <div class="footer-layout style1" data-bg-src="/assets/img/bg/footerBg.png">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="widget footer-widget wow fadeInUp" data-wow-delay=".6s">
                                <div class="et-widget-about">
                                    <div class="about-logo">
                                        <a href="#"><img src="{{ asset('assets/img/logo-basic.png') }}"
                                                alt="هزوان ابنیه" /></a>
                                    </div>
                                    <p class="about-text">
                                        هزوان ابنیه یک شرکت در زمینه ساخت و ساز برج ها
                                        و پروژه های ساختمانی که دارای خلاقیت و ایده
                                        های مهمی است.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-12">
                            <div class="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1s">
                                <h3 class="widget_title">درباره شرکت</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li>
                                            <a href="{{ route('home.about') }}"><i class="fa-light fa-hyphen"></i>درباره
                                                ما</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('home.service.index') }}"><i
                                                    class="fa-light fa-hyphen"></i>خدمات</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('home.project') }}"><i
                                                    class="fa-light fa-hyphen"></i>پروژه
                                                ها</a>
                                        </li>
                                        {{-- <li>
                                            <a href="blog.html"><i class="fa-light fa-hyphen"></i>بلاگ
                                                و اخبار</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('home.contactUs.index') }}"><i
                                                    class="fa-light fa-hyphen"></i>تماس
                                                با ما</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-12">
                            <div class="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1s">
                                <h3 class="widget_title">خدمات ما</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        @foreach (App\helpers\helper::servicesFooterCenter() as $service)
                                            <li>
                                                <a href="{{ route('home.service.show', $service) }}"><i class="fa-light fa-hyphen"></i>{{ $service->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 d-flex justify-content-start justify-content-xl-center">
                            <div class="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1.6s">
                                <h3 class="widget_title">راه ارتباطی</h3>
                                <div class="single-contact-widget">
                                    <div class="single-contact mb-30">
                                        <div class="single-contact_item">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="single-contact_item">
                                            <div class="single-contact_widget-title">
                                                <h5>تماس با ما</h5>
                                            </div>
                                            <a href="tel:02188883995">02188883995</a>
                                        </div>
                                    </div>
                                    <div class="single-contact mb-30">
                                        <div class="single-contact_item">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="single-contact_item">
                                            <div class="single-contact_widget-title">
                                                <h5>ایمیل</h5>
                                            </div>
                                            <a href="mailto:hazvanabnieh@gmail.com"><span
                                                    class="__cf_email__">hazvanabnieh@gmail.com</span></a>
                                        </div>
                                    </div>
                                    <div class="single-contact mb-30">
                                        <div class="single-contact_item">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="single-contact_item">
                                            <div class="single-contact_widget-title">
                                                <h5>آدرس دفتر</h5>
                                            </div>
                                            <a href="https://maps.app.goo.gl/TueKT2yUtNfv8Xin6">
                                                تهران، خیابان ولیعصر، نرسیده به توانیر، پلاک ۲۴۸۶
                                                مجتمع اداری تجاری طلوع، طبقه سوم، واحد ۳۰۶
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-wrap">
                        <div class="container px-0">
                            <div class="copyright-layout">
                                <div class="layout-text wow fadeInUp" data-wow-delay=".3s">
                                    <p class="copyright"><i class="fal fa-copyright"></i> تمامی
                                        حقوق برای <a href="#">هزوان ابنیه</a>
                                        محفوظ است.
                                    </p>
                                </div>
                                {{-- <div class="layout-link wow fadeInUp" data-wow-delay=".6s">
                                    <div class="link-wrapper">
                                        <a href="#">شرایط و قوانین </a>
                                        <a href="#">حریم خصوصی</a>
                                        <a href="#">تماس با ما</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
