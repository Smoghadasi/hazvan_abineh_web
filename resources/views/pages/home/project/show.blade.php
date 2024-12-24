@extends('layouts.main')
@section('content')
    <div class="breadcrumb-wrapper">
        <div class="container-fluid">
            <div class="breadcumb border-radius" data-bg-src="/assets/img/hero/breadcumbBg.png">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 d-flex justify-content-center">
                        <div class="page-heading">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">جزییات پروژه</h1>
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
                                    جزییات پروژه
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

    <!--  Project Details Section Start   -->
    <section class="project-details-section">
        <div class="project-details-wrapper style1 space fix">
            <div class="container">
                <div class="thumb1">
                    <img src="/assets/img/project/projectDetailsThumb1_1.png" alt="thumb" />
                </div>
                <div class="row gy-5">
                    <div class="col-xl-8">
                        <div class="project-details-content">
                            <h2>{{ $project->title }}</h2>
                            {!! $project->description !!}
                        </div>

                    </div>
                    <div class="col-xl-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget mt-n116 wow fadeInUp" data-wow-delay=".4s">
                                <div class="wid-title">
                                    <h3>جزییات پروژه</h3>
                                </div>
                                <div class="project-details-widget-card">
                                    <ul class="project-info">
                                        <li>
                                            <span class="label">تاریخ:</span>
                                            <span class="value">{{ verta($project->date)->format('%d') }} {{ verta($project->date)->format('%B') }} {{ verta($project->date)->format('%Y') }}</span>
                                        </li>
                                        <li>
                                            <span class="label">مشتری:</span>
                                            <span class="value">{{ $project->customer }}</span>
                                        </li>
                                        <li>
                                            <span class="label">دسته بندی:</span>
                                            <span class="value">{{ $project->categoryProject->title ?? '-' }}</span>
                                        </li>
                                        <li>
                                            <span class="label">سایز:</span>
                                            <span class="value">{{ $project->size }}</span>
                                        </li>
                                        <li>
                                            <span class="label">لوکیشن:</span>
                                            <span class="value">{{ $project->location }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget pt-0 bg-theme-color2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="thumb">
                                    <img src="/assets/img/service/serviceDetailsThumb1_4.png" alt="thumb" />
                                </div>
                                <div class="wid-title pl-30 pt-4 pb-2">
                                    <h3>برای ساخت و ساز مشاوره میخوای!؟</h3>
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
