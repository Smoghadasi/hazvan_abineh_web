@extends('layouts.main')
@section('content')
    <!--============================== Breadcrumb Area ==============================-->
    @include('partials.home.banner')

    <!--  About Section S T A R T   -->
    <section class="about-section space pb-0 fix">
        <div class="about-container-wrapper style2">
            <div class="container">
                <div class="row gy-30 gx-80">
                    <div class="col-xl-6">
                        <div class="about-thumb wow fadeInUp" data-wow-delay="0.3s">
                            {{-- <img src="/assets/img/about/aboutThumb2_1.png" alt="thumb" /> --}}
                            <div class="shape">
                                <img src="{{ asset('assets/img/sliders/4.jpeg') }}" alt="shape" />
                                {{-- <h6><span class="counter-number"> 20 </span> <span class="plus"> + </span> سال تجربه</h6> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-content">
                            <div class="section-title style4">
                                <h6 class="subtitle style2 wow fadeInUp" data-wow-delay="0.3s">درباره شرکت</h6>
                                {{-- <h2 style="padding-top: 5rem" class="title wow fadeInUp" data-wow-delay="0.6s">درباره شرکت</h2> --}}
                                    <p style="text-align: justify">
                                        شرکت مهندسین مشاور هزوان ابنیه با تکیه بر دانش فنی و تجربه‌ی تخصصی همکاران خود، در
                                        حوزه‌ی طراحی و اجرای پروژه‌های معماری و شهری فعالیت می‌کند. تیم متخصص ما با سابقه‌ای غنی
                                        در طراحی و خلق فضاهای چندمنظوره و انسان‌محور، شامل کاربری‌های مختلفی همچون مسکونی،
                                        تجاری، اداری، فرهنگی و همچنین فضاهای عمومی شهری، همواره به دنبال ارائه‌ی راه‌حل‌های
                                        نوآورانه و پایدار است. ما با به‌کارگیری آخرین استانداردهای طراحی و فناوری‌های روز، در پی
                                        تحقق اهداف کارفرمایان و بهره‌برداران هستیم و تعالی در کیفیت، عملکرد و زیبایی‌شناسی را
                                        سرلوحه‌ی کار خود قرار داده‌ایم. همکاری مستمر با ذینفعان و درک عمیق نیازهای آن‌ها، اساس
                                        رویکرد حرفه‌ای ماست. </p>
                                </div>

                            {{-- <div class="checklist-box row gy-5 gx-17">
                                <div class="col-lg-12">
                                    <div class="checklist-wrapper wow fadeInUp" data-wow-delay="0.5s">
                                        <ul class="checklist">
                                            <li><img src="/assets/img/icon/checkDouble.png" alt="icon" /></li>
                                            <li>100% رضایت مشتری</li>
                                        </ul>
                                        <ul class="checklist">
                                            <li><img src="/assets/img/icon/checkDouble.png" alt="icon" /></li>
                                            <li>تیم مهندسی خبره</li>
                                        </ul>
                                        <ul class="checklist">
                                            <li><img src="/assets/img/icon/checkDouble.png" alt="icon" /></li>
                                            <li>قیمت مقرون به صرفه و منعطف</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--  Brand Slider Section S T A R T   -->


    <!-- Faq Section    S T A R T -->

    <!-- Faq Section    S T A R T -->
    {{-- <section class="faq-section fix m-3">
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
    </section> --}}
@endsection
