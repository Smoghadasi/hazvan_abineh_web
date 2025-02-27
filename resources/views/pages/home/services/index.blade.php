@extends('layouts.main')
@section('content')
@include('partials.home.banner')


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
