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
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">پروژه ها</h1>
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
                                    پروژه ها
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

    <!--  Project Section Start   -->
    <div class="project-section space fix">
        <div class="project-wrapper style1">
            <div class="container">
                <div class="row gy-30 gx-30">
                    @foreach ($projects as $project)
                        <div class="col-lg-4">
                            <div class="project-thumb wow fadeInUp" data-wow-delay="0.3s">
                                <img class="thumb1" src="{{ asset('uploads/' . $project->photo_url) }}" alt="thumb" />
                                <div class="thumb-content">
                                    <p>{{ $project->categoryProject->title }}</p>
                                    <h3><a href="#">{{ $project->title ?? '-' }} </a></h3>
                                    <a href="#" class="link-btn">
                                        مطالعه بیشتر
                                        <i class="fa-regular fa-arrow-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
