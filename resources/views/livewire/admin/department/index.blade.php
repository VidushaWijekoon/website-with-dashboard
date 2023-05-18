<div class="">
    @include('livewire.admin.department.modal-form')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-5 col-5">
                    <h4 class="page-title">Departments</h4>
                </div>
                <div class="col-sm-7 col-7 text-right m-b-30">
                    <a href="#" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal"
                        data-bs-target="#addDepartmentModal">
                        <i class="fa fa-plus"></i>
                        Add Department
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Department Name</th>
                                    <th>Department Slug</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($departments as $department)
                                <tr>
                                    <td>#</td>
                                    <td class="text-uppercase">{{ $department->name }}</td>
                                    <td class="text-uppercase">{{ $department->slug }}</td>
                                    <td>
                                        @if ($department->status == '0')
                                        <span class="custom-badge status-green">Active</span>
                                        @else
                                        <span class="custom-badge status-red">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"
                                                    wire:click="editDepartment({{ $department->id }})"
                                                    data-bs-toggle="modal" data-bs-target="#editDepartmentModal">
                                                    <i class="fa fa-pencil m-r-5"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#"
                                                    wire:click="deleteDepartment({{ $department->id }})"
                                                    data-bs-toggle="modal" data-bs-target="#deleteDepartmentModal">
                                                    <i class="fa fa-trash-o m-r-5"></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <span>No Data Found</span>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex float-end mt-2">
                            {{ $departments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('close-modal', event => {
        $('#addDepartmentModal').modal('hide');
        $('#editDepartmentModal').modal('hide');
        $('#deleteDepartmentModal').modal('hide');
    });
</script>