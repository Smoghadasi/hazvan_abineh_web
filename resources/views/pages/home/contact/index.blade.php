@extends('layouts.main')
@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container-fluid">
            <div class="breadcumb border-radius" data-bg-src="/assets/img/hero/breadcumbBg.png">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 d-flex justify-content-center">
                        <div class="page-heading">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">تماس با ما</h1>
                            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                                <li>
                                    <a href="/">
                                        صفحه اصلی
                                    </a>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-left"></i>
                                </li>
                                <li>
                                    تماس با ما
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

    <div class="contact-section space fix">
        <div class="container">
            <div class="row gy-5">
                <div class="col-xl-4">
                    <div class="contact-box style1">
                        <div class="contact-meta">
                            <div class="item">
                                <div class="icon"><img src="/assets/img/icon/phoneIcon3.svg" alt="icon" /></div>
                            </div>
                            <div class="item">
                                <h6>تماس با ما</h6>
                                <a href="tel:02188883995">02188883995</a>
                            </div>
                        </div>
                        <div class="contact-meta">
                            <div class="item">
                                <div class="icon"><img src="/assets/img/icon/emailIcon.svg" alt="icon" /></div>
                            </div>
                            <div class="item">
                                <h6>ایمیل</h6>
                                <a href="mailto:hazvanabnieh@gmail.com"><span
                                        class="__cf_email__">hazvanabnieh@gmail.com</span></a>
                            </div>
                        </div>
                        <div class="contact-meta">
                            <div class="item">
                                <div class="icon"><img src="/assets/img/icon/locationIcon.svg" alt="icon" /></div>
                            </div>
                            <div class="item">
                                <h6>آدرس دفتر</h6>
                                <a href="https://maps.app.goo.gl/TueKT2yUtNfv8Xin6">
                                    تهران، خیابان ولیعصر، نرسیده به توانیر، پلاک ۲۴۸۶ مجتمع اداری تجاری طلوع، طبقه سوم، واحد
                                    ۳۰۶
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="contact-form-wrapper style1 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="section-title style5 mb-25">
                            <h6 class="subtitle wow fadeInUp" data-wow-delay="0.3s">در ارتباط باش</h6>
                            <h2 class="title text-title mb-4 wow fadeInUp" data-wow-delay="0.6s">چیزی برامون بنویس</h2>
                        </div>
                        <form action="{{ route('home.contactUs.store') }}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name" placeholder="نام و نام خانوادگی"
                                            required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="email" name="email" id="email" placeholder="ایمیل شما"
                                            required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="number" name="tel" id="tel" placeholder="شماره تلفن"
                                            required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <select name="category" class="single-select" aria-label="select service" required>
                                        <option value="نامشخص" selected="selected">یکی از خدمات را انتخاب کن</option>
                                        <option value="ساختمان سازی">ساختمان سازی</option>
                                        <option value="روف گاردن">روف گاردن</option>
                                        <option value="برج سازی">برج سازی</option>
                                        <option value="تخریب">تخریب</option>
                                        <option value="محوطه سازی">محوطه سازی</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <textarea name="message" id="message" placeholder="متن پیام"></textarea>
                                    </div>
                                </div>
                                <p class="contactformmessage"></p>
                                <div class="col-lg-6">
                                    <button type="submit" class="et-btn style4" name="sendmessage">
                                        ارسال پیام
                                        <i class="fa-solid fa-arrow-left ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
