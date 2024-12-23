@extends('layouts.main')
@section('content')
    <!--==============================
             Breadcrumb Area
             ==============================-->
    <div class="breadcrumb-wrapper">
        <div class="container-fluid">
            <div class="breadcumb border-radius" data-bg-src="/assets/img/hero/breadcumbBg.png">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 d-flex justify-content-center">
                        <div class="page-heading">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">درباره ما</h1>
                            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                                <li>
                                    <a href="index.html">
                                        صفحه اصلی
                                    </a>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-left"></i>
                                </li>
                                <li>
                                    درباره ما
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex justify-content-center">
                        <div class="breadcumb-thumb">
                            <img class="thumb" src="/assets/img/hero/breadcumbThumb.png" alt="thumb" />
                            <div class="shape"><img src="/assets/img/shape/breadcumbShape.png" alt="shape" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Faq Section    S T A R T -->
    <section class="faq-section fix m-3">
        <div class="container-fluid">
            <div class="faq-container-wrapper space style2 pt-0">
                <div class="container">
                    <div class="faq-wrapper style2">
                        <div class="row gy-5">
                            <div class="col-xl-7">
                                <div class="faq-content style2 bg-white border-radius">
                                    <div class="section-title style3 mb-55">
                                        <h6 class="subtitle wow fadeInUp" data-wow-delay="0.3s">سوالات متداول</h6>
                                        <h2 class="title wow fadeInUp" data-wow-delay="0.6s">سوالات متداولی که ممکن پیش
                                            بیاید</h2>
                                    </div>
                                    <div class="faq-accordion">
                                        <div class="accordion" id="accordion">
                                            <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq1"
                                                        aria-expanded="true" aria-controls="faq1">
                                                        تفاوت پروژه های اجرایی شرکت ما چیست!؟
                                                    </button>
                                                </h5>
                                                <div id="faq1" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                                                        استفاده از
                                                        طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                        سطرآنچنان که
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq2"
                                                        aria-expanded="false" aria-controls="faq2">
                                                        فاز اصلی ساخت یک ساختمان چیست؟
                                                    </button>
                                                </h5>
                                                <div id="faq2" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                                                        استفاده از
                                                        طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                        سطرآنچنان که
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq5"
                                                        aria-expanded="false" aria-controls="faq5">
                                                        چگونه بهترین پیمانکار را انتخاب کنیم؟
                                                    </button>
                                                </h5>
                                                <div id="faq5" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                                                        استفاده از
                                                        طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                        سطرآنچنان که
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="faq-thumb">
                                    <img src="/assets/img/faq/faqThumb2_1.jpg" alt="thumb" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
