<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                </li>

                <li>
                    <a href="{{ route('department.index') }}">
                        <i class="fa fa-hospital-o"></i>
                        <span>Departments</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#">Quotations</a></li>
                        <li><a href="#">Invoices</a></li>
                        <li><a href="#">Payments</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('employee.dashboard') }}">Employees List</a></li>
                        <li><a href="{{ route('employee.leave') }}">Leaves</a></li>
                        <li><a href="{{ route('employee.holidays') }}">Holidays</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="salary.html"> Employee Salary </a></li>
                        <li><a href="salary-view.html"> Payslip </a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('category.index') }}">
                        <i class="fa fa-flag-o"></i>
                        <span>Categories</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-envelopes-bulk"></i><span> Posts</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('posts.index') }}">Posts</a></li>
                        <li><a href="{{ route('posts.single-post') }}">Posts View</a></li>
                        <li><a href="{{ route('posts.create') }}">Add Posts</a></li>
                        <li><a href="{{ route('posts.edit') }}">Edit Posts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('client-messages.index') }}">
                        <i class="fa-regular fa-envelope"></i>
                        <span>Clients Messages</span>
                    </a>
                </li>


                <li class="menu-title">Extras</li>

                <li>
                    <a href="{{ route('rtech.index') }}"><i class="fa fa-home"></i> <span>Homepage</span></a>
                </li>

                <li>
                    <a href="{{ route('register') }}">
                        <i class="fa-solid fa-arrows-to-circle"></i>
                        <span>Register</span>
                    </a>
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