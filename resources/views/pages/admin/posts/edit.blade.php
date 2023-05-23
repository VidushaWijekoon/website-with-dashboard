@extends('layouts.admin.app')
@section('title', 'Edit Posts')
@section('content')
<div class="page-wrapper">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4 class="page-title">Edit Post </h4>
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
            <form action="{{ url('admin/posts/' . $post->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Post Name</label>
                            <span class="text-danger">*</span>
                            <input class="form-control" type="text" name="name" value="{{ $post->title }}">
                            @error('name') <small class="text-danger"></small> @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Post Slug</label>
                            <span class="text-danger">*</span>
                            <input class="form-control" type="text" name="slug" value="{{ $post->slug }}">
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
                                <option value="{{ $post->category }}" {{ $post->category ==
                                    $post->category ?
                                    'selected' : '' }}>
                                    {{ ucwords(str_replace('_' , ' ', $post->category)) }}
                                </option>
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
                        placeholder="Post Summery">{{ $post->post_summery }}</textarea>
                    @error('post_summery') <small class="text-danger"></small> @enderror
                </div>

                <div class="form-group">
                    <label>Title Image</label>
                    <span class="text-danger">*</span>
                    <div>
                        <input class="form-control form-control-sm" type="file" style="min-height: 0px"
                            name="title_image" accept="image/png, image/jpeg">
                        <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.
                            Maximum 1 images only.</small>
                        <div class="">
                            @if ($post->postTitleImage)
                            <div class="row">
                                @foreach ($post->postTitleImage as $x)
                                <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                    <div class="product-thumbnail">
                                        <img src="{{ asset($x->title_image) }}"
                                            class="img-thumbnail img-fluid me-4 border">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <h5>No Image Found</h5>
                            @endif
                        </div>
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

                        <div class="">
                            @if ($post->postImages)
                            <div class="row">
                                @foreach ($post->postImages as $image)
                                <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                    <div class="product-thumbnail">
                                        <img src="{{ asset($image->image) }}"
                                            class="img-thumbnail img-fluid me-4 border">
                                        <a href="{{ url('admin/posts-img/' . $image->id . '/remove-img') }}"
                                            class="product-remove" title="remove"><i class="fa fa-close"></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <h5>No Image Found</h5>
                            @endif
                        </div>
                        @error('image') <small class="text-danger"></small> @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Post Demo</label>
                    <div>
                        <input class="form-control form-control-sm" type="file" style="min-height: 0px" name="video"
                            accept="video/mp4,video/x-m4v,video/*">
                        <small class="form-text text-muted">Only Allowed mp4. </small>
                        <div class="">

                            @if ($post->postDemoVideo)
                            <div class="row">
                                @foreach ($post->postDemoVideo as $video)
                                <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                    <div class="post-thumbail">
                                        <video class="img-fluid" autoplay loop muted>
                                            <source src="{{ asset($video->video) }}" type="video/mp4" />
                                        </video>

                                        <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <h5>No Image Found</h5>
                            @endif
                        </div>
                        @error('video') <small class="text-danger"></small> @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Upload Thesis</label>
                    <div>
                        <input class="form-control form-control-sm" type="file" style="min-height: 0px" multiple
                            name="document[]" accept="application/pdf, application/vnd.ms-docx">
                        <small class="form-text text-muted">Allowed images: pdf, doc. Maximum 2 files only.</small>
                        <div class="">
                            @if ($post->postDocument)
                            <div class="row">
                                @foreach ($post->postDocument as $document)
                                <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                    <div class="product-thumbnail">
                                        <a href="{{ asset($document->document) }}">{{ asset($document->document) }}
                                        </a>

                                        <a class="product-remove" title="remove"><i class="fa fa-close"></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <h5>No Image Found</h5>
                            @endif
                        </div>
                        @error('document') <small class="text-danger"></small> @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Post Description</label>
                    <span class="text-danger">*</span>
                    <textarea cols="30" rows="6" class="form-control" name="post_description"
                        placeholder="Post Description">{{ $post->post_description }}</textarea>
                    @error('post_description') <small class="text-danger"></small> @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact Number</label>
                            <span class="text-danger">*</span>
                            <input type="text" placeholder="Contact Number" data-role="tagsinput" class="form-control"
                                name="contact_number" value="{{ $post->contact_number }}">
                            @error('contact_number') <small class="text-danger"></small> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact Email</label>
                            <span class="text-danger">*</span>
                            <input type="text" placeholder="Contact Email" data-role="tagsinput" class="form-control"
                                name="contact_email" value="{{ $post->contact_email }}">
                            @error('contact_email') <small class="text-danger"></small> @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Pricing for this project how much need to be expend approximately?">Pricing</label>
                    <span class="text-danger">*</span>
                    <input type="number" placeholder="Project Cost" data-role="tagsinput" class="form-control"
                        name="pricing" value="{{ $post->pricing }}">
                    @error('pricing') <small class="text-danger"></small> @enderror
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
                        <input class="form-check-input" type="radio" name="status" id="post_inactive" value="option2">
                        <label class="form-check-label" for="post_inactive">
                            Inactive
                        </label>
                    </div>
                    @error('status') <small class="text-danger"></small> @enderror
                </div>

                <div class="form-group checkbox">
                    <label>
                        <input type="checkbox" name="conditions"> I have read and agree the Terms & Conditions
                    </label>
                    @error('conditions') <small class="text-danger"></small> @enderror
                </div>

                <div class="m-t-20 text-center mb-5">
                    <button type="submit" class="btn btn-primary btn-sm">Update Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection