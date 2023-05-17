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
                                <th>Birthday</th>
                                <th>Resident</th>
                                <th style="min-width: 110px;">Join Date</th>
                                <th>Role</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employee as $item)
                            <tr>
                                <td>
                                    <img width="28" height="28" src="{{ asset('uploads/employee/' . $item->image) }}"
                                        class="rounded-circle" alt="">
                                    <h2 class="text-capitalize">{{ $item->first_name }} {{ $item->last_name }}</h2>
                                </td>
                                <td>EPF-{{ $item->id }}</td>
                                <td>{{ $item->email }}</td>
                                <td>+{{ $item->contact }}</td>
                                <td>{{ $item->birthday }}</td>
                                <td>{{ $item->resident_country }}</td>
                                <td>{{ $item->join_date }}</td>
                                <td>
                                    <span class="custom-badge status-green">{{ $item->department }}</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item"
                                                href="{{ url('admin/employee/' . $item->id . '/edit') }}">
                                                <i class="fa-solid fa-pen-to-square m-r-5"></i>Edit Employee</a>
                                            <a class="dropdown-item" href="{{ route('employee.attendance') }}">
                                                <i class="fa fa-list m-r-5"></i>View Attendance</a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-pencil m-r-5"></i> Attendance</a>
                                            <a class="dropdown-item"
                                                href="{{ url('admin/employee/' . $item->id . '/delete') }}"><i
                                                    class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <span>No data found</span>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex float-end mt-2">
                        {{ $employee->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>