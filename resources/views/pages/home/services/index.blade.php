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
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">خدمات</h1>
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
                                    خدمات
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

    <!--  Service Section Start   -->
    <div class="service-section space fix">
        <div class="service-wrapper style1">
            <div class="container">
                <div class="row gy-30 gx-30">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card style1 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-card-icon">
                                    <img src="/assets/img/icon/serviceIcon1_{{ rand(1, 6) }}.svg" alt="icon" />
                                </div>
                                <div class="service-card-body">
                                    <h3 class="title">
                                        <a href="{{ route('home.service.show', $service) }}">{{ $service->title ?? '-' }}</a>
                                    </h3>
                                    <p>
                                        {{ $service->meta_description ?? '-' }}
                                    </p>
                                    <a href="{{ route('home.service.show', $service) }}" class="et-btn style3">
                                        مطالعه بیشتر <i class="fa-regular fa-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
