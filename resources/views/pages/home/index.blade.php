@extends('layouts.main')
@section('content')
    <!-- Hero Section    S T A R T -->
    <section class="hero-section fix">
        <div class="hero-wrapper style1">
            <div class="container-fluid">
                <div class="hero-main-container style1 fix">
                    <div class="container">
                        <div class="row gy-5 gx-0">
                            <div class="col-lg-7 order-2 order-lg-1">
                                <div class="hero-content style1">
                                    <div class="hero-title-wrapper">
                                        <div class="subtitle" data-bg-src="assets/img/bg/btnBg.png">
                                            <h6>ویژگی ها</h6>
                                        </div>
                                        <h1 class="title">راه حلی برای حل چالش صنعت
                                            های <span>مدرن</span>
                                        </h1>
                                        <p class="text mxw-586">
                                            لورم ایپسوم متن ساختگی با تولید
                                            سادگی نامفهوم از صنعت چاپ، و با
                                            استفاده از طراحان گرافیک است،
                                            چاپگرها و متون بلکه روزنامه و مجله
                                            در ستون و سطرآنچنان که
                                        </p>
                                        <a href="#" class="et-btn style2">درباره ما</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 order-1 order-lg-2">
                                <div class="slider-area heroSliderOne">
                                    <div class="swiper et-slider" id="heroSliderOne"
                                        data-slider-options='{"loop": true, "effect": "fade"}'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="hero-thumb style1">
                                                    <div class="bordered-mask">
                                                        <div class="masked-image">
                                                            <img class="main-thumb" src="assets/img/hero/heroThumb1_1.png"
                                                                alt="thumb" />
                                                        </div>
                                                    </div>
                                                    <div class="shape">
                                                        <img src="assets/img/shape/heroShape1_1.png" alt="shape" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="hero-thumb style1">
                                                    <div class="bordered-mask">
                                                        <div class="masked-image">
                                                            <img class="main-thumb" src="assets/img/hero/heroThumb1_2.png"
                                                                alt="thumb" />
                                                        </div>
                                                    </div>
                                                    <div class="shape">
                                                        <img src="assets/img/shape/heroShape1_1.png" alt="shape" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="hero-thumb style1">
                                                    <div class="bordered-mask">
                                                        <div class="masked-image">
                                                            <img class="main-thumb" src="assets/img/hero/heroThumb1_3.png"
                                                                alt="thumb" />
                                                        </div>
                                                    </div>
                                                    <div class="shape">
                                                        <img src="assets/img/shape/heroShape1_1.png" alt="shape" />
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
            </div>
        </div>
    </section>
    <!--  Service Section Start   -->
    <div class="service-section space pb-0 fix">
        <div class="service-wrapper style1">
            <div class="container">
                <div class="row gy-30 gx-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style1 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/serviceIcon1_1.svg" alt="icon" />
                            </div>
                            <div class="service-card-body">
                                <h3 class="title"><a href="service-details.html"> ساخت و
                                        ساز ساختمان </a>
                                </h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </p>
                                <a href="service-details.html" class="et-btn style3">
                                    مطالعه بیشتر <i class="fa-regular fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style1 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/serviceIcon1_2.svg" alt="icon" />
                            </div>
                            <div class="service-card-body">
                                <h3 class="title"><a href="service-details.html"> مدیریت
                                        ساخت و ساز </a>
                                </h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </p>
                                <a href="service-details.html" class="et-btn style3">
                                    مطالعه بیشتر <i class="fa-regular fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card style1 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/serviceIcon1_3.svg" alt="icon" />
                            </div>
                            <div class="service-card-body">
                                <h3 class="title"><a href="service-details.html"> نوسازی
                                        ساختمان</a>
                                </h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </p>
                                <a href="service-details.html" class="et-btn style3">
                                    مطالعه بیشتر <i class="fa-regular fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  About Section Start   -->
    <section class="about-section space pb-0 fix">
        <div class="container-fluid">
            <div class="about-container-wrapper style1 space bg-white border-radius">
                <div class="container">
                    <div class="row gy-5">
                        <div class="col-lg-6">
                            <div class="about-us-img">
                                <div class="about-us-thumb">
                                    <img src="assets/img/about/aboutThumb1_1.jpg" alt="thumb" />
                                </div>
                                <div class="counter-wrapper">
                                    <h2><span class="counter-number">20</span>+</h2>
                                    <p>
                                        سال <br />
                                        سابقه
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h6 class="subtitle wow fadeInUp" data-wow-delay="0.3s">
                                    درباره شرکت
                                </h6>
                                <h2 class="title wow fadeInUp" data-wow-delay="0.6s">
                                    بهترین کیفیت ساخت و ساز را از ما بخواهید
                                </h2>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                    صنعت چاپ، و با استفاده از طراحان گرافیک است،
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                    سطرآنچنان که
                                </p>
                            </div>
                            <div class="fancy-box-wrapper">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="fancy-box style2 wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="fancy-box-title">
                                                <img src="assets/img/icon/aboutIcon1_1.svg" alt="icon" />
                                                <h4>
                                                    برنامه ریزی <br />
                                                    ساخت و ساز
                                                </h4>
                                            </div>
                                            <p>
                                                لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت
                                                چاپ، و با استفاده از طراحان
                                                گرافیک است، چاپگرها و
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="fancy-box style2 wow fadeInUp" data-wow-delay="0.6s">
                                            <div class="fancy-box-title">
                                                <img src="assets/img/icon/aboutIcon1_2.svg" alt="icon" />
                                                <h4>
                                                    ایده پردازی <br />
                                                    ساخت و ساز
                                                </h4>
                                            </div>
                                            <p>
                                                لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت
                                                چاپ، و با استفاده از طراحان
                                                گرافیک است، چاپگرها و
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-wrapper wow fadeInUp" data-wow-delay="0.3s">
                                <a href="#" class="et-btn">بیشتر بخوان<i class="fa-solid fa-arrow-left"></i></a>
                                <div class="contact-us">
                                    <img src="assets/img/icon/aboutIcon1_3.svg" alt="icon" />
                                    <div class="contact-us-text">
                                        <h5 class="mb-1">پشتیبانی 24/7</h5>
                                        <h4><a href="tel:09123456789">09123456789</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Offer Section Start   -->
    <div class="offer-section space pb-0 fix">
        <div class="offer-wrapper style1">
            <div class="container">
                <div class="section-title d-flex flex-column justify-content-center mb-40">
                    <h6 class="subtitle theme-color3 text-center mxw-181px mx-auto wow fadeInUp" data-wow-delay="0.3s">
                        آنچه ما ارائه می دهیم
                    </h6>
                    <h2 class="title mxw-750px text-center mx-auto wow fadeInUp" data-wow-delay="0.6s">
                        ساخت آینده ای درخشان با حفظ اصالت گذشته
                    </h2>
                </div>
                <div class="row gy-30 gx-30">
                    <div class="col-lg-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="offer-card-body">
                                <div class="title">
                                    <img src="assets/img/icon/offerIcon1_1.svg" alt="icon" />
                                    <h3><a href="service-details.html">برنامه ریزی
                                            ساخت</a>
                                    </h3>
                                </div>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                    صنعت چاپ، و با استفاده از طراحان گرافیک است،
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                    سطرآنچنان که
                                </p>
                                <a href="service-details.html" class="link-btn style2">
                                    مطالعه بیشتر <i class="fa-regular fa-arrow-left"></i></a>
                            </div>
                            <a href="service-details.html">
                                <div class="offer-card-thumb">
                                    <img src="assets/img/offer/offer1_1.png" alt="thumb" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="offer-card-body">
                                <div class="title">
                                    <img src="assets/img/icon/offerIcon1_2.svg" alt="icon" />
                                    <h3><a href="service-details.html">نو سازی
                                            ساختمان</a>
                                    </h3>
                                </div>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                    صنعت چاپ، و با استفاده از طراحان گرافیک است،
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                    سطرآنچنان که
                                </p>
                                <a href="service-details.html" class="link-btn style2">
                                    مطالعه بیشتر <i class="fa-regular fa-arrow-left"></i></a>
                            </div>
                            <a href="service-details.html">
                                <div class="offer-card-thumb">
                                    <img src="assets/img/offer/offer1_2.png" alt="thumb" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.9s">
                            <div class="offer-card-body">
                                <div class="title">
                                    <img src="assets/img/icon/offerIcon1_3.svg" alt="icon" />
                                    <h3><a href="service-details.html">پیمانکار
                                            عمومی</a>
                                    </h3>
                                </div>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                    صنعت چاپ، و با استفاده از طراحان گرافیک است،
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                    سطرآنچنان که
                                </p>
                                <a href="service-details.html" class="link-btn style2">
                                    مطالعه بیشتر <i class="fa-regular fa-arrow-left"></i></a>
                            </div>
                            <a href="service-details.html">
                                <div class="offer-card-thumb">
                                    <img src="assets/img/offer/offer1_3.png" alt="thumb" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                        <img src="assets/img/icon/counterIcon1_1.svg" alt="icon" />
                                        <h2><span class="counter-number">10
                                            </span>k+
                                        </h2>
                                    </div>
                                    <p>پروژه کامل در هر سال</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center">
                                <div class="counter">
                                    <div class="counter-thumb">
                                        <img src="assets/img/icon/counterIcon1_2.svg" alt="icon" />
                                        <h2><span class="counter-number"> 14
                                            </span>k+
                                        </h2>
                                    </div>
                                    <p>عضو فعال</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center">
                                <div class="counter">
                                    <div class="counter-thumb">
                                        <img src="assets/img/icon/counterIcon1_3.svg" alt="icon" />
                                        <h2><span class="counter-number">97
                                            </span>%
                                        </h2>
                                    </div>
                                    <p>نرخ تایید ساختمان</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center">
                                <div class="counter">
                                    <div class="counter-thumb">
                                        <img src="assets/img/icon/counterIcon1_4.svg" alt="icon" />
                                        <h2><span class="counter-number">800
                                            </span>+
                                        </h2>
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
                                    <h2 class="title wow fadeInUp" data-wow-delay="0.6s">مراحل شکل گیری یک
                                        ساختمان
                                    </h2>
                                </div>
                                <div class="work-process-content">
                                    <div class="fancy-box-style-2 wow fadeInUp" data-wow-delay="0.3s">
                                        <img src="assets/img/icon/wcuIcon1_1.svg" alt="icon" />
                                        <div class="fancy-box-content">
                                            <h6>مرحله 1</h6>
                                            <h4>ساخت یک کانسپت طراحی</h4>
                                            <p>
                                                لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت
                                                چاپ، و با استفاده از طراحان
                                                گرافیک است، چاپگرها و متون
                                                بلکه روزنامه و مجله در ستون و
                                                سطرآنچنان که
                                            </p>
                                        </div>
                                    </div>
                                    <div class="fancy-box-style-2 wow fadeInUp" data-wow-delay="0.6s">
                                        <img src="assets/img/icon/wcuIcon1_2.svg" alt="icon" />
                                        <div class="fancy-box-content">
                                            <h6>مرحله 2</h6>
                                            <h4>تست طراحی و کنترل کیفیت</h4>
                                            <p>
                                                لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت
                                                چاپ، و با استفاده از طراحان
                                                گرافیک است، چاپگرها و متون
                                                بلکه روزنامه و مجله در ستون و
                                                سطرآنچنان که
                                            </p>
                                        </div>
                                    </div>
                                    <div class="fancy-box-style-2 wow fadeInUp" data-wow-delay="0.9s">
                                        <img src="assets/img/icon/wcuIcon1_3.svg" alt="icon" />
                                        <div class="fancy-box-content">
                                            <h6>مرحله 3</h6>
                                            <h4>مونتاژ نهایی و تحویل پروژه</h4>
                                            <p>
                                                لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت
                                                چاپ، و با استفاده از طراحان
                                                گرافیک است، چاپگرها و متون
                                                بلکه روزنامه و مجله در ستون و
                                                سطرآنچنان که
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="work-process-thumb wow fadeInUp" data-wow-delay="0.3s">
                                    <img src="assets/img/wcu/wcuThumb1_1.jpg" alt="thumb" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Project Section Start   -->
    <div class="project-section space fix">
        <div class="project-wrapper style1">
            <div class="container">
                <div class="section-title d-flex flex-column justify-content-center mb-40">
                    <h6 class="subtitle theme-color3 text-center mxw-163px mx-auto wow fadeInUp" data-wow-delay="0.3s">
                        پروژه های ما
                    </h6>
                    <h2 class="title mxw-750px text-center mx-auto wow fadeInUp" data-wow-delay="0.6s">
                        اعتماد پایه و اساس کار ماست
                    </h2>
                </div>
                <div class="row gy-30 gx-30">
                    <div class="col-lg-4">
                        <div class="project-thumb wow fadeInUp" data-wow-delay="0.3s">
                            <img class="thumb1" src="assets/img/project/projectThumb1_1.png" alt="thumb" />
                            <div class="thumb-content">
                                <p>ساخت و ساز</p>
                                <h3><a href="project-details.html">ساخت منزل مسکونی </a>
                                </h3>
                                <a href="project-details.html" class="link-btn">
                                    مطالعه بیشتر
                                    <i class="fa-regular fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="project-thumb wow fadeInUp" data-wow-delay="0.6s">
                            <img class="thumb2" src="assets/img/project/projectThumb1_2.png" alt="thumb" />
                            <div class="thumb-content">
                                <p>ساخت و ساز</p>
                                <h3><a href="project-details.html">ساخت منزل مسکونی </a>
                                </h3>
                                <a href="project-details.html" class="link-btn">
                                    مطالعه بیشتر
                                    <i class="fa-regular fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="project-thumb wow fadeInUp" data-wow-delay="0.3s">
                            <img class="thumb3" src="assets/img/project/projectThumb1_3.png" alt="thumb" />
                            <div class="thumb-content">
                                <p>ساخت و ساز</p>
                                <h3><a href="project-details.html">ساخت منزل مسکونی </a>
                                </h3>
                                <a href="project-details.html" class="link-btn">
                                    مطالعه بیشتر
                                    <i class="fa-regular fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-thumb wow fadeInUp" data-wow-delay="0.6s">
                            <img class="thumb4" src="assets/img/project/projectThumb1_4.png" alt="thumb" />
                            <div class="thumb-content">
                                <p>ساخت و ساز</p>
                                <h3><a href="project-details.html">ساخت منزل مسکونی </a>
                                </h3>
                                <a href="project-details.html" class="link-btn">
                                    مطالعه بیشتر
                                    <i class="fa-regular fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    تیم</h6>
                <h2 class="title text-white mxw-750px text-center mx-auto wow fadeInUp" data-wow-delay="0.6s">واسه رویاهات
                    پل بساز</h2>
            </div>
            <div class="row gy-5">
                <div class="col-xl-4">
                    <div class="team-card style1">
                        <div class="team-thumb">
                            <img src="assets/img/team/teamThumb1_1.jpg" alt="thumb" />
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
                            <img src="assets/img/team/teamThumb1_2.jpg" alt="thumb" />
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
                            <img src="assets/img/team/teamThumb1_3.jpg" alt="thumb" />
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
    <!-- Testimonial Section    S T A R T -->
    <section class="testimonial-section space pt-0 fix">
        <div class="testimonial-wrapper style1">
            <div class="container">
                <div class="slider-area testimonialSliderOne">
                    <div class="swiper et-slider" id="testimonialSliderOne"
                        data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":2}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial_card style1">
                                    <div class="testimonial_body">
                                        <ul class="star-wrap">
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star2.svg" alt="icon" /></li>
                                        </ul>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم از صنعت چاپ، و با استفاده از
                                            طراحان گرافیک است، چاپگرها و متون
                                            بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که
                                        </p>
                                    </div>
                                    <div class="testimonial_footer">
                                        <div class="fancy-box style1">
                                            <div class="item"><img
                                                    src="assets/img/testimonials/testimonialProfile1_1.jpg"
                                                    alt="img" /></div>
                                            <div class="item">
                                                <h6>رز رضوی</h6>
                                                <p>شرکت جیرفت</p>
                                            </div>
                                        </div>
                                        <div class="icon"><img src="assets/img/icon/quote.svg" alt="icon" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial_card style1">
                                    <div class="testimonial_body">
                                        <ul class="star-wrap">
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star2.svg" alt="icon" /></li>
                                        </ul>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم از صنعت چاپ، و با استفاده از
                                            طراحان گرافیک است، چاپگرها و متون
                                            بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که
                                        </p>
                                    </div>
                                    <div class="testimonial_footer">
                                        <div class="fancy-box style1">
                                            <div class="item"><img
                                                    src="assets/img/testimonials/testimonialProfile1_2.jpg"
                                                    alt="img" /></div>
                                            <div class="item">
                                                <h6>کوهیار مهدوی</h6>
                                                <p>شرکت به ساز</p>
                                            </div>
                                        </div>
                                        <div class="icon"><img src="assets/img/icon/quote.svg" alt="icon" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial_card style1">
                                    <div class="testimonial_body">
                                        <ul class="star-wrap">
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star2.svg" alt="icon" /></li>
                                        </ul>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم از صنعت چاپ، و با استفاده از
                                            طراحان گرافیک است، چاپگرها و متون
                                            بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که
                                        </p>
                                    </div>
                                    <div class="testimonial_footer">
                                        <div class="fancy-box style1">
                                            <div class="item"><img
                                                    src="assets/img/testimonials/testimonialProfile1_1.jpg"
                                                    alt="img" /></div>
                                            <div class="item">
                                                <h6>رز رضوی</h6>
                                                <p>شرکت جیرفت</p>
                                            </div>
                                        </div>
                                        <div class="icon"><img src="assets/img/icon/quote.svg" alt="icon" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial_card style1">
                                    <div class="testimonial_body">
                                        <ul class="star-wrap">
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star.svg" alt="icon" /></li>
                                            <li><img src="assets/img/icon/star2.svg" alt="icon" /></li>
                                        </ul>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم از صنعت چاپ، و با استفاده از
                                            طراحان گرافیک است، چاپگرها و متون
                                            بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که
                                        </p>
                                    </div>
                                    <div class="testimonial_footer">
                                        <div class="fancy-box style1">
                                            <div class="item"><img
                                                    src="assets/img/testimonials/testimonialProfile1_2.jpg"
                                                    alt="img" /></div>
                                            <div class="item">
                                                <h6>کوهیار مهدوی</h6>
                                                <p>شرکت به ساز</p>
                                            </div>
                                        </div>
                                        <div class="icon"><img src="assets/img/icon/quote.svg" alt="icon" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#testimonialSliderOne"
                    class="slider-arrow style2 slider-prev d-xl-block d-none"><img src="assets/img/icon/arrowLeft.png"
                        alt="img" /></button>
                <button data-slider-next="#testimonialSliderOne"
                    class="slider-arrow style2 slider-next d-xl-block d-none"><img src="assets/img/icon/arrowRight.png"
                        alt="img" /></button>
            </div>
        </div>
    </section>
@endsection