@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Category
                    <a href="{{ route('category.index') }}" class="btn btn-sm btn-warning text-white float-end">
                        Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category/' . $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <div class="form-group mb-3">
                            <label class="mb-1">Category Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{ $category->name }}"
                                class="form-control form-control-sm rounded-0">
                            @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group mb-3">
                            <label class="mb-1">Category Code<span class="text-danger">*</span></label>
                            <input type="text" name="code" value="{{ $category->name }}"
                                class="form-control form-control-sm rounded-0">
                            @error('code') <small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input rounded-0 text-primary" type="checkbox" name="status"
                            style="width: 20px; height: 20px; border: 1px solid green">
                        <label class="form-check-label">Checkbox (Check=Hide, Uncheck=Visible)</label>
                        @error('status') <small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection