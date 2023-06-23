@extends('layouts.admin.app')
@section('title', 'Create Posts')
@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Add Post </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                <div class="">{{ $error }}</div>
                @endforeach
            </div>
            @endif
            <form action="{{ route('posts.index') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Post Title</label>
                            <span class="text-danger">*</span>
                            <input class="form-control" type="text" name="title" placeholder="Post Title">
                            @error('name') <small class="text-danger"></small> @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Post Slug</label>
                            <span class="text-danger">*</span>
                            <input class="form-control" type="text" name="slug" placeholder="Post Slug">
                            @error('slug') <small class="text-danger"></small> @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Post Category</label>
                            <span class="text-danger">*</span>
                            <select class="form-control form-select" name="category">
                                <option selected="">Please Select Category</option>
                                <option value="physics">Physics</option>
                                <option value="chemistry">Chemistry</option>
                                <option value="biology">Biology</option>
                                <option value="astronomy">Astronomy</option>
                                <option value="computer_science">Computer Science</option>
                                <option value="information_technology">Information Technology</option>
                                <option value="engineering">Engineering</option>
                                <option value="mathematics">Mathematics</option>
                                <option value="materials_science">Materials Science</option>
                                <option value="environmental_science">Environmental Science</option>
                                <option value="medicine">Medicine</option>
                                <option value="neuroscience">Neuroscience</option>
                                <option value="robotis">Robotics</option>
                                <option value="artificial_intelligence">Artificial Intelligence</option>
                                <option value="nanotechnology">Nanotechnology</option>
                                <option value="biotechnology">Biotechnology</option>
                                <option value="energy">Energy</option>
                                <option value="genetics">Genetics</option>
                                <option value="space_exploration">Space Exploration</option>
                            </select>
                            @error('category') <small class="text-danger"></small> @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Post Summery</label>
                    <span class="text-danger">*</span>
                    <textarea cols="30" rows="3" class="form-control" name="post_summery"
                        placeholder="Post Summery"></textarea>
                    <small class="form-text text-muted">Word Limit 50</small>
                    @error('post_summery') <small class="text-danger"></small> @enderror
                </div>

                <div class="form-group">
                    <label>Title Image</label>
                    <span class="text-danger">*</span>
                    <div>
                        <input class="form-control form-control-sm" type="file" style="min-height: 0px" multiple
                            name="title_image" accept="image/png, image/jpeg">
                        <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.
                            Maximum 1 images only.</small>
                        @error('title_image') <small class="text-danger"></small> @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Post Images</label>
                    <span class="text-danger">*</span>
                    <div>
                        <input class="form-control form-control-sm" type="file" style="min-height: 0px" multiple
                            name="image[]" accept="image/png, image/jpeg">
                        <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.
                            Maximum 5 images only.</small>
                        @error('image') <small class="text-danger"></small> @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Post Demo</label>
                    <div>
                        <input class="form-control form-control-sm" type="file" style="min-height: 0px" name="video"
                            accept="video/mp4,video/x-m4v,video/*">
                        <small class="form-text text-muted">Only Allowed mp4. </small>
                        @error('video') <small class="text-danger"></small> @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Upload Thesis</label>
                    <div>
                        <input class="form-control form-control-sm" type="file" style="min-height: 0px" multiple
                            name="document[]" accept="application/pdf, application/vnd.ms-docx">
                        <small class="form-text text-muted">Allowed images: pdf, doc. Maximum 2 files only.</small>
                        @error('document') <small class="text-danger"></small> @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Post Description</label>
                    <span class="text-danger">*</span>
                    <textarea cols="30" rows="6" class="form-control" name="post_description"
                        placeholder="Post Description"></textarea>
                    @error('post_description') <small class="text-danger"></small> @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact Number</label>
                            <span class="text-danger">*</span>
                            <input type="text" placeholder="Contact Number" data-role="tagsinput" class="form-control"
                                name="contact_number">
                            @error('contact_number') <small class="text-danger"></small> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact Email</label>
                            <span class="text-danger">*</span>
                            <input type="text" placeholder="Contact Email" data-role="tagsinput" class="form-control"
                                name="contact_email">
                            @error('contact_email') <small class="text-danger"></small> @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Pricing for this project how much need to be expend approximately?">Pricing</label>
                    <span class="text-danger">*</span>
                    <input type="number" placeholder="Project Cost" data-role="tagsinput" class="form-control"
                        name="pricing">
                    @error('pricing') <small class="text-danger"></small> @enderror
                </div>

                <div class="form-group">
                    <label class="display-block">Post Status</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="post_status" id="post_active" value="1"
                            checked>
                        <label class="form-check-label" for="post_active">
                            Active
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="post_status" id="post_inactive" value="0">
                        <label class="form-check-label" for="post_inactive">
                            Inactive
                        </label>
                    </div>
                    @error('status') <small class="text-danger"></small> @enderror
                </div>

                <div class="form-group checkbox">
                    <label>
                        <input type="checkbox" name="conditions" class="mx-2">I have read and agree the <a
                            href="{{ route('term_and_condtions.index') }}" style="text-decoration: none"> Terms &
                            Conditions</a>
                    </label>
                    @error('conditions') <small class="text-danger"></small> @enderror
                </div>

                <div class="m-t-20 text-center mb-5">
                    <button type="submit" class="btn btn-primary btn-sm">Publish Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection