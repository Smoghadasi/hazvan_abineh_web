<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <span class="app-brand-logo demo mt-2" style="align-self: center">
        <a href="/">
            <img src="{{ asset('assets/img/logo-basic.png') }}" width="70" height="70" />
        </a>
    </span>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">داشبورد</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('dashboard/service*') ? 'active' : '' }}">
            <a href="{{ route('admin.service.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">خدمات</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('dashboard/project*') ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">پروژه</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.project.index') }}" class="menu-link">
                        <div data-i18n="Account">لیست پروژه</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.category-project.index') }}" class="menu-link">
                        <div data-i18n="Notifications">دسته بندی پروژه</div>
                    </a>
                </li>

            </ul>
        </li>

        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">امکانات</span></li>
        <li class="menu-item {{ request()->is('dashboard/team*') ? 'active' : '' }}">
            <a href="{{ route('admin.team.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Analytics">اعضای تیم</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('dashboard/contact-us*') ? 'active' : '' }}">
            <a href="{{ route('admin.contactUs.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">تماس با ما</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('dashboard/opinion*') ? 'active' : '' }}">
            <a href="{{ route('admin.opinion.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">نظرات برتر</div>
            </a>
        </li>

    </ul>
</aside>
