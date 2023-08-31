<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand d-flex justify-content-center" href="{{ url('admin/dashboard') }}">
            <img src="{{ asset('images/rtlogolight.png') }}" alt="RTech" width="100">
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Pages</li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ url('admin/dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#hrm" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="users"></i>
                    <span class="align-middle">HRM</span>
                </a>
                <ul id="hrm" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('admin/hrm') }}">Document Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Payroll Management</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#sales" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="git-branch"></i>
                    <span class="align-middle">Sales</span>
                </a>
                <ul id="sales" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('admin/sales') }}">Sales</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Customer Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Appointment Scheduling</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Target Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Quotation Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Opportunity Management</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Sales Estimation</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Sales Informations</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Campaign Informations</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Reporting and Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a href="#accounts" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="briefcase"></i>
                    <span class="align-middle">Acconts</span>
                </a>
                <ul id="accounts" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('admin/accounts') }}">Accounts</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Invocing</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Account Payable</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Account Receivable</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Payments</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Reporting and Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-header">Others</li>


            <li class="sidebar-item">
                <a href="#projects" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="box"></i>
                    <span class="align-middle">Projects</span>
                </a>
                <ul id="projects" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('admin/projects') }}">Projects</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Web Development</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Software Development</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Graphic Design</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Social Media Marketing</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Interior Design</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Science & Technology</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Technical Services</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Event Management</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="tables-bootstrap.html">
                    <i class="align-middle" data-feather="filter"></i>
                    <span class="align-middle">Science & Technology</span>
                </a>
            </li>

            <li class="sidebar-header">Users & Authentications</li>

            <li class="sidebar-item">
                <a href="#users" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="user"></i>
                    <span class="align-middle">Users</span>
                </a>
                <ul id="users" class="sidebar-dropdown list-unstyled collapse" data-parent="#sidebar">

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Create New User</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ url('admin/users') }}">Disciplinary List</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="settings"></i>
                    <span class="align-middle">Settings</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/') }}">
                    <i class="align-middle" data-feather="home"></i>
                    <span class="align-middle">Frontend</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
