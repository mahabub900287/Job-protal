<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ asset('') }}img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('') }}img/logo/logo.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a class="{{ Request::routeIs('home') ? 'active' : '' }}"
                                                href="{{ route('home') }}">Home</a></li>
                                        <li><a class="{{ Request::routeIs('all.category') ? 'active' : '' }}"
                                                href="{{ route('all.category') }}">All Category </a></li>
                                        <li><a class="{{ Request::routeIs('all.job') ? 'active' : '' }}"
                                                href="{{ route('all.job') }}">Find a Jobs </a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            @auth
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="{{ route('profile.index') }}"
                                        class="btn head-btn2">{{ Auth::user()->first_name }}
                                        {{ Auth::user()->last_name }}</a>
                                </div>
                            @else
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="{{ route('register') }}" class="btn head-btn1">Registration</a>
                                    <a href="{{ route('login') }}" class="btn head-btn2">Login</a>
                                </div>
                            @endauth
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
