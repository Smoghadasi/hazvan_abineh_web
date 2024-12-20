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
                         <a href="index.html">
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
             <div class="col-lg-4 col-md-6">
                <div class="service-card style1 wow fadeInUp" data-wow-delay="0.3s">
                   <div class="service-card-icon">
                      <img src="/assets/img/icon/serviceIcon1_1.svg" alt="icon" />
                   </div>
                   <div class="service-card-body">
                      <h3 class="title"><a href="service-details.html"> ساخت و ساز ساختمان </a></h3>
                      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                      <a href="service-details.html" class="et-btn style7"> مطالعه بیشتر <i
                            class="fa-regular fa-arrow-left"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="service-card style1 wow fadeInUp" data-wow-delay="0.6s">
                   <div class="service-card-icon">
                      <img src="/assets/img/icon/serviceIcon1_2.svg" alt="icon" />
                   </div>
                   <div class="service-card-body">
                      <h3 class="title"><a href="service-details.html"> مدیریت ساخت و ساز </a></h3>
                      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                      <a href="service-details.html" class="et-btn style7"> مطالعه بیشتر <i
                            class="fa-regular fa-arrow-left"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="service-card style1 wow fadeInUp" data-wow-delay="0.9s">
                   <div class="service-card-icon">
                      <img src="/assets/img/icon/serviceIcon1_3.svg" alt="icon" />
                   </div>
                   <div class="service-card-body">
                      <h3 class="title"><a href="service-details.html"> نوسازی ساختمان</a></h3>
                      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                      <a href="service-details.html" class="et-btn style7"> مطالعه بیشتر <i
                            class="fa-regular fa-arrow-left"></i></a>
                   </div>
                </div>
             </div>

             <div class="col-lg-4 col-md-6">
                <div class="service-card style1 wow fadeInUp" data-wow-delay="0.3s">
                   <div class="service-card-icon">
                      <img src="/assets/img/icon/serviceIcon1_4.svg" alt="icon" />
                   </div>
                   <div class="service-card-body">
                      <h3 class="title"><a href="service-details.html"> ساخت و ساز ساختمان </a></h3>
                      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                      <a href="service-details.html" class="et-btn style7"> مطالعه بیشتر <i
                            class="fa-regular fa-arrow-left"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="service-card style1 wow fadeInUp" data-wow-delay="0.6s">
                   <div class="service-card-icon">
                      <img src="/assets/img/icon/serviceIcon1_5.svg" alt="icon" />
                   </div>
                   <div class="service-card-body">
                      <h3 class="title"><a href="service-details.html"> مدیریت ساخت و ساز </a></h3>
                      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                      <a href="service-details.html" class="et-btn style7"> مطالعه بیشتر <i
                            class="fa-regular fa-arrow-left"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="service-card style1 wow fadeInUp" data-wow-delay="0.9s">
                   <div class="service-card-icon">
                      <img src="/assets/img/icon/serviceIcon1_6.svg" alt="icon" />
                   </div>
                   <div class="service-card-body">
                      <h3 class="title"><a href="service-details.html"> نوسازی ساختمان</a></h3>
                      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                      <a href="service-details.html" class="et-btn style7"> مطالعه بیشتر <i
                            class="fa-regular fa-arrow-left"></i></a>
                   </div>
                </div>
             </div>
          </div>

          <div class="pagination-area">
             <ul class="paginations">
                <li class="page-item active">
                   <a href="#">01</a>
                </li>
                <li class="page-item">
                   <a href="#">02</a>
                </li>
                <li class="page-item">
                   <a href="#">03</a>
                </li>
                <li class="page-item">
                   <a href="#">04</a>
                </li>
             </ul>
             <div class="paginations-button">
                <a href="#">
                   بعدی
                   <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14" version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink" transform="matrix(-1,0,0,-1,0,0)">
                      <path d="M7 7.00008L0 0L4.45455 7.00008L0 14L7 7.00008Z"></path>
                   </svg>
                </a>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
