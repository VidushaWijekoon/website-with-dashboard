@section('title', 'Category')
<div class="">
    @include('livewire.admin.category.modal-form')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-5 col-5">
                    <h4 class="page-title">Categories</h4>
                </div>
                <div class="col-sm-7 col-7 text-right m-b-30">
                    <a href="#" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal"
                        data-bs-target="#addCategoryModal">
                        <i class="fa fa-plus"></i>
                        Add Category
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover custom-table mb-0 datatable">
                            <thead>
                                <tr class="text-white" style="background: #009efb">
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                <tr>
                                    <td>#</td>
                                    <td class="text-uppercase">{{ $category->name }}</td>
                                    <td class="text-uppercase">{{ $category->slug }}</td>
                                    <td>
                                        @if ($category->status == '0')
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
                                                    wire:click="editCategory({{ $category->id }})"
                                                    data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                                    <i class="fa fa-pencil m-r-5"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#"
                                                    wire:click="deleteCategory({{ $category->id }})"
                                                    data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                                    <i class="fa fa-trash-o m-r-5"></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex float-end mt-2">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    window.addEventListener('close-modal', event => {
        $('#addCategoryModal').modal('hide');
        $('#editCategoryModal').modal('hide');
        $('#deleteCategoryModal').modal('hide');
    });
</script>