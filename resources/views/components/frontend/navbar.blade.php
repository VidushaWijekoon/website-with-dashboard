<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/rtlogolight.png') }}" alt="" class="img-fluid">
            </a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown">
                    <a href="#"><span>Information Technology</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('web-development') }}"
                                class="{{ 'web-development' == request()->path() ? 'active' : '' }}">Web
                                Development</a>
                        </li>
                        <li>
                            <a href="{{ url('software-development') }}"
                                class="{{ 'software-development' == request()->path() ? 'active' : '' }}">Software
                                Development</a>
                        </li>
                        <li>
                            <a href="{{ url('graphic-design') }}"
                                class="{{ 'graphic-design' == request()->path() ? 'active' : '' }}">Graphic
                                Design</a>
                        </li>
                        <li>
                            <a href="{{ url('social-media-marketing') }}"
                                class="{{ 'social-media-marketing' == request()->path() ? 'active' : '' }}">Socail Media
                                Marketing</a>
                        </li>
                        <li>
                            <a href="{{ url('interior-design') }}"
                                class="{{ 'interior-design' == request()->path() ? 'active' : '' }}">Interior
                                Design</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('technical-services') }}"
                        class="{{ 'technical-services' == request()->path() ? 'active' : '' }}">Technical Services</a>
                </li>
                <li>
                    <a href="{{ url('event-management') }}"
                        class="{{ 'event-management' == request()->path() ? 'active' : '' }}">Event Management</a>
                </li>
                <li>
                    <a href="{{ url('science-technology') }}"
                        class="{{ 'science-technology' == request()->path() ? 'active' : '' }}">Science &
                        Technology</a>
                </li>
                <li>
                    <a href="{{ url('pricing') }}"
                        class="{{ 'pricing' == request()->path() ? 'active' : '' }}">Pricing</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
