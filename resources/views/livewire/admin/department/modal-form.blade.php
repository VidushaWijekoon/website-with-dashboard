<!-- Add Department Modal -->
<div wire:ignore.self class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Department</h1>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="storeDepartment">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">Deprtment Name</label>
                        <input type="text" wire:model.defer="name" class="form-control form-control-sm">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Deprtment Slug</label>
                        <input type="text" wire:model.defer="slug" class="form-control form-control-sm">
                        @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" wire:model.defer="status"><span class="mx-2 text-info">Checked=Hidden
                            UnChecked=Visible</span>
                        @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Department Modal -->
<div wire:ignore.self class="modal fade" id="editDepartmentModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Department</h1>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>
            <div wire:loading.remove class="">
                <form wire:submit.prevent="updateDepartment">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="">Deprtment Name</label>
                            <input type="text" wire:model.defer="name" class="form-control form-control-sm">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Deprtment Slug</label>
                            <input type="text" wire:model.defer="slug" class="form-control form-control-sm">
                            @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" wire:model.defer="status"><span class="mx-2 text-info">Checked=Hidden
                                UnChecked=Visible</span>
                            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Delete Category Modal -->
<div wire:ignore.self class="modal fade" id="deleteDepartmentModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Remove Department</h1>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div wire:loading class="p-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>
            <div wire:loading.remove class="">
                <form wire:submit.prevent="destroyDepartment">
                    <div class="modal-body">
                        <h6>Are you sure want to delete this department from database?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete Department</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>