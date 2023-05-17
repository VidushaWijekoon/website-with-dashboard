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
                    <form action="#">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Category Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Category Slug</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Category Slug">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Status</label>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="blog_active"
                                        value="option1" checked>
                                    <label class="form-check-label" for="blog_active">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="blog_inactive"
                                        value="option2">
                                    <label class="form-check-label" for="blog_inactive">
                                        Inactive
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Edit Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection