@extends('layouts.main')
@section('content')
    <!-- Hero Section    S T A R T -->
    <section class="hero-section fix">
        <div class="hero-wrapper style1">
            <div class="container-fluid">
                <div class="hero-main-container style1 fix">
                    <div class="container">
                        <div class="row gy-5 gx-0">
                            <div class="col-lg-4 order-2 order-lg-1">
                                <div class="hero-content style1">
                                    <div class="hero-title-wrapper" style="justify-self: center;">
                                        <img src="{{ asset('assets/img/logo-second.jpg') }}" alt="" class="img-fluid">
                                        {{-- <a href="{{ route('home.about') }}" class="et-btn style2">درباره ما</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 order-1 order-lg-2">
                                <div class="slider-area heroSliderOne">
                                    <div class="swiper et-slider" id="heroSliderOne"
                                        data-slider-options='{"loop": false, "effect": "fade"}'>
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <div class="hero-thumb style1">
                                                    <div class="">
                                                        <div class="">
                                                            <img class="main-thumb"
                                                                src="{{ asset('assets/img/sliders/1.jpeg') }}"
                                                                alt="thumb" />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="hero-thumb style1">
                                                    <div class="">
                                                        <div class="">
                                                            <img class="main-thumb"
                                                                src="{{ asset('assets/img/sliders/2.jpeg') }}"
                                                                alt="thumb" />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="hero-thumb style1">
                                                    <div class="">
                                                        <div class="">
                                                            <img class="main-thumb"
                                                                src="{{ asset('assets/img/sliders/3.jpeg') }}"
                                                                alt="thumb" />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="hero-thumb style1">
                                                    <div class="">
                                                        <div class="">
                                                            <img class="main-thumb"
                                                                src="{{ asset('assets/img/sliders/4.jpeg') }}"
                                                                alt="thumb" />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="hero-thumb style1">
                                                    <div class="">
                                                        <div class="">
                                                            <img class="main-thumb"
                                                                src="{{ asset('assets/img/sliders/5.jpeg') }}"
                                                                alt="thumb" />
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
        </div>
    </section>




    <!--  Brand Slider Section S T A R T   -->
    {{-- <div class="brand-slider-section">
        <div class="container-fluid">
            <div class="brand-slider-wrapper style1  border-radius fix pb-640 bg-theme-color3">
                <div class="slider-area">
                    <div class="container">

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--  Team Member Section S T A R T   -->
    {{-- <section class="team-member-section space pt-0 fix mt-n560">
        <div class="container">
            <div class="section-title d-flex flex-column justify-content-center mb-40">
                <h6 class="subtitle theme-color1 text-center mxw-181px mx-auto wow fadeInUp" data-wow-delay="0.3s">اعضای
                    تیم</h6>
                <h2 class="title text-white mxw-750px text-center mx-auto wow fadeInUp" data-wow-delay="0.6s">واسه رویاهات
                    پل بساز</h2>
            </div>
            <div class="row gy-5">
                @foreach ($teams as $team)
                    <div class="col-xl-4">
                        <div class="team-card style1">
                            <div class="team-thumb">
                                <img src="{{ asset('uploads/' . $team->photo_url) }}" alt="thumb" />
                            </div>
                            <div class="team-content">
                                <div class="title">
                                    <h4>{{ $team->name }}</h4>
                                    <p>{{ $team->job }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section> --}}
    <!-- Testimonial Section    S T A R T -->

@endsection
