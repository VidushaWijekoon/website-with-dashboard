@extends('layouts.admin.app')
@section('title', 'Create Department')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Create Department</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="card-title">Basic Department Form</h4>
                    <form action="{{ route('department.index') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Department Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="department_name"
                                    placeholder="Department Name">
                                @error('department_name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Department Slug</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="department_slug"
                                    placeholder="Department Slug">
                                @error('department_slug')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Status</label>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="blog_active"
                                        value="1" checked>
                                    <label class="form-check-label" for="blog_active">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="blog_inactive"
                                        value="0">
                                    <label class="form-check-label" for="blog_inactive">
                                        Inactive
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Create Department</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection