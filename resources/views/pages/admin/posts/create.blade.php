@extends('layouts.admin.app')
@section('content')

<!-- general form elements disabled -->
<div class="card card-warning">
    <div class="card-header">
        <h4 class="mt-1">
            Create Post
        </h4>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group mb-3">
                        <label class="mb-1">Post Category <span class="text-danger">*</span></label>
                        <select class="form-select form-select-sm rounded-0" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-3">
                        <label class="mb-1">Post Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm rounded-0" placeholder="Post Title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <label class="mb-1">Post Description <span class="text-danger">*</span></label>
                    <textarea class="form-control rounded-0" rows="4"
                        placeholder="Please enter post details"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <label class="mb-1">File <span class="text-danger">*</span></label>
                    <input type="file" class="form-control form-control-sm rounded-0" placeholder="Post Title">
                    <small class="text-danger">Only accepting pdf file format</small>
                </div>
            </div>

            <hr>
            <div class="">
                <h4>Meta Data</h4>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <div class="form-group">
                        <label class="mb-1">Post Meta Title <span class="text-danger">*</span></label>
                        <select class="form-select form-select-sm rounded-0" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-3">
                        <label class="mb-1">Post Meta Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm rounded-0" placeholder="Post Title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <label class="mb-1">Post Meta Description <span class="text-danger">*</span></label>
                    <textarea class="form-control rounded-0" rows="4"
                        placeholder="Please enter post details"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input rounded-0 text-primary" type="checkbox"
                        style="width: 20px; height: 20px; border: 1px solid green">
                    <label class="form-check-label">Checkbox (Check=Hide, Uncheck=Visible)</label>
                </div>
            </div>

            <div class="">
                <button type="submit" class="btn btn-sm btn-success float-end">Create Post</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection