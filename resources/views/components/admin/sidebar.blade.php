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
                    <a href="#"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#">Employees List</a></li>
                        <li><a href="#">Leaves</a></li>
                        <li><a href="#">Holidays</a></li>
                        <li><a href="#">Attendance</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#">Invoices</a></li>
                        <li><a href="#">Payments</a></li>
                        <li><a href="#">Expenses</a></li>
                        <li><a href="#">Taxes</a></li>
                        <li><a href="#">Provident Fund</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="salary.html"> Employee Salary </a></li>
                        <li><a href="salary-view.html"> Payslip </a></li>
                    </ul>
                </li>


                <li class="submenu">
                    <a href="#"><i class="fa fa-envelope"></i> <span> Email</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="compose.html">Compose Mail</a></li>
                        <li><a href="inbox.html">Inbox</a></li>
                        <li><a href="mail-view.html">Mail View</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa-solid fa-envelopes-bulk"></i><span> Posts</span>
                        <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#">Posts</a></li>
                        <li><a href="#">Posts View</a></li>
                        <li><a href="#">Add Posts</a></li>
                        <li><a href="#">Edit Posts</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#"> Expense Report </a></li>
                        <li><a href="#"> Invoice Report </a></li>
                    </ul>
                </li>


                <li class="menu-title">Extras</li>

                <li>
                    <a href="#"><i class="fa fa-home"></i> <span>Homepage</span></a>
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