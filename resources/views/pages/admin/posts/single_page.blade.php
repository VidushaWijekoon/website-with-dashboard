@extends('layouts.admin.app')
@section('title', 'Single Posts')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Post View</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="blog-view">
                    <article class="blog blog-single-post">
                        <h3 class="blog-title text-capitalize">{{ $posts->title }}</h3>
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#."><i class="fa fa-calendar"></i> <span>{{ $posts->created_at
                                                }}</span></a>
                                    </li>
                                    <li><a href="#."><i class="fa fa-user-o"></i> <span>{{
                                                Auth::user()->name}}</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-image">
                            <a href="#.">
                                <img alt="" src="{{ asset('admin/img/blog/blog-01.jpg') }}" class="img-fluid">
                            </a>
                        </div>
                        <div class="blog-content">

                            {{ chunk_split($posts->post_description, 100, "\n")}}
                        </div>
                    </article>

                </div>
            </div>
            <aside class="col-md-4">
                <div class="widget tags-widget">
                    <h5>Category</h5>
                    <ul class="tags">
                        <li><a href="#." class="tag">{{ ucfirst(str_replace('_', ' ', $posts->category)) }}</a></li>

                    </ul>
                </div>
            </aside>
        </div>
    </div>

</div>
@endsection