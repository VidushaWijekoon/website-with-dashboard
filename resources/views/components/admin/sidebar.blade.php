<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-envelopes-bulk"></i><span> Posts</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('posts.index') }}">Posts</a></li>
                        <li><a href="{{ route('posts.create') }}">Add Posts</a></li>
                    </ul>
                </li>

                <li class="menu-title">Projects</li>

                @if (Auth::user()->role_as == '1')
                    <li class="submenu">
                        <a href="#"><i class="fa-solid fa-diagram-project"></i><span>Web Projects</span>
                            <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{ route('posts.index') }}">Projects</a></li>
                            <li><a href="{{ route('posts.create') }}">Add Projects</a></li>
                        </ul>
                    </li>
                @endif
               
                @if (Auth::user()->role_as == '1')
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-diagram-project"></i><span>Software Projects</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('posts.index') }}">Projects</a></li>
                        <li><a href="{{ route('posts.create') }}">Add Projects</a></li>
                    </ul>
                </li>
                @endif  

                @if (Auth::user()->role_as == '1')
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-diagram-project"></i><span>Digital Projects</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('posts.index') }}">Projects</a></li>
                        <li><a href="{{ route('posts.create') }}">Add Projects</a></li>
                    </ul>
                </li>
                @endif

                @if (Auth::user()->role_as == '1')
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-diagram-project"></i><span>Graphic Projects</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('posts.index') }}">Projects</a></li>
                        <li><a href="{{ route('posts.create') }}">Add Projects</a></li>
                    </ul>
                </li>
                @endif

                @if (Auth::user()->role_as == '1')
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-diagram-project"></i><span>Science Projects</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('posts.index') }}">Projects</a></li>
                        <li><a href="{{ route('posts.create') }}">Add Projects</a></li>
                    </ul>
                </li>
                @endif

                @if (Auth::user()->role_as == '1')
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-diagram-project"></i><span>Technical Projects</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('posts.index') }}">Projects</a></li>
                        <li><a href="{{ route('posts.create') }}">Add Projects</a></li>
                    </ul>
                </li>
                @endif

                @if (Auth::user()->role_as == '1')
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-diagram-project"></i><span>Events Projects</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('posts.index') }}">Projects</a></li>
                        <li><a href="{{ route('posts.create') }}">Add Projects</a></li>
                    </ul>
                </li>
                @endif  

                <li class="menu-title">Extras</li>

                <li>
                    <a href="{{ route('rtech.index') }}"><i class="fa fa-home"></i> <span>Homepage</span></a>
                </li>

                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i><span>{{ __('Logout') }}</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>

            </ul>
        </div>
    </div>
</div>