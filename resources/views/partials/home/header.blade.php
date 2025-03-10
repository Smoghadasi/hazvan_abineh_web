<!-- Header Section S T A R T -->
<header class="et-header header-layout1">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container-fluid">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="/">
                                <img width="50" src="{{ asset('assets/img/logo-basic_4.png') }}" alt="هزوان ابنیه" />
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-xl-inline-block">
                            <ul>
                                <li class="menu-item-has-children">
                                    <li><a href="{{ route('home') }}">صفحه اصلی </a></li>
                                </li>
                                <li><a href="{{ route('home.about') }}">درباره ما </a></li>
                                <li><a href="{{ route('home.service.index') }}">خدمات</a></li>
                                <li><a href="{{ route('home.project') }}"> پروژه ها </a></li>
                                <li><a href="{{ route('home.contactUs.index') }}">تماس با ما</a></li>
                                {{-- @guest()
                                    <li><a href="{{ route('login') }}">ورود به سیستم</a></li>
                                @else
                                    <li><a href="{{ route('admin.home') }}">ورود به پنل ادمین</a></li>
                                @endguest --}}
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
                            {{-- <button type="button" class="simple-icon sideMenuInfo sidebar-btn"> <span
                                    class="line"></span> <span class="line"></span>
                            </button> --}}
                            <select name="language" id="lang"
                                style="border: none; font-family:arial;">
                                <option selected value="english">انگلیسی</option>
                                <option value="farsi">فارسی</option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
