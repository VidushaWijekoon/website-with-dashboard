<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="fa-regular fa-envelope d-flex align-items-center ms-4">
                <span>
                    <a href="mailto:info@rtechglobal.ae">info@rtechglobal.ae</a>
                </span>
            </i>
            <i class="fa-solid fa-phone-volume d-flex align-items-center ms-4">
                <span>
                    <a href="tel:+971529843844">+971 52 984 3844</a>
                </span>
            </i>


            <i class="fa-solid fa-map-location d-flex align-items-center ms-4">
                <span>
                    <a href="http://maps.google.com/?q=1200 Crystal Building - Sheikh Khalifa Bin Zayed Street - Dubai"
                        target="_blank">
                        M26, Crystal Building, Dubai,
                        UAE
                    </a>
                </span>
            </i>

        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://www.facebook.com/rtechuae" aria-label="facebook" class="facebook" target="_blank"><i
                    class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com/Rtechuae" aria-label="twitter" class="twitter" target="_blank"><i
                    class="fa-brands fa-twitter"></i></a>
            <a href="https://www.pinterest.com/rtechuae" aria-label="pinterest" class="pinterest" target="_blank"><i
                    class="fa-brands fa-pinterest-p"></i></a>
            <a href="https://www.linkedin.com/in/rtechuae" aria-label="linkedin" class="linkedin" target="_blank"><i
                    class="bi bi-linkedin"></i></i></a>
            <a href="https://www.instagram.com/rtechuae" aria-label="instagram" class="instagram" target="_blank"><i
                    class="bi bi-instagram"></i></a>
            <a href="https://www.tiktok.com/@rtechuae" aria-label="tiktok" class="tiktok" target="_blank"><i
                    class="bi bi-tiktok"></i></a>
            <a href="https://www.youtube.com/@rtechuae" aria-label="youtube" class="youtube" target="_blank"><i
                    class="bi bi-youtube"></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1>
                <a href="{{ route('rtech.index') }}">
                    <img src="{{ asset('rtech/images/logortbig.png') }}" alt="rtech company logo" class="img-fluid">
                </a>
            </h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="{{ '/' == request()->path() ? 'active' : '' }}" href="{{ route('rtech.index') }}">Home</a>
                </li>


                <li class="dropdown"><a href="#"><span>Scince & Technology</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href=" {{ route('science_technology.index') }}"
                                class="nav-link {{ 'science_technology' == request()->path() ? 'active' : '' }}">Science
                                &
                                Technology</a>
                        </li>
                        <li class="dropdown"><a href="#"><span>Information Technology</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li>
                                    <a href=" {{ route('web_development.index') }}"
                                        class="nav-link {{ 'web_development' == request()->path() ? 'active' : '' }}">
                                        Web Development</a>
                                </li>
                                <li>
                                    <a href=" {{ route('software_development.index') }}"
                                        class="nav-link {{ 'software_development' == request()->path() ? 'active' : '' }}">Software
                                        Development</a>
                                </li>
                                <li>
                                    <a href=" {{ route('graphic_design.index') }}"
                                        class="nav-link {{ 'graphic_design' == request()->path() ? 'active' : '' }}">Graphic
                                        Design</a>
                                </li>
                                <li>
                                    <a href=" {{ route('digital_marketing.index') }}"
                                        class="nav-link {{ 'digital_marketing' == request()->path() ? 'active' : '' }}">Digital
                                        Marketing</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('technical_services.index') }}"
                        class="nav-link {{ 'technical_services' == request()->path() ? 'active' : '' }}">Technical
                        Services</a>
                </li>
                <li>
                    <a href="{{ route('event_management.index') }}"
                        class="nav-link {{ 'event_management' == request()->path() ? 'active' : '' }}">Event
                        Management
                    </a>
                </li>
                {{-- <li><a href="#">Blog</a></li> --}}
                <span class="">
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">{{ __('Join') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a href="{{ route('dashboard.index') }}">
                                Dashboard
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </span>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->