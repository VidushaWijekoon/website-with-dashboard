@extends('layouts.rtech.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero hero-animated" class=" hero-animated d-flex align-items-center">
    <div class="container-fluid p-5" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <img src="{{ asset('rtech/images/information_technology/rtect-software-development.png') }}"
                    alt="rtech_web_dev" class="web_dev_hero_img">
            </div>
            <div class="col-md-5 col-sm-6 d-flex justify-content-center align-items-center">
                <div class="">
                    <h1>Welcome to
                        <span>Rtech International Science and Technology</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

@endsection

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
        background: url('../rtech/images/information_technology/background_5.jpg');
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
</style>