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
        <form action="{{ route('posts.index') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group mb-3">
                        <label class="mb-1">Select Category</label>
                        <select name="category_id" class="form-select form-control form-select-sm rounded-0">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-3">
                        <label class="mb-1">Post Title <span class="text-danger">*</span></label>
                        <input type="text" name="post_title" class="form-control form-control-sm rounded-0"
                            placeholder="Post Title">
                        @error('post_title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <label class="mb-1">Post Description <span class="text-danger">*</span></label>
                    <textarea class="form-control rounded-0" rows="4" name="post_description"
                        placeholder="Please enter post details"></textarea>
                    @error('post_description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <label class="mb-1">File <span class="text-danger">*</span></label>
                    <input type="file" name="post_file" class="form-control form-control-sm rounded-0"
                        placeholder="Post Title">
                    @error('file') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <hr>
            <div class="">
                <h4>Meta Data</h4>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <div class="form-group">
                        <label class="mb-1">Select Meta Category</label>
                        <select name="meta_category_id" class="form-select form-control form-select-sm rounded-0">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('meta_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-3">
                        <label class="mb-1">Post Meta Title <span class="text-danger">*</span></label>
                        <input type="text" name="post_meta_title" class="form-control form-control-sm rounded-0"
                            placeholder="Post Title">
                        @error('post_meta_title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb-3">
                    <label class="mb-1">Post Meta Description <span class="text-danger">*</span></label>
                    <textarea class="form-control rounded-0" rows="4" name="post_meta_description"
                        placeholder="Please enter post details"></textarea>
                    @error('post_meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input rounded-0 text-primary" name="status" type="checkbox"
                        style="width: 20px; height: 20px; border: 1px solid green">
                    <label class="form-check-label">Checkbox (Check=Hide, Uncheck=Visible)</label>
                    @error('status') <small class="text-danger">{{ $message }}</small> @enderror
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