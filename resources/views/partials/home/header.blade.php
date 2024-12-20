<!-- Header Section S T A R T -->
<header class="et-header header-layout1">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container-fluid">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="#">
                                <img width="50" src="{{ asset('assets/img/logo-basic.png') }}" alt="ironCon" />
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-xl-inline-block">
                            <ul>
                                <li class="menu-item-has-children">
                                <li><a class="active" href="{{ route('home') }}">صفحه اصلی </a>
                                </li>
                                </li>
                                <li><a href="{{ route('home.about') }}">درباره ما </a></li>
                                <li><a href="{{ route('home.services') }}">خدمات</a></li>
                                <li><a href="{{ route('home.project') }}"> پروژه ها </a></li>
                                <li><a href="{{ route('home.contactUs') }}">تماس با ما</a></li>
                            </ul>
                        </nav>
                        <div class="header-button d-flex d-xl-none"> <button type="button"
                                class="et-menu-toggle sidebar-btn"> <span class="line"></span> <span
                                    class="line"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <button type="button" class="simple-icon sideMenuInfo sidebar-btn"> <span
                                    class="line"></span> <span class="line"></span>
                            </button>
                            <select name="language" id="lang"
                                style="border: none; width: 60px; font-family:arial;">
                                <option value="english">En</option>
                                <option value="farsi">Fa</option>
                            </select>
                            <div class="info-text">
                                <p>مشاوره میخوای؟</p>
                                <h4><a href="tel:02188883995">۰۲۱-۸۸۸۸۳۹۹۵</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
