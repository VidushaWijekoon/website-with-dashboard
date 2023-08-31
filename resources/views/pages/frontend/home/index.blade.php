@extends('layouts.frontend.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up">
                    <div>
                        <h1 className="mb-4 pb-0">
                            Let's turn your idea into an
                            <br />
                            <span>extraordinary digital product</span>
                        </h1>
                        <h2>
                            We have the experience, knowledge and technical know-how to
                            deliver an innovative digital product that will exceed your
                            expectations.
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                    data-aos="fade-up">
                    <img src="{{ asset('images/robot_1.png') }}" class="img-fluid" alt="robot">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- -->

    <!-- -->
@endsection
