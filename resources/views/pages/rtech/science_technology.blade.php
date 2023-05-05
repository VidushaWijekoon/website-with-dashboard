@extends('layouts.rtech.app')

@section('content')
<section id="hero-animated" class="hero-animated d-flex align-items-center mb-5">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <img src="{{ asset('rtech/images/hero-carousel/hero-carousel-3.svg') }}" class="img-fluid animated">
        <h2>Welcome to <span>Rtech Science and Technology</span></h2>
    </div>
</section>

<!-- ======= About Section ======= -->
<section id="about" class="about mb-5">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
            <div class="col-lg-11">
                <div class="row justify-content-end">

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="1"
                                class="purecounter">25</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                class="purecounter">85</span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-clock"></i>
                            <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1"
                                class="purecounter">35</span>
                            <p>Years of experience</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1"
                                class="purecounter">48</span>
                            <p>Awards</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('rtech/images/science_technology/about.jpg') }}" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
            </div>

            <div class="col-lg-6 pt-3 pt-lg-0 content">
                <h3>Rtech International Science & Technology.</h3>


                <p>
                    Science and technology are closely related fields that contribute to the advancement of human
                    knowledge and progress.

                    Science is the systematic study of the natural world and the laws that govern it. It involves
                    observation,
                    experimentation, and the development of theories and models to explain the behavior of the universe.
                    The scientific
                    method is a process that scientists use to investigate phenomena, make observations, and test
                    hypotheses. Science
                    encompasses many different fields, including physics, chemistry, biology, geology, astronomy, and
                    more.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- ======= About Boxes Section ======= -->
<section id="about-boxes" class="about-boxes">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="{{ asset('rtech/images/science_technology/about-boxes-1.jpg') }}" class="card-img-top"
                        alt="about-boxes-1">
                    <div class="card-icon">
                        <i class="fa-solid fa-brush"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Our Mission</a></h5>
                        <p class="card-text">At our company, our mission is to empower people to achieve more through
                            technology. We believe that technology should
                            be accessible to everyone, and that it has the potential to transform the way we live and
                            work. By developing intuitive,
                            user-friendly products that leverage the latest advances in science and engineering, we aim
                            to improve people's lives
                            and help them reach their full potential. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <img src="{{ asset('rtech/images/science_technology/about-boxes-2.jpg') }}" class="card-img-top"
                        alt="about-boxes-2">
                    <div class="card-icon">
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Our Plan</a></h5>
                        <p class="card-text">Our company's plan is to focus on research and development in emerging
                            fields such as artificial intelligence,
                            biotechnology, and quantum computing. By investing in cutting-edge technologies and building
                            a world-class team of
                            scientists and engineers, we aim to develop breakthrough products that will transform
                            industries and change the world.
                            We will also prioritize strategic partnerships and collaborations to accelerate innovation
                            and drive growth.. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <img src="{{ asset('rtech/images/science_technology/about-boxes-3.jpg') }}" class="card-img-top"
                        alt="about-boxes-3">
                    <div class="card-icon">
                        <i class="fa-solid fa-tape"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Our Vision</a></h5>
                        <p class="card-text">Our vision is to create innovative technologies that transform the world we
                            live in. We aim to lead the way in the
                            development of cutting-edge products that solve complex problems and empower people to
                            achieve more. Our commitment to
                            excellence and passion for science and technology drives us to push the boundaries of what
                            is possible, delivering
                            products that exceed expectations and inspire progress. </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End About Boxes Section -->

<section id="form_submit" class="mt-5 mb-5">
    <div class="container">
        <header class="section-header p-5">
            <h2 class="d-flex justify-content-center" style="color: #112D4E; font-weight: bold">Rtech International
                Science & Technology Survey Form</h2>
        </header>


        <div class="row">
            <!--  open row -->
            <div id="form-tagline" class="col-md-4">
                <div class="form-tagline">
                    <div class="d-flex">
                        <i class="fa-solid fa-file-arrow-up fa-2x"></i>
                        <div class="mt-2 mx-2">
                            <h5>Upload file to our survey</h5>
                        </div>
                    </div>
                    <h2>How Are We Doing?</h2>
                    <p id="description" class="lead">We really value your opinion</p>
                </div>
            </div>

            <div id="form-content" class="col-md-8">

                <form id="survey-form">
                    <!-- open form -->

                    <form class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="userfullname" class="col-sm-4 col-form-labe l">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="userfullname"
                                        placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="useremail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control form-control-sm" id="useremail"
                                        placeholder="Email" required>
                                </div>
                            </div>

                            <div class="form-group row mt-2">
                                <label for="contact_number" class="col-sm-4 col-form-label">Contact Number</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control form-control-sm" id="contact_number"
                                        placeholder="Contact Number" required>
                                </div>
                            </div>


                            <div class="form-group row mt-2">
                                <label for="upload_file" class="col-sm-4 col-form-label">Upload File</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control form-control-sm" id="upload_file"
                                        placeholder="upload_file" required>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer mt-2">
                            <button type="submit" class="btn btn-info">Upload</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>

                </form> <!-- close form -->

            </div> <!-- close form content div -->

        </div> <!-- close row -->
    </div><!--  close container -->
</section>
@endsection

<style>
    /*--------------------------------------------------------------
# Animated Hero Section
--------------------------------------------------------------*/
    .hero-animated {
        width: 100%;
        min-height: 50vh;
        background: url("../rtech/images/science_technology/3d-multi-coloured-plexus-design-background.jpg") center center;
        background-size: cover;
        position: relative;
        padding: 120px 0 60px;
    }

    .hero-animated h2 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 300;
        color: var(--color-secondary);
        font-family: var(--font-secondary);
    }

    .hero-animated h2 span {
        color: var(--color-primary);
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
        color: var(--color-white);
        background: var(--color-primary);
        font-family: var(--font-secondary);
    }

    .hero-animated .btn-get-started:hover {
        background: rgba(var(--color-primary-rgb), 0.8);
    }

    .hero-animated .btn-watch-video {
        font-size: 16px;
        transition: 0.5s;
        margin-left: 25px;
        font-family: var(--font-secondary);
        color: var(--color-secondary);
        font-weight: 600;
    }

    .hero-animated .btn-watch-video i {
        color: var(--color-primary);
        font-size: 32px;
        transition: 0.3s;
        line-height: 0;
        margin-right: 8px;
    }

    .hero-animated .btn-watch-video:hover {
        color: var(--color-primary);
    }

    .hero-animated .btn-watch-video:hover i {
        color: rgba(var(--color-primary-rgb), 0.8);
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
    # About
    --------------------------------------------------------------*/
    .about .container {
        box-shadow: 0px 2px 15px #112D4E;
        padding-bottom: 15px;
    }

    .about .count-box {
        padding: 60px 0;
        width: 100%;
    }

    .about .count-box i {
        display: block;
        font-size: 48px;
        color: #a1bdd1;
        float: left;
        line-height: 0;
    }

    .about .count-box span {
        font-size: 28px;
        line-height: 25px;
        display: block;
        font-weight: 700;
        color: #365870;
        margin-left: 60px;
    }

    .about .count-box p {
        padding: 5px 0 0 0;
        margin: 0 0 0 60px;
        font-family: "Raleway", sans-serif;
        font-weight: 600;
        font-size: 14px;
        color: #2e4b5e;
    }

    .about .count-box a {
        font-weight: 600;
        display: block;
        margin-top: 20px;
        color: #2e4b5e;
        font-size: 15px;
        font-family: "Poppins", sans-serif;
        transition: ease-in-out 0.3s;
    }

    .about .count-box a:hover {
        color: #477392;
    }

    .about .content {
        font-size: 15px;
    }

    .about .content h3 {
        font-weight: 700;
        font-size: 24px;
        color: #263d4d;
    }

    .about .content ul {
        list-style: none;
        padding: 0;
    }

    .about .content ul li {
        padding-bottom: 10px;
        padding-left: 28px;
        position: relative;
        color: #112D4E;
    }

    .about .content ul i {
        font-size: 24px;
        color: #02a4d6;
        position: absolute;
        left: 0;
        top: -2px;
    }

    .about .content p:last-child {
        margin-bottom: 0;
    }

    .about .play-btn {
        width: 94px;
        height: 94px;
        background: radial-gradient(#02a4d6 50%, rgba(31, 54, 184, 0.4) 52%);
        border-radius: 50%;
        display: block;
        position: absolute;
        left: calc(50% - 47px);
        top: calc(50% - 47px);
        overflow: hidden;
    }

    .about p {
        color: #112D4E;
    }

    .about .play-btn::after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-40%) translateY(-50%);
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 15px solid #fff;
        z-index: 100;
        transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    .about .play-btn::before {
        content: "";
        position: absolute;
        width: 120px;
        height: 120px;
        animation-delay: 0s;
        animation: pulsate-btn 2s;
        animation-direction: forwards;
        animation-iteration-count: infinite;
        animation-timing-function: steps;
        opacity: 1;
        border-radius: 50%;
        border: 5px solid rgba(49, 43, 141, 0.7);
        top: -15%;
        left: -15%;
        background: rgba(198, 16, 0, 0);
    }

    .about .play-btn:hover::after {
        border-left: 15px solid #02a4d6;
        transform: scale(20);
    }

    .about .play-btn:hover::before {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-40%) translateY(-50%);
        width: 0;
        height: 0;
        border: none;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-left: 15px solid #fff;
        z-index: 200;
        animation: none;
        border-radius: 0;
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

    /*--------------------------------------------------------------
    # About Boxes
    --------------------------------------------------------------*/
    .about-boxes {
        background: url("../rtech/images/science_technology/about-boxes-bg.jpg") center top no-repeat fixed;
        background-size: cover;
        padding: 60px 0 30px 0;
        position: relative;
    }

    .about-boxes::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: fff;
        z-index: 9;
    }

    .about-boxes .container,
    .about-boxes .container-fluid {
        position: relative;
        z-index: 10;
    }

    .about-boxes .card {
        border-radius: 3px;
        border: 0;
        box-shadow: 0px 2px 15px #112D4E;
        margin-bottom: 30px;
    }

    .about-boxes .card-icon {
        text-align: center;
        margin-top: -32px;
    }

    .about-boxes .card-icon i {
        font-size: 32px;
        color: #fff;
        width: 64px;
        height: 64px;
        padding-top: 5px;
        text-align: center;
        background-color: #02a4d6;
        border-radius: 4px;
        text-align: center;
        border: 4px solid #fff;
        transition: 0.3s;
        display: inline-block;
    }

    .about-boxes .card-body {
        padding-top: 12px;
    }

    .about-boxes .card-title {
        font-weight: 700;
        text-align: center;
    }

    .about-boxes .card-title a {
        color: #15222b;
    }

    .about-boxes .card-title a:hover {
        color: #02a4d6;
    }

    .about-boxes .card-text {
        color: #5e5e5e;
    }

    .about-boxes .card:hover .card-icon i {
        background: #fff;
        color: #02a4d6;
    }

    @media (max-width: 1024px) {
        .about-boxes {
            background-attachment: scroll;
        }
    }

    .form_submit .container {
        margin-bottom: 5%;
    }

    #form-header {
        margin-top: 5%;
        text-align: center;
    }

    #form-tagline {
        background: #02a4d6;
        border-top-left-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
        color: #ffffff;
        padding: 4%;
        text-align: left;
    }

    #form-tagline .fa {
        margin-bottom: 15%;
    }

    #form-tagline h2 {
        margin-bottom: 15%;
    }

    #form-content {
        background: #f4f4f4;
        border-top-right-radius: 0.5rem;
        border-bottom-right-radius: 0.5rem;
        padding: 3%;
    }

    .form-group {
        margin-top: 5%;
    }

    .contact {
        padding: 4%;
        height: 400px;
    }

    .control-label {
        font-size: 16px;
        font-weight: 600;
        color: #112D4E;
    }

    #survey-form label {
        color: #112D4E;
    }

    div .submit-button {
        margin-top: 3%;
        text-align: right;
    }

    button#submit {
        white-space: normal;
        width: auto;
        background: #02a4d6;
        color: #ffffff;
        font-weight: 600;
        width: 25%;
    }
</style>