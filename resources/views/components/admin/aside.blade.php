<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="fa-solid fa-grip"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-envelopes-bulk"></i><span>Posts</span><i
                    class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="posts" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle"></i><span>Create Posts</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle"></i><span>View Posts</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="{{ route('contact_us_messages') }}" class="nav-link collapsed">
                <i class="fa-solid fa-message"></i>
                <span>Client Messages</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#clients" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-users"></i><span>Clients</span><i class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="clients" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="fa-regular fa-circle"></i><span>View Clients</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
                <i class="fa-solid fa-users-gear"></i><span>Users</span><i class="fa-solid fa-chevron-down ms-auto"></i>
            </a>
            <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="fa-regular fa-circle"></i><span>View Users</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Icons Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('rtech.index') }}"><i class="fa-solid fa-home"></i>{{
                __('Home Page') }}</a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('register') }}"><i class="fa-solid fa-newspaper"></i>{{
                __('Register') }}</a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-right-to-bracket"></i></i>{{ __('Sign Out') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li><!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->