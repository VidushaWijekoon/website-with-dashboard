@extends('layouts.admin.app')
@section('title', 'Posts')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-8 col-4">
                <h4 class="page-title">Posts</h4>
            </div>
            <div class="col-sm-4 col-8 text-right m-b-30">
                <a class="btn btn-primary btn-sm float-end" href="{{ route('posts.create') }}"><i
                        class="fa fa-plus"></i> Add
                    Post</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="{{ route('posts.single-post') }}"><img class="img-fluid"
                                src="{{ asset('admin/img/blog/blog-01.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="{{ route('posts.single-post') }}">Do You Know the ABCs of Health
                                Care?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco sit laboris.</p>
                        <a href="{{ route('posts.single-post') }}" class="read-more"><i
                                class="fa fa-long-arrow-right"></i> Read
                            More</a>
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#."><i class="fa fa-calendar"></i> <span>December 6, 2017</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-right"><a href="#."><i class="fa fa-heart-o"></i>21</a> <a href="#."><i
                                        class="fa fa-eye"></i>8</a> <a href="#."><i class="fa fa-comment-o"></i>17</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="{{ route('posts.single-post') }}"><img class="img-fluid"
                                src="{{ asset('admin/img/blog/blog-02.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="{{ route('posts.single-post') }}">Do You Know the ABCs of Health
                                Care?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco sit laboris.</p>
                        <a href="{{ route('posts.single-post') }}" class="read-more"><i
                                class="fa fa-long-arrow-right"></i> Read
                            More</a>
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#."><i class="fa fa-calendar"></i> <span>December 6, 2017</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-right"><a href="#."><i class="fa fa-heart-o"></i>21</a> <a href="#."><i
                                        class="fa fa-eye"></i>8</a> <a href="#."><i class="fa fa-comment-o"></i>17</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="{{ route('posts.single-post') }}"><img class="img-fluid"
                                src="{{ asset('admin/img/blog/blog-03.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="{{ route('posts.single-post') }}">Do You Know the ABCs of Health
                                Care?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco sit laboris.</p>
                        <a href="{{ route('posts.single-post') }}" class="read-more"><i
                                class="fa fa-long-arrow-right"></i> Read
                            More</a>
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#."><i class="fa fa-calendar"></i> <span>December 6, 2017</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-right"><a href="#."><i class="fa fa-heart-o"></i>21</a> <a href="#."><i
                                        class="fa fa-eye"></i>8</a> <a href="#."><i class="fa fa-comment-o"></i>17</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="{{ route('posts.single-post') }}"><img class="img-fluid"
                                src="{{ asset('admin/img/blog/blog-04.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="{{ route('posts.single-post') }}">Do You Know the ABCs of Health
                                Care?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore etmis dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco sit laboris.</p>
                        <a href="{{ route('posts.single-post') }}" class="read-more"><i
                                class="fa fa-long-arrow-right"></i> Read
                            More</a>
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#."><i class="fa fa-calendar"></i> <span>December 6, 2017</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-right"><a href="#."><i class="fa fa-heart-o"></i>21</a> <a href="#."><i
                                        class="fa fa-eye"></i>8</a> <a href="#."><i class="fa fa-comment-o"></i>17</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="notification-box">
        <div class="msg-sidebar notifications msg-noti">
            <div class="topnav-dropdown-header">
                <span>Messages</span>
            </div>
            <div class="drop-scroll msg-list-scroll" id="msg_list">
                <ul class="list-box">
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Richard Miles </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item new-message">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">John Doe</span>
                                    <span class="message-time">1 Aug</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Tarah Shropshire </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Mike Litorus</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">C</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Catherine Manseau </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">D</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Domenic Houston </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">B</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Buster Wigton </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Rolland Webber </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">C</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Claire Mapes </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Melita Faucher</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Jeffery Lalor</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">L</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Loren Gatlin</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Tarah Shropshire</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="topnav-dropdown-footer">
                <a href="chat.html">See all messages</a>
            </div>
        </div>
    </div>
</div>
@endsection