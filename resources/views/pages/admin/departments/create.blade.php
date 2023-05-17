@extends('layouts.admin.app')
@section('title', 'Create Department')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="card-box">
            <h4 class="card-title">Category</h4>
            <form action="#">

                <div class="form-group row">
                    <label class="col-form-label col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" placeholder="Category Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-md-2">Slug</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" placeholder="Category Slug">
                    </div>
                </div>

                <div class="form-group">
                    <label class="display-block">Category Update</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="blog_active" value="option1"
                            checked>
                        <label class="form-check-label" for="blog_active">
                            Active
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="blog_inactive" value="option2">
                        <label class="form-check-label" for="blog_inactive">
                            Inactive
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection