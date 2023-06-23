@extends('layouts.frontend.app')
@section('title', 'Rtech | Science & Technology')
@section('content')

<!-- ======= Hero Section ======= -->
<video class="img-fluid" autoplay loop muted>
    <source src="{{ asset('frontend/videos/create-world.mp4') }}" type="video/mp4" />
</video>
<!-- End Hero -->

<!-- ======= On Focus Section ======= -->
<section id="onfocus" class="onfocus">
    <div class="container-fluid p-0" data-aos="fade-up">

        <div class="row g-0">
            <div class="col-lg-4 position-relative d-flex align-items-center ">
                <img src="{{ asset('frontend/images/technical_services/s&t.png') }}" alt="" width="100%">
            </div>
            <div class="col-lg-8">
                <div class="content d-flex flex-column justify-content-center h-100">
                    <h3>SCIENCE & TECHNOLOGY</h3>
                    <span>TAKE YOUR BUSINESS TO THE NEXT LEVEL</span>
                    <p class="">
                        Science and technology are closely related fields that are concerned with understanding the
                        natural world and applying
                        that understanding to create new tools, products, and processes that improve our lives. Science
                        is the systematic study
                        of the natural world through observation, experimentation, and analysis, with the goal of
                        discovering new knowledge and
                        understanding how things work. Technology, on the other hand, is the practical application of
                        scientific knowledge to
                        solve problems or create new products, tools, or processes.

                        Advancements in science and technology have transformed every aspect of our lives, from the way
                        we communicate and
                        travel to the way we work, eat, and entertain ourselves. They have also enabled us to solve many
                        of the world's most
                        pressing problems, such as disease, hunger, and environmental degradation. Some of the key areas
                        of focus in science and
                        technology
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts mb-5">
    <div class="container" data-aos="fade-up">

        <header class="section-header p-5 d-flex justify-content-center text-center">
            <div class="">
                <h2 class="d-flex justify-content-center" style="color: #112D4E; font-weight: bold">Posts in Science &
                    Technology</h2>
                <p style="color: #112D4E;">Recent posts form our clients</p>
            </div>
        </header>

        <div class=" row">
            @forelse ($posts as $item)
            <div class="col-lg-4 mb-5">
                <div class="post-box">

                    @foreach ($item->postTitleImage as $x)
                    <div class="post-img">
                        <img src="{{ asset($x->title_image) }}" class="img-fluid" alt="">
                    </div>
                    @endforeach

                    <span class="post-date">{{ date('d-M-Y',strtotime($item->created_at)) }}</span>
                    <h3 class="post-title">{{ $item->title }}</h3>
                    <p class="text-black">{{ $item->post_summery }}</p>

                </div>
            </div>
            @empty
            <span>No Data Found</span>
            @endforelse

        </div>

    </div>

</section>
<!-- End Recent Blog Posts Section -->


@endsection

@push('style')
<style>
    /*--------------------------------------------------------------
        # Animated Hero Section
        --------------------------------------------------------------*/
    .web_dev_hero_img {
        background-attachment: scroll;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
    }

    .hero-animated {
        width: 100%;
        min-height: 50vh;
        background: url('https://www.youtube.com/watch?v=fAcWOnHx894');
        background-size: cover;
        position: relative;
        padding: 70px 0 60px;
    }

    .hero-animated h2 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 300;
        color: var(--color-secondary);
        font-family: var(--font-secondary);
    }

    .hero-animated h2 span {
        color: #fff;
    }

    .hero-animated p {
        color: rgba(var(--color-secondary-rgb), 0.8);
        margin: 0 0 30px 0;
        font-size: 20px;
        font-weight: 400;
    }

    .hero-animated .animated {
        margin-bottom: 60px;
        animation: up-down 2s ease-in-out infinite alternate-reverse both;
    }

    @media (min-width: 992px) {
        .hero-animated .animated {
            max-width: 45%;
        }
    }

    @media (max-width: 991px) {
        .hero-animated .animated {
            max-width: 60%;
        }
    }

    @media (max-width: 575px) {
        .hero-animated .animated {
            max-width: 80%;
        }
    }

    .hero-animated .btn-get-started {
        font-size: 16px;
        font-weight: 400;
        display: inline-block;
        padding: 10px 28px;
        border-radius: 4px;
        transition: 0.5s;
        color: #fff;
        background: #112D4E;
        font-family: "Poppins", sans-serif;
    }

    .hero-animated .btn-get-started:hover {
        background: rgba(var(--color-primary-rgb), 0.8);
    }

    .hero-animated .btn-watch-video {
        font-size: 16px;
        transition: 0.5s;
        margin-left: 25px;
        font-family: "Poppins", sans-serif;
        color: var(--color-secondary);
        font-weight: 600;
    }

    .hero-animated .btn-watch-video i {
        color: #fff;
        font-size: 32px;
        transition: 0.3s;
        line-height: 0;
        margin-right: 8px;
    }

    @media (max-width: 640px) {
        .hero-animated h2 {
            font-size: 32px;
        }

        .hero-animated p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .hero-animated .btn-get-started,
        .hero-animated .btn-watch-video {
            font-size: 14px;
        }
    }

    @keyframes up-down {
        0% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(-10px);
        }
    }

    /*--------------------------------------------------------------
        # On Focus Section
        --------------------------------------------------------------*/
    .onfocus {
        padding: 0;
    }

    .onfocus .content {
        background: url('../frontend/images/information_technology/background_6.jpg');
        background-size: cover;
        background-attachment: scroll;
        background-repeat: no-repeat;
        background-position: center;
        padding: 40px;
    }

    .onfocus .content h3 {
        font-weight: 600;
        font-size: 32px;
        color: #fff;
    }

    .onfocus .content ul {
        list-style: none;
        padding: 0;
    }

    .onfocus .content ul li {
        padding-bottom: 10px;
    }

    .onfocus .content ul i {
        font-size: 20px;
        padding-right: 4px;
        color: #fff;
    }

    .onfocus .content p:last-child {
        margin-bottom: 0;
    }

    .onfocus .content .read-more {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 1px;
        padding: 12px 24px;
        border-radius: 5px;
        transition: 0.3s;
        display: -nline-flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        background: #ac1e60;
    }

    .onfocus .content .read-more i {
        font-size: 18px;
        margin-left: 5px;
        line-height: 0;
        transition: 0.3s;
    }

    .onfocus .content .read-more:hover {
        background: #3F72AF;
        padding-right: 19px;
    }

    .onfocus .content .read-more:hover i {
        margin-left: 10px;
    }

    @keyframes pulsate-btn {
        0% {
            transform: scale(0.6, 0.6);
            opacity: 1;
        }

        100% {
            transform: scale(1, 1);
            opacity: 0;
        }
    }

    /*------/ Intro Single /------*/
    .intro-single {
        padding: 12rem 0 3rem;
    }

    @media (max-width: 767px) {
        .intro-single {
            padding-top: 9rem;
        }
    }

    .intro-single .title-single-box {
        padding: 1rem 0 1rem 2rem;
    }

    .intro-single .title-single-box {
        border-left: 3px solid #2eca6a;
    }

    .intro-single .title-single-box .title-single {
        font-weight: 600;
        font-size: 2.2rem;
    }

    @media (min-width: 768px) {
        .intro-single .title-single-box .title-single {
            font-size: 2.1rem;
        }
    }

    @media (min-width: 992px) {
        .intro-single .title-single-box .title-single {
            font-size: 2.5rem;
        }
    }

    .intro-single .breadcrumb-box {
        padding: 1rem 0 0 0.5rem;
    }

    .intro-single .breadcrumb {
        background-color: transparent;
        padding-right: 0;
        padding-left: 0;
    }



    /*--------------------------------------------------------------
        # Recent Blog Posts
        --------------------------------------------------------------*/
    .recent-blog-posts .post-box {
        box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08);
        transition: 0.3s;
        height: 100%;
        overflow: hidden;
        padding: 30px;
        border-radius: 8px;
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .recent-blog-posts .post-box .post-img {
        overflow: hidden;
        margin: -30px -30px 15px -30px;
        position: relative;
    }

    .recent-blog-posts .post-box .post-img img {
        transition: 0.5s;
    }

    .recent-blog-posts .post-box .post-date {
        font-size: 16px;
        font-weight: 600;
        color: rgba(1, 41, 112, 0.6);
        display: block;
        margin-bottom: 10px;
    }

    .recent-blog-posts .post-box .post-title {
        font-size: 24px;
        color: #012970;
        font-weight: 700;
        margin-bottom: 18px;
        position: relative;
        transition: 0.3s;
    }

    .recent-blog-posts .post-box .readmore {
        display: flex;
        align-items: center;
        font-weight: 600;
        line-height: 1;
        transition: 0.3s;
    }

    .recent-blog-posts .post-box .readmore i {
        line-height: 0;
        margin-left: 4px;
        font-size: 18px;
    }

    .recent-blog-posts .post-box:hover .post-title {
        color: #4154f1;
    }

    .recent-blog-posts .post-box:hover .post-img img {
        transform: rotate(6deg) scale(1.2);
    }
</style>
@endpush