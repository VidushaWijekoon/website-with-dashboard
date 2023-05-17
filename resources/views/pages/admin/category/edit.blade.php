@extends('layouts.admin.app')
@section('title', 'Edit Category')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Edit Category</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="card-title">Edit Category Form</h4>
                    <form action="{{ url('admin/category/'.$category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Category Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="category_name"
                                    value="{{ $category->category_name }}">
                            </div>
                            @error('category_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Category Slug</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="category_slug"
                                    value="{{ $category->category_slug }}">
                            </div>
                            @error('department_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        @if ($category->status == 1)
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
                        @endif

                        @if ($category->status == 0)
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Status</label>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="blog_active"
                                        value="1" >
                                    <label class="form-check-label" for="blog_active">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="blog_inactive"
                                        value="0" checked>
                                    <label class="form-check-label" for="blog_inactive">
                                        Inactive
                                    </label>
                                </div>
                            </div>
                        </div>
                        @endif

                        <button type="submit" class="btn btn-sm btn-primary">Edit Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection