@extends('layouts.main')
@section('content')
    @include('partials.home.banner')


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
