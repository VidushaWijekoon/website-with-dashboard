@extends('layouts.frontend.app')
@section('title', 'Single Posts')
@section('content')
<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

                <article class="entry entry-single">

                    <div class="entry-img">
                        <img src="{{ asset('uploads/posts/images/' . $post->image) }}" alt=""
                            style="width: 60px; height: 60px">
                    </div>

                    <h2 class="entry-title">
                        <span class="text-black text-capitalize">{{ $post->title }}</span>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i></li> --}}
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> {{
                                date('d-M-Y',strtotime($post->created_at)) }}</li>

                        </ul>
                    </div>

                    <div class="entry-content">

                        <p>{{ $post->post_description }}</p>

                    </div>

                    <div class="entry-footer">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a href="#">{{ str_replace('_', ' ', $post->category) }}</a></li>
                        </ul>


                    </div>

                </article>
                <!-- End blog entry -->

            </div>
            <!-- End blog entries list -->

            <div class="col-lg-4">

                <div class="sidebar">

                    <h3 class="sidebar-title">Tags</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            <li class="text-black text-capitalize">{{ str_replace('_', ' ', $post->category) }}</li>

                        </ul>
                    </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Single Section -->
@endsection


<style>
    /*--------------------------------------------------------------
    # Blog
    --------------------------------------------------------------*/
    .blog {
        padding: 40px 0 20px 0;
    }

    .blog .entry {
        padding: 30px;
        margin-bottom: 60px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .entry .entry-img {
        max-height: 440px;
        margin: -30px -30px 20px -30px;
        overflow: hidden;
    }

    .blog .entry .entry-title {
        font-size: 28px;
        font-weight: bold;
        padding: 0;
        margin: 0 0 20px 0;
    }

    .blog .entry .entry-title a {
        color: #2b2320;
        transition: 0.3s;
    }

    .blog .entry .entry-title a:hover {
        color: #f03c02;
    }

    .blog .entry .entry-meta {
        margin-bottom: 15px;
        color: #9c847b;
    }

    .blog .entry .entry-meta ul {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        align-items: center;
        padding: 0;
        margin: 0;
    }

    .blog .entry .entry-meta ul li+li {
        padding-left: 20px;
    }

    .blog .entry .entry-meta i {
        font-size: 16px;
        margin-right: 8px;
        line-height: 0;
    }

    .blog .entry .entry-meta a {
        color: #847872;
        font-size: 14px;
        display: inline-block;
        line-height: 1;
    }

    .blog .entry .entry-content p {
        line-height: 24px;
        color: #2b2320;
    }

    .blog .entry .entry-content .read-more {
        -moz-text-align-last: right;
        text-align-last: right;
    }

    .blog .entry .entry-content .read-more a {
        display: inline-block;
        background: #f03c02;
        color: #fff;
        padding: 6px 20px;
        transition: 0.3s;
        font-size: 14px;
        border-radius: 4px;
    }

    .blog .entry .entry-content .read-more a:hover {
        background: #fd490f;
    }

    .blog .entry .entry-content h3 {
        font-size: 22px;
        margin-top: 30px;
        font-weight: bold;
    }

    .blog .entry .entry-content blockquote {
        overflow: hidden;
        background-color: #fafafa;
        padding: 60px;
        position: relative;
        text-align: center;
        margin: 20px 0;
    }

    .blog .entry .entry-content blockquote p {
        color: #4d4643;
        line-height: 1.6;
        margin-bottom: 0;
        font-style: italic;
        font-weight: 500;
        font-size: 22px;
    }

    .blog .entry .entry-content blockquote::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background-color: #2b2320;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .blog .entry .entry-footer {
        padding-top: 10px;
        border-top: 1px solid #e6e6e6;
    }

    .blog .entry .entry-footer i {
        color: #836a61;
        display: inline;
    }

    .blog .entry .entry-footer a {
        color: #3a2f2b;
        transition: 0.3s;
    }

    .blog .entry .entry-footer a:hover {
        color: #f03c02;
    }

    .blog .entry .entry-footer .cats {
        list-style: none;
        display: inline;
        padding: 0 20px 0 0;
        font-size: 14px;
    }

    .blog .entry .entry-footer .cats li {
        display: inline-block;
    }

    .blog .entry .entry-footer .tags {
        list-style: none;
        display: inline;
        padding: 0;
        font-size: 14px;
    }

    .blog .entry .entry-footer .tags li {
        display: inline-block;
    }

    .blog .entry .entry-footer .tags li+li::before {
        padding-right: 6px;
        color: #6c757d;
        content: ",";
    }

    .blog .entry .entry-footer .share {
        font-size: 16px;
    }

    .blog .entry .entry-footer .share i {
        padding-left: 5px;
    }

    .blog .entry-single {
        margin-bottom: 30px;
    }

    .blog .blog-author {
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .blog-author img {
        width: 120px;
        margin-right: 20px;
    }

    .blog .blog-author h4 {
        font-weight: 600;
        font-size: 22px;
        margin-bottom: 0px;
        padding: 0;
        color: #2b2320;
    }

    .blog .blog-author .social-links {
        margin: 0 10px 10px 0;
    }

    .blog .blog-author .social-links a {
        color: rgba(43, 35, 32, 0.5);
        margin-right: 5px;
    }

    .blog .blog-author p {
        font-style: italic;
        color: #bfb9b6;
    }

    .blog .blog-comments {
        margin-bottom: 30px;
    }

    .blog .blog-comments .comments-count {
        font-weight: bold;
    }

    .blog .blog-comments .comment {
        margin-top: 30px;
        position: relative;
    }

    .blog .blog-comments .comment .comment-img {
        margin-right: 14px;
    }

    .blog .blog-comments .comment .comment-img img {
        width: 60px;
    }

    .blog .blog-comments .comment h5 {
        font-size: 16px;
        margin-bottom: 2px;
    }

    .blog .blog-comments .comment h5 a {
        font-weight: bold;
        color: #4d4643;
        transition: 0.3s;
    }

    .blog .blog-comments .comment h5 a:hover {
        color: #f03c02;
    }

    .blog .blog-comments .comment h5 .reply {
        padding-left: 10px;
        color: #2b2320;
    }

    .blog .blog-comments .comment h5 .reply i {
        font-size: 20px;
    }

    .blog .blog-comments .comment time {
        display: block;
        font-size: 14px;
        color: #483b36;
        margin-bottom: 5px;
    }

    .blog .blog-comments .comment.comment-reply {
        padding-left: 40px;
    }

    .blog .blog-comments .reply-form {
        margin-top: 30px;
        padding: 30px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .blog-comments .reply-form h4 {
        font-weight: bold;
        font-size: 22px;
    }

    .blog .blog-comments .reply-form p {
        font-size: 14px;
    }

    .blog .blog-comments .reply-form input {
        border-radius: 4px;
        padding: 10px 10px;
        font-size: 14px;
    }

    .blog .blog-comments .reply-form input:focus {
        box-shadow: none;
        border-color: #fe825a;
    }

    .blog .blog-comments .reply-form textarea {
        border-radius: 4px;
        padding: 10px 10px;
        font-size: 14px;
    }

    .blog .blog-comments .reply-form textarea:focus {
        box-shadow: none;
        border-color: #fe825a;
    }

    .blog .blog-comments .reply-form .form-group {
        margin-bottom: 25px;
    }

    .blog .blog-comments .reply-form .btn-primary {
        border-radius: 4px;
        padding: 10px 20px;
        border: 0;
        background-color: #2b2320;
    }

    .blog .blog-comments .reply-form .btn-primary:hover {
        background-color: #3a2f2b;
    }

    .blog .blog-pagination {
        color: #65534c;
    }

    .blog .blog-pagination ul {
        display: flex;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .blog .blog-pagination li {
        margin: 0 5px;
        transition: 0.3s;
    }

    .blog .blog-pagination li a {
        color: #2b2320;
        padding: 7px 16px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .blog .blog-pagination li.active,
    .blog .blog-pagination li:hover {
        background: #f03c02;
    }

    .blog .blog-pagination li.active a,
    .blog .blog-pagination li:hover a {
        color: #fff;
    }

    .blog .sidebar {
        padding: 30px;
        margin: 0 0 60px 20px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog .sidebar .sidebar-title {
        font-size: 20px;
        font-weight: 700;
        padding: 0 0 0 0;
        margin: 0 0 15px 0;
        color: #2b2320;
        position: relative;
    }

    .blog .sidebar .sidebar-item {
        margin-bottom: 30px;
    }

    .blog .sidebar .search-form form {
        background: #fff;
        border: 1px solid #ddd;
        padding: 3px 10px;
        position: relative;
    }

    .blog .sidebar .search-form form input[type=text] {
        border: 0;
        padding: 4px;
        border-radius: 4px;
        width: calc(100% - 40px);
    }

    .blog .sidebar .search-form form button {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        border: 0;
        background: none;
        font-size: 16px;
        padding: 0 15px;
        margin: -1px;
        background: #f03c02;
        color: #fff;
        transition: 0.3s;
        border-radius: 0 4px 4px 0;
        line-height: 0;
    }

    .blog .sidebar .search-form form button i {
        line-height: 0;
    }

    .blog .sidebar .search-form form button:hover {
        background: #fd4509;
    }

    .blog .sidebar .categories ul {
        list-style: none;
        padding: 0;
    }

    .blog .sidebar .categories ul li+li {
        padding-top: 10px;
    }

    .blog .sidebar .categories ul a {
        color: #2b2320;
        transition: 0.3s;
    }

    .blog .sidebar .categories ul a:hover {
        color: #f03c02;
    }

    .blog .sidebar .categories ul a span {
        padding-left: 5px;
        color: #b4aca8;
        font-size: 14px;
    }

    .blog .sidebar .recent-posts .post-item+.post-item {
        margin-top: 15px;
    }

    .blog .sidebar .recent-posts img {
        width: 80px;
        float: left;
    }

    .blog .sidebar .recent-posts h4 {
        font-size: 15px;
        margin-left: 95px;
        font-weight: bold;
    }

    .blog .sidebar .recent-posts h4 a {
        color: #2b2320;
        transition: 0.3s;
    }

    .blog .sidebar .recent-posts h4 a:hover {
        color: #f03c02;
    }

    .blog .sidebar .recent-posts time {
        display: block;
        margin-left: 95px;
        font-style: italic;
        font-size: 14px;
        color: #b4aca8;
    }

    .blog .sidebar .tags {
        margin-bottom: -10px;
    }

    .blog .sidebar .tags ul {
        list-style: none;
        padding: 0;
    }

    .blog .sidebar .tags ul li {
        display: inline-block;
    }

    .blog .sidebar .tags ul a {
        color: #745f56;
        font-size: 14px;
        padding: 6px 14px;
        margin: 0 6px 8px 0;
        border: 1px solid #ded5d2;
        display: inline-block;
        transition: 0.3s;
    }

    .blog .sidebar .tags ul a:hover {
        color: #fff;
        border: 1px solid #f03c02;
        background: #f03c02;
    }

    .blog .sidebar .tags ul a span {
        padding-left: 5px;
        color: #c8bab5;
        font-size: 14px;
    }
</style>