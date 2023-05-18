@extends('layouts.admin.app')
@section('title', 'Create Posts')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add post</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ route('posts.index') }}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Post Name</label>
                                <input class="form-control" type="text" name="post_name" placeholder="Post Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Post Slug</label>
                                <input class="form-control" type="text" name="post_slug" placeholder="Post Slug">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Post Images</label>
                        <div>
                            <input class="form-control form-control-sm" type="file" style="min-height: 0px" multiple
                                name="image[]">
                            <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.
                                Maximum 10 images only.</small>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Post Category</label>
                                <select class="select" name="meta_category">
                                    @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Post Description</label>
                        <textarea cols="30" rows="6" class="form-control" placeholder="Post Description"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input type="text" placeholder="Meta Title" data-role="tagsinput" class="form-control"
                                    name="meta_title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Keywords</label>
                                <input type="text" placeholder="Meta Keywords" data-role="tagsinput"
                                    class="form-control" name="meta_keyword">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="display-block">Post Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="post_active" value="option1"
                                checked>
                            <label class="form-check-label" for="post_active">
                                Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="post_inactive"
                                value="option2">
                            <label class="form-check-label" for="post_inactive">
                                Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary btn-sm submit-btn">Publish post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection