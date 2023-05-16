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
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">

        <header class="section-header p-5 d-flex justify-content-center text-center">
            <div class="">
                <h2 class="d-flex justify-content-center" style="color: #112D4E; font-weight: bold">Posts in Science &
                    Technology</h2>
                <p style="color: #112D4E;">Recent posts form our clients</p>
            </div>
        </header>

        <div class=" row">
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="{{ asset('frontend/images/science_technology/sample/blog-1.jpg') }}"
                            class="img-fluid" alt=""></div>
                    <span class="post-date">Tue, September 15</span>
                    <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit
                    </h3>
                    <a href="{{ route('science_technology.single_post') }}"
                        class="readmore stretched-link mt-auto"><span>Read More</span><i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="{{ asset('frontend/images/science_technology/sample/blog-2.jpg') }}"
                            class="img-fluid" alt=""></div>
                    <span class="post-date">Fri, August 28</span>
                    <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                    <a href="{{ route('science_technology.single_post') }}"
                        class="readmore stretched-link mt-auto"><span>Read More</span><i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img"><img src="{{ asset('frontend/images/science_technology/sample/blog-3.jpg') }}"
                            class="img-fluid" alt=""></div>
                    <span class="post-date">Mon, July 11</span>
                    <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                    <a href="{{ route('science_technology.single_post') }}"
                        class="readmore stretched-link mt-auto"><span>Read More</span><i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>

        </div>

    </div>

</section>
<!-- End Recent Blog Posts Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">
        <header class="section-header p-5 d-flex justify-content-center text-center">
            <div class="">
                <h2 class="" style="color: #112D4E; font-weight: bold">Client Reviews </h2>
                <span style="color:#112D4E">All client reviews form our clients in science and technology</span>
            </div>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p style="color:#02a4d6">
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('frontend/images/science_technology/sample/testimonials-1.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p style="color:#02a4d6">
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                            eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                            culpa.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('frontend/images/science_technology/sample/testimonials-2.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p style="color:#02a4d6">
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                            minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('frontend/images/science_technology/sample/testimonials-3.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p style="color:#02a4d6">
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos
                            export minim fugiat minim
                            velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                            veniam.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('frontend/images/science_technology/sample/testimonials-4.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p style="color:#02a4d6">
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                            enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                            nisi cillum quid.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('frontend/images/science_technology/sample/testimonials-5.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section>
<!-- End Testimonials Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq mb-5">
    <div class="container" data-aos="fade-up">
        <header class="section-header p-5">
            <h2 class="d-flex justify-content-center" style="color: #112D4E; font-weight: bold">Frequently Asked
                Questions</h2>
        </header>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-10">

                <div class="accordion accordion-flush" id="faqlist">

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-1">
                                <i class="bi bi-question-circle question-icon"></i>
                                Non consectetur a erat nam at lectus urna duis?
                            </button>
                        </h3>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-2">
                                <i class="bi bi-question-circle question-icon"></i>
                                Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                            </button>
                        </h3>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-3">
                                <i class="bi bi-question-circle question-icon"></i>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                            </button>
                        </h3>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-4">
                                <i class="bi bi-question-circle question-icon"></i>
                                Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                            </button>
                        </h3>
                        <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                <i class="bi bi-question-circle question-icon"></i>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-5">
                                <i class="bi bi-question-circle question-icon"></i>
                                Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                            </button>
                        </h3>
                        <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Frequently Asked Questions Section -->

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
        # F.A.Q
        --------------------------------------------------------------*/
    .faq .accordion-collapse {
        border: 0;
    }

    .faq .accordion-button {
        padding: 15px 15px 20px 0;
        font-weight: 600;
        border: 0;
        font-size: 18px;
        color: #444444;
        text-align: left;
        background: #F9F7F7 !important;
    }

    .faq .accordion-button:focus {
        box-shadow: none;
    }

    .faq .accordion-button:not(.collapsed) {
        background: none;
        color: #4154f1;
        border-bottom: 0;
    }

    .faq .accordion-body {
        padding: 0 0 25px 0;
        border: 0;
    }

    .accordion-header {
        background: #F9F7F7 !important;
    }

    .accordion-item {
        background: #F9F7F7 !important;
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

    /*--------------------------------------------------------------
        # Testimonials
        --------------------------------------------------------------*/
    .testimonials .testimonial-item {
        box-sizing: content-box;
        padding: 30px;
        margin: 40px 30px;
        box-shadow: 0px 0 20px rgba(1, 41, 112, 0.1);
        background: #fff;
        min-height: 320px;
        display: flex;
        flex-direction: column;
        text-align: center;
        transition: 0.3s;
    }

    .testimonials .testimonial-item .stars {
        margin-bottom: 15px;
    }

    .testimonials .testimonial-item .stars i {
        color: #ffc107;
        margin: 0 1px;
    }

    .testimonials .testimonial-item .testimonial-img {
        width: 90px;
        border-radius: 50%;
        border: 4px solid #fff;
        margin: 0 auto;
    }

    .testimonials .testimonial-item h3 {
        font-size: 18px;
        font-weight: bold;
        margin: 10px 0 5px 0;
        color: #111;
    }

    .testimonials .testimonial-item h4 {
        font-size: 14px;
        color: #999;
        margin: 0;
    }

    .testimonials .testimonial-item p {
        font-style: italic;
        margin: 0 auto 15px auto;
    }

    .testimonials .swiper-pagination {
        margin-top: 20px;
        position: relative;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #fff;
        opacity: 1;
        border: 1px solid #4154f1;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
        background-color: #4154f1;
    }

    .testimonials .swiper-slide {
        opacity: 0.3;
        height: 10px;
    }

    .swiper-wrapper {
        height: 50% !important;
    }

    @media (max-width: 1199px) {
        .testimonials .swiper-slide-active {
            opacity: 1;
        }

        .testimonials .swiper-pagination {
            margin-top: 0;
        }
    }

    @media (min-width: 1200px) {
        .testimonials .swiper-slide-next {
            opacity: 1;
            transform: scale(1.12);
        }
    }
</style>
@endpush