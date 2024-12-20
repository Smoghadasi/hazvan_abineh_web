@extends('layouts.main')
@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container-fluid">
            <div class="breadcumb border-radius" data-bg-src="/assets/img/hero/breadcumbBg.png">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 d-flex justify-content-center">
                        <div class="page-heading">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">جزییات خدمات</h1>
                            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                                <li>
                                    <a href="#">
                                        صفحه اصلی
                                    </a>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-left"></i>
                                </li>
                                <li>
                                    جزییات خدمات
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

    <!--  Service Details Section Start   -->
    <section class="service-details-section">
        <div class="service-details-wrapper style1 space fix">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-xl-8">
                        <div class="service-details-content">
                            <div class="thumb1">
                                <img src="{{ asset('uploads/' . $service->photo_url) }}" alt="thumb" />
                            </div>
                            <h2>{{ $service->title }}</h2>
                            {!! $service->description !!}

                        </div>



                    </div>
                    <div class="col-xl-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".4s">
                                <div class="wid-title">
                                    <h3>خدمات ما</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        @foreach ($services as $item)
                                            <li class="{{ $item->id == $service->id ? 'active' : '' }}">
                                                <a href="{{ route('home.service.show', $item) }}">
                                                    ساختمان سازی<span><i class="fa-solid fa-arrow-left"></i></span>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget pt-0 bg-theme-color2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="thumb">
                                    <img src="/assets/img/service/serviceDetailsThumb1_4.png" alt="thumb" />
                                </div>
                                <div class="wid-title pl-30 pr-30 pt-4 pb-2">
                                    <h3>برای ساخت خونت مشاوره لازم داری؟</h3>
                                </div>
                                <div class="btn-wrapper pr-40">
                                    <a href="{{ route('home.contactUs.index') }}" class="et-btn style2">تماس بگیر <i
                                            class="fa-solid fa-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
