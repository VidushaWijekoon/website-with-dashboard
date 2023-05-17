@extends('layouts.admin.app')
@section('title', 'Employees')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Employee</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{ route('employee.create-employee') }}" class="btn btn-primary float-end btn-sm"><i
                        class="fa fa-plus"></i>
                    Add Employee</a>
            </div>
        </div>
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <label class="focus-label">Employee ID</label>
                    <input type="text" class="form-control floating">
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <label class="focus-label">Employee Name</label>
                    <input type="text" class="form-control floating">
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus select-focus">
                    <label class="focus-label">Role</label>
                    <select class="select floating">
                        <option>Select Role</option>
                        <option>Nurse</option>
                        <option>Pharmacist</option>
                        <option>Laboratorist</option>
                        <option>Accountant</option>
                        <option>Receptionist</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#" class="btn btn-success btn-block"> Search </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover custom-table">
                        <thead>
                            <tr>
                                <th style="min-width:200px;">Name</th>
                                <th>Employee ID</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th style="min-width: 110px;">Join Date</th>
                                <th>Role</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img width="28" height="28" src="{{ asset('admin/img/user.jpg') }}"
                                        class="rounded-circle" alt="">
                                    <h2>Albina Simonis</h2>
                                </td>
                                <td>NS-0001</td>
                                <td><a href="http://cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="fb9a979992959a88929694959288bb9e839a968b979ed5989496">[email&#160;protected]</a>
                                </td>
                                <td>828-634-2744</td>
                                <td>7 May 2015</td>
                                <td>
                                    <span class="custom-badge status-green">Nurse</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('employee.attendance') }}">
                                                <i class="fa fa-list m-r-5"></i>View Attendance</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-pencil m-r-5"></i> Attendance</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="28" height="28" src="{{ asset('admin/img/user.jpg') }}"
                                        class="rounded-circle" alt="">
                                    <h2>Cristina Groves</h2>
                                </td>
                                <td>DR-0001</td>
                                <td><a href="http://cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="0665746f75726f686761746970637546637e676b766a632865696b">[email&#160;protected]</a>
                                </td>
                                <td>928-344-5176</td>
                                <td>1 Jan 2013</td>
                                <td>
                                    <span class="custom-badge status-blue">Doctor</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('employee.attendance') }}">
                                                <i class="fa fa-list m-r-5"></i>View Attendance</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-pencil m-r-5"></i> Attendance</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="28" height="28" src="{{ asset('admin/img/user.jpg') }}"
                                        class="rounded-circle" alt="">
                                    <h2>Mary Mericle</h2>
                                </td>
                                <td>SF-0003</td>
                                <td><a href="http://cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="731e12010a1e16011a101f1633160b121e031f165d101c1e">[email&#160;protected]</a>
                                </td>
                                <td>603-831-4983</td>
                                <td>27 Dec 2017</td>
                                <td>
                                    <span class="custom-badge status-grey">Accountant</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('employee.attendance') }}">
                                                <i class="fa fa-list m-r-5"></i>View Attendance</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-pencil m-r-5"></i> Attendance</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="28" height="28" src="{{ asset('admin/img/user.jpg') }}"
                                        class="rounded-circle" alt="">
                                    <h2>Haylie Feeney</h2>
                                </td>
                                <td>SF-0002</td>
                                <td><a href="http://cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="9ff7fee6f3f6faf9fafaf1fae6dffae7fef2eff3fab1fcf0f2">[email&#160;protected]</a>
                                </td>
                                <td>616-774-4962</td>
                                <td>21 Apr 2017</td>
                                <td>
                                    <span class="custom-badge status-grey">Laboratorist</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('employee.attendance') }}">
                                                <i class="fa fa-list m-r-5"></i>View Attendance</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-pencil m-r-5"></i> Attendance</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="28" height="28" src="{{ asset('admin/img/user.jpg') }}"
                                        class="rounded-circle" alt="">
                                    <h2>Zoe Butler</h2>
                                </td>
                                <td>SF-0001</td>
                                <td><a href="http://cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="d7adb8b2b5a2a3bbb2a597b2afb6baa7bbb2f9b4b8ba">[email&#160;protected]</a>
                                </td>
                                <td>444-555-9999</td>
                                <td>19 May 2012</td>
                                <td>
                                    <span class="custom-badge status-grey">Pharmacist</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('employee.attendance') }}">
                                                <i class="fa fa-list m-r-5"></i>View Attendance</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-pencil m-r-5"></i> Attendance</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="delete_employee" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="assets/img/sent.png" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Employee?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection