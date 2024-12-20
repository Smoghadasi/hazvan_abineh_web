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

    <!--  About Section S T A R T   -->
    <section class="about-section space pb-0 fix">
        <div class="about-container-wrapper style2">
            <div class="container">
                <div class="row gy-30 gx-80">
                    <div class="col-xl-6">
                        <div class="about-thumb wow fadeInUp" data-wow-delay="0.3s">
                            <img src="/assets/img/about/aboutThumb2_1.png" alt="thumb" />
                            <div class="shape">
                                <img src="/assets/img/shape/aboutShape2_1.png" alt="shape" />
                                <h6><span class="counter-number"> 20 </span> <span class="plus"> + </span> سال تجربه</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-content">
                            <div class="section-title style4">
                                <h6 class="subtitle style2 wow fadeInUp" data-wow-delay="0.3s">درباره شرکت</h6>
                                <h2 class="title wow fadeInUp" data-wow-delay="0.6s">ما بهترین کیفیت ساخت و ساز را ارائه می
                                    کنیم
                                </h2>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                                    است،
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                </p>
                            </div>

                            <div class="checklist-box row gy-5 gx-17">
                                <div class="col-lg-7">
                                    <div class="checklist-wrapper wow fadeInUp" data-wow-delay="0.5s">
                                        <ul class="checklist">
                                            <li><img src="/assets/img/icon/checkDouble.svg" alt="icon" /></li>
                                            <li>100% رضایت مشتری</li>
                                        </ul>
                                        <ul class="checklist">
                                            <li><img src="/assets/img/icon/checkDouble.svg" alt="icon" /></li>
                                            <li>تیم مهندسی خبره</li>
                                        </ul>
                                        <ul class="checklist">
                                            <li><img src="/assets/img/icon/checkDouble.svg" alt="icon" /></li>
                                            <li>قیمت مقرون به صرفه و منعطف</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="thumb wow fadeInUp" data-wow-delay="0.3s">
                                        <img src="/assets/img/about/aboutThumb2_2.png" alt="thumb" />
                                        <div class="video-box">
                                            <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8"
                                                class="play-btn popup-video"><i
                                                    class="fa-sharp-duotone fa-solid fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="contact-wrapper wow fadeInUp" data-wow-delay="0.3s">
                                <a href="about.html" class="et-btn style4">بیشتر بخوان<i
                                        class="fa-solid fa-arrow-left"></i></a>
                                <div class="fancy-box style1">
                                    <img src="/assets/img/about/aboutProfile1_1.png" alt="img" />
                                    <div class="item">
                                        <h6>مهندس ارشد</h6>
                                        <p>دانیال علوی</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Work Process Section Start   -->
    <section class="work-process-section space pb-0 fix">
        <div class="container-fluid">
            <div class="work-process-container-wrapper style1 space bg-theme-color2 border-radius">
                <div class="container">
                    <div class="counters-area style1">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center">
                                <div class="counter">
                                    <div class="counter-thumb">
                                        <img src="/assets/img/icon/counterIcon1_1.svg" alt="icon" />
                                        <h2><span class="counter-number">10 </span>k+</h2>
                                    </div>
                                    <p>پروژه کامل در هر سال</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center">
                                <div class="counter">
                                    <div class="counter-thumb">
                                        <img src="/assets/img/icon/counterIcon1_2.svg" alt="icon" />
                                        <h2><span class="counter-number"> 14 </span>k+</h2>
                                    </div>
                                    <p>عضو فعال</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center">
                                <div class="counter">
                                    <div class="counter-thumb">
                                        <img src="/assets/img/icon/counterIcon1_3.svg" alt="icon" />
                                        <h2><span class="counter-number">97 </span>%</h2>
                                    </div>
                                    <p>نرخ تایید ساختمان</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center">
                                <div class="counter">
                                    <div class="counter-thumb">
                                        <img src="/assets/img/icon/counterIcon1_4.svg" alt="icon" />
                                        <h2><span class="counter-number">800 </span>+</h2>
                                    </div>
                                    <p>پروژه فعال ساخت و ساز</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="work-process">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title">
                                    <h6 class="subtitle wow fadeInUp" data-wow-delay="0.3s">فرایند کار ما</h6>
                                    <h2 class="title wow fadeInUp" data-wow-delay="0.6s">مراحل شکل گیری یک ساختمان</h2>
                                </div>
                                <div class="work-process-content">
                                    <div class="fancy-box-style-2 wow fadeInUp" data-wow-delay="0.3s">
                                        <img src="/assets/img/icon/wcuIcon1_1.svg" alt="icon" />
                                        <div class="fancy-box-content">
                                            <h6>مرحله 1</h6>
                                            <h4>ساخت یک کانسپت طراحی</h4>
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                                طراحان
                                                گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            </p>
                                        </div>
                                    </div>
                                    <div class="fancy-box-style-2 wow fadeInUp" data-wow-delay="0.6s">
                                        <img src="/assets/img/icon/wcuIcon1_2.svg" alt="icon" />
                                        <div class="fancy-box-content">
                                            <h6>مرحله 2</h6>
                                            <h4>تست طراحی و کنترل کیفیت</h4>
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                                طراحان
                                                گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            </p>
                                        </div>
                                    </div>
                                    <div class="fancy-box-style-2 wow fadeInUp" data-wow-delay="0.9s">
                                        <img src="/assets/img/icon/wcuIcon1_3.svg" alt="icon" />
                                        <div class="fancy-box-content">
                                            <h6>مرحله 3</h6>
                                            <h4>مونتاژ نهایی و تحویل پروژه</h4>
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                                طراحان
                                                گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="work-process-thumb wow fadeInUp" data-wow-delay="0.3s">
                                    <img src="/assets/img/wcu/wcuThumb1_1.jpg" alt="thumb" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Offer Section Start   -->
    <div class="offer-section space fix">
        <div class="offer-wrapper style1">
            <div class="container">
                <div class="section-title d-flex flex-column justify-content-center mb-40">
                    <h6 class="subtitle theme-color3 text-center mxw-181px mx-auto wow fadeInUp" data-wow-delay="0.3s">
                        آنچه ما ارائه می دهیم
                    </h6>
                    <h2 class="title mxw-750px text-center mx-auto wow fadeInUp" data-wow-delay="0.6s">
                        ساخت آینده با حفظ گذشته
                    </h2>
                </div>
                <div class="row gy-30 gx-30">
                    <div class="col-lg-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="offer-card-body">
                                <div class="title">
                                    <img src="/assets/img/icon/offerIcon1_1.svg" alt="icon" />
                                    <h3><a href="service-details.html">برنامه ریزی ساخت</a></h3>
                                </div>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                                    است،
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                </p>
                                <a href="service-details.html" class="link-btn style2"> مطالعه بیشتر <i
                                        class="fa-regular fa-arrow-left"></i></a>
                            </div>
                            <a href="service-details.html">
                                <div class="offer-card-thumb">
                                    <img src="/assets/img/offer/offer1_1.png" alt="thumb" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="offer-card-body">
                                <div class="title">
                                    <img src="/assets/img/icon/offerIcon1_2.svg" alt="icon" />
                                    <h3><a href="service-details.html">نو سازی ساختمان</a></h3>
                                </div>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                                    است،
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                </p>
                                <a href="service-details.html" class="link-btn style2"> مطالعه بیشتر <i
                                        class="fa-regular fa-arrow-left"></i></a>
                            </div>
                            <a href="service-details.html">
                                <div class="offer-card-thumb">
                                    <img src="/assets/img/offer/offer1_2.png" alt="thumb" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="offer-card-body">
                                <div class="title">
                                    <img src="/assets/img/icon/offerIcon1_3.svg" alt="icon" />
                                    <h3><a href="service-details.html">پیمانکار عمومی</a></h3>
                                </div>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                                    است،
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                </p>
                                <a href="service-details.html" class="link-btn style2"> مطالعه بیشتر <i
                                        class="fa-regular fa-arrow-left"></i></a>
                            </div>
                            <a href="service-details.html">
                                <div class="offer-card-thumb">
                                    <img src="/assets/img/offer/offer1_3.png" alt="thumb" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Brand Slider Section S T A R T   -->
    <!--  Brand Slider Section S T A R T   -->
    <div class="brand-slider-section">
        <div class="container-fluid">
            <div class="brand-slider-wrapper style1  border-radius fix pb-640 bg-theme-color3">
                <div class="slider-area">
                    <div class="container">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Team Member Section S T A R T   -->
    <section class="team-member-section space pt-0 fix mt-n560">
        <div class="container">
            <div class="section-title d-flex flex-column justify-content-center mb-40">
                <h6 class="subtitle theme-color2 text-center mxw-181px mx-auto wow fadeInUp" data-wow-delay="0.3s">اعضای
                    تیم
                </h6>
                <h2 class="title text-white mxw-750px text-center mx-auto wow fadeInUp" data-wow-delay="0.6s">واسه رویاهات
                    پل بساز</h2>
            </div>
            <div class="row gy-5">
                <div class="col-xl-4">
                    <div class="team-card style1">
                        <div class="team-thumb">
                            <img src="/assets/img/team/teamThumb1_1.jpg" alt="thumb" />
                        </div>
                        <div class="team-content">
                            <div class="title">
                                <h4>آریا ایرانی</h4>
                                <p>طراح وبسایت</p>
                            </div>
                            <div class="social-profile">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-card style1">
                        <div class="team-thumb">
                            <img src="/assets/img/team/teamThumb1_2.jpg" alt="thumb" />
                        </div>
                        <div class="team-content">
                            <div class="title">
                                <h4>کامران میرانی</h4>
                                <p>مدیر</p>
                            </div>
                            <div class="social-profile">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-card style1">
                        <div class="team-thumb">
                            <img src="/assets/img/team/teamThumb1_3.jpg" alt="thumb" />
                        </div>
                        <div class="team-content">
                            <div class="title">
                                <h4>روزبه بهرنگ</h4>
                                <p>مهندس معمار</p>
                            </div>
                            <div class="social-profile">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                                <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq Section    S T A R T -->
    <section class="faq-section fix">
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
