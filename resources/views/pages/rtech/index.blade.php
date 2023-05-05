@extends('layouts.rtech.app')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url({{ asset('rtech/images/2-digital-marketing.jpg') }});">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>R Tech
                                    International</span>
                            </h2>
                            <p class="animate__animated animate__fadeInUp">
                                We provide marketing services to startups and small businesses looking for a partner for
                                their digital media. We work
                                with you, not for you. We are on a mission to build, grow and maintain loyal
                                communities. Join forces with innovative
                                minds to foster your business growth!
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('rtech/images/software.jpg') }});">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Digital Strategies and Consulting</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Our expertise in technology, integrated with coherent cross channel marketing and strong
                                media presence is a unique
                                niche. All your digital requirements are under one umbrella.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('rtech/images/slide-44.jpg') }});">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Your Exponential Digital Growth Starts
                                Here.</h2>
                            <p class="animate__animated animate__adeInUp">
                                Are you ready to unlock the secrets of online
                                success? From optimizing search engine rankings to creating compelling
                                social media campaigns, our team of experts will equip you with the tools and strategies
                                to thrive in the digital world..
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <i class="fa-solid fa-angles-left carousel-control-prev-icon" aria-hidden="true"></i>
                {{-- <span class=" ri-arrow-left-line"></span> --}}
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <i class="fa-solid fa-angles-right carousel-control-prev-icon" aria-hidden="true"></i>
            </a>

        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us mb-5" style="padding: 0">
    <div class="container">
        <header class="section-header p-5">
            <h2 class="d-flex justify-content-center" style="color: #112D4E; font-weight: bold">About R-Tech
                International</h2>
        </header>
        <div class="row no-gutters">
            <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                <div class="content d-flex flex-column">
                    <div class="row">
                        <div class="col-md-6 icon-box" data-aos="fade-up">
                            <i class="bx bx-receipt"></i>
                            <h4>Information Technology</h4>
                            <p>
                                Information technology (IT) is a field of study that encompasses the use of computers,
                                software, and networks to manage
                                and process information. IT is a broad field that includes various technologies such as
                                hardware, software, and
                                telecommunications equipment.
                            </p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Science & Technology</h4>
                            <p>
                                Science and technology are two interrelated fields that play a crucial role in our
                                lives. Science is the systematic
                                study of the natural world and its phenomena, while technology refers to the practical
                                application of scientific
                                knowledge for practical purposes.
                            </p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-images"></i>
                            <h4>Technical Services</h4>
                            <p>
                                Technical services refer to a range of specialized support services provided by skilled
                                professionals to individuals or
                                organizations in various industries.
                            </p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-shield"></i>
                            <h4>Event Management</h4>
                            <p>
                                Event management refers to the process of planning, organizing, coordinating, and
                                executing events, such as conferences,
                                meetings, weddings, festivals, concerts, and other social or corporate gatherings.
                            </p>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center mt-5 justify-content-lg-start"
                data-aos="fade-right"></div>
        </div>
    </div>
</section>
<!-- End About Us Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-md-6 col-lg-6">
                <h2 class="mb-3" style="font-weight: bold;">R-Tech will help you get things complete reality</h2>
                <span class="mt-4">We are a cutting-edge digital marketing and website designing company dedicated
                    to helping
                    businesses thrive online. With a team of tech-savvy professionals and a passion for innovation,
                    we create stunning websites and execute powerful digital marketing strategies that drive
                    results.Let us transform your online presence and elevate your brand to new heights. Get ready
                    to unlock your digital potential with R-Tech</span>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="row gy-4 p-3">

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                    data-purecounter-duration="1" class="purecounter">90+</span>
                                <p style="color:#ffffff">Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #247cf0;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="1" class="purecounter">100+</span>
                                <p style="color:#ffffff">Projects</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 p-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="count-box">
                            <i class="bi bi-headset" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463"
                                    data-purecounter-duration="1" class="purecounter">20+</span>
                                <p style="color:#ffffff">Qualified Engineers</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                    class="purecounter">10+</span>
                                <p style="color:#ffffff">Years of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section><!-- End Counts Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
    <div class="container" data-aos="zoom-in">

        <div class="row justify-content-center">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('rtech/images/brands/512x512.webp') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('rtech/images/brands/alnusralogonew.webp') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('rtech/images/brands/MFK_TM_GreenWhite1.webp') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('rtech/images/brands/name_logo.webp') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('rtech/images/brands/resellerlogo.webp') }}" class="img-fluid" alt="">
            </div>

        </div>

    </div>
</section>
<!-- End Clients Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact mt-5">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2 class="d-flex justify-content-center" style="color: #112D4E; font-weight: bold">Contact R-Tech
                International</h2>
        </header>

        <div class="row gy-4 mt-2">

            <div class="col-lg-6">

                <div class="row gy-4 mb-4">
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Head Office</h3>
                            <p>Sharjah Research Technology and Innovation Park ,BLOCK B, Ofc No: B16,Sharjah, UAE,
                                Po Box No :66636</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-telephone"></i>
                            <h3>Branch Office</h3>
                            <p>M26,Crystal Building, Al Karama, Dubai</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@rtechglobal.ae</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bi bi-clock"></i>
                            <h3>Call us</h3>
                            <p>
                                +971 (04) 398 7949
                                <br>
                                +971 (052) 984 3844
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form method="POST" id="contact" class="php-email-form" action="">

                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="cutomer_name" class="form-control" placeholder="Your Name"
                                required>
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- End Contact Section -->

@endsection

<style>
    #hero {
        width: 100%;
        height: 70vh;
        background-color: #112D4E;
        overflow: hidden;
        position: relative;
        padding: 0;
    }

    #hero .carousel-item {
        width: 100%;
        height: 70vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }

    #hero .carousel-item::before {
        content: "";
        background-color: #112d4e13;
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
    }

    #hero .carousel-container {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #hero .carousel-content {
        text-align: center;
    }

    #hero h2 {
        color: #fff;
        margin-bottom: 30px;
        font-size: 48px;
        font-weight: 700;
    }

    #hero p {
        width: 80%;
        animation-delay: 0.4s;
        margin: 0 auto 30px auto;
        color: #fff;
    }

    #hero .carousel-inner .carousel-item {
        transition-property: opacity;
        background-position: center top;
    }

    #hero .carousel-inner .carousel-item,
    #hero .carousel-inner .active.carousel-item-start,
    #hero .carousel-inner .active.carousel-item-end {
        opacity: 0;
    }

    #hero .carousel-inner .active,
    #hero .carousel-inner .carousel-item-next.carousel-item-start,
    #hero .carousel-inner .carousel-item-prev.carousel-item-end {
        opacity: 1;
        transition: 0.5s;
    }

    #hero .carousel-inner .carousel-item-next,
    #hero .carousel-inner .carousel-item-prev,
    #hero .carousel-inner .active.carousel-item-start,
    #hero .carousel-inner .active.carousel-item-end {
        left: 0;
        transform: translate3d(0, 0, 0);
    }

    #hero .carousel-control-prev,
    #hero .carousel-control-next {
        width: 10%;
    }

    #hero .carousel-control-next-icon,
    #hero .carousel-control-prev-icon {
        background: none;
        font-size: 30px;
        line-height: 1;
        opacity: 0.5;
    }

    #hero .carousel-indicators li {
        cursor: pointer;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin: 0 4px;
        transition: ease-in;
        opacity: 0.7;
        display: none;
    }

    #hero .carousel-indicators li.active {
        opacity: 1;
        background-color: #01b1d7;
    }

    #hero .btn-get-started {
        font-family: "Raleway", sans-serif;
        font-weight: 500;
        font-size: 14px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 14px 32px;
        border-radius: 5px;
        transition: 0.5s;
        line-height: 1;
        margin: 10px;
        color: #fff;
        background: #02a4d6;
        animation-delay: 0.8s;
    }

    #hero .btn-get-started:hover {
        background: #02a4d6;
    }

    @media (max-width: 768px) {
        #hero {
            height: 90vh;
        }

        #hero .carousel-item {
            height: 90vh;
        }

        #hero h2 {
            font-size: 28px;
        }
    }

    @media (min-width: 1024px) {
        #hero p {
            width: 60%;
        }

        #hero .carousel-control-prev,
        #hero .carousel-control-next {
            width: 5%;
        }
    }

    @media (max-height: 500px) {
        #hero {
            height: 150vh;
        }

        #hero .carousel-item {
            height: 150vh;
        }
    }

    /*--------------------------------------------------------------
    # About Us
    --------------------------------------------------------------*/


    .about-us .content h3 {
        font-weight: 700;
        font-size: 34px;
    }

    .about-us .content p {
        margin-bottom: 0;
    }

    .about-us .content .icon-box {
        margin-top: 25px;
    }

    .about-us .content .icon-box h4 {
        font-size: 20px;
        font-weight: 700;
        margin: 5px 0 10px 60px;
        color: #112D4E;
    }

    .about-us .content .icon-box h4:hover {
        color: #02a4d6;
    }

    .about-us .content .icon-box i {
        font-size: 48px;
        float: left;
        color: #02a4d6;
    }

    .about-us .content .icon-box p {
        font-size: 15px;
        color: #112D4E;
        margin-left: 60px;
    }

    .about-us .image {
        background: url("../rtech/images/banner-800.webp") center center no-repeat;
        background-size: cover;
        min-height: 400px;
    }

    @media (max-width: 991px) {
        .about-us .image {
            text-align: center;
        }

        .about-us .image img {
            max-width: 80%;
        }
    }

    @media (max-width: 667px) {
        .about-us .image img {
            max-width: 100%;
        }
    }

    /*--------------------------------------------------------------
    # Counts
    --------------------------------------------------------------*/

    .counts {
        padding: 70px 0 60px;
        background-image: url("../rtech/images/counter_bg.webp");
        background-size: cover;
        background-attachment: scroll;
        background-repeat: no-repeat;
    }

    .counts .count-box {
        display: flex;
        align-items: center;
        padding: 30px;
        width: 100%;
        background: #02a4d673;
        box-shadow: 0px 0 30px #112D4E;
        clip-path: polygon(0% 0%, 5% 100%, 87% 88%, 99% 90%, 94% 4%);
        transition: all .5s;
    }

    .counts .count-box i {
        font-size: 42px;
        line-height: 0;
        margin-right: 20px;
        color: #02a4d6;
    }

    .counts .count-box span {
        font-size: 36px;
        display: block;
        font-weight: 600;
        color: #F9F7F7;
    }

    .counts .count-box p {
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #112D4E;
    }

    /*--------------------------------------------------------------
    # Clients
    --------------------------------------------------------------*/

    .clients {
        padding: 15px 0;
        text-align: center;
        background-color: #ffffff !important;
    }

    .clients img {
        max-width: 45%;
        transition: all 0.4s ease-in-out;
        display: inline-block;
        padding: 15px 0;
    }

    .clients img:hover {
        transform: scale(1.15);
    }

    @media (max-width: 768px) {
        .clients img {
            max-width: 40%;
        }
    }


    /*--------------------------------------------------------------
    # Contact
    --------------------------------------------------------------*/

    .contact .info-box {
        color: #112D4E;
        background: #02a4d626;
        padding: 30px;
        height: 100%;
    }

    .contact .info-box i {
        font-size: 38px;
        line-height: 0;
        color: #4154f1;
    }

    .contact .info-box h3 {
        font-size: 20px;
        color: #012970;
        font-weight: 700;
        margin: 20px 0 10px 0;
    }

    .contact .info-box p {
        padding: 0;
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 0;
    }

    .contact .php-email-form {
        background: #fafbff;
        padding: 30px;
        height: 100%;
    }

    .contact .php-email-form .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: left;
        padding: 15px;
        margin-bottom: 24px;
        font-weight: 600;
    }

    .contact .php-email-form .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        margin-bottom: 24px;
        font-weight: 600;
    }

    .contact .php-email-form .loading {
        display: none;
        background: #fff;
        text-align: center;
        padding: 15px;
        margin-bottom: 24px;
    }

    .contact .php-email-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #18d26e;
        border-top-color: #eee;
        animation: animate-loading 1s linear infinite;
    }

    .contact .php-email-form input,
    .contact .php-email-form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
        border-radius: 0;
    }

    .contact .php-email-form input:focus,
    .contact .php-email-form textarea:focus {
        border-color: #4154f1;
    }

    .contact .php-email-form input {
        padding: 10px 15px;
    }

    .contact .php-email-form textarea {
        padding: 12px 15px;
    }

    .contact .php-email-form button[type=submit] {
        background: #4154f1;
        border: 0;
        padding: 10px 30px;
        color: #fff;
        transition: 0.4s;
        border-radius: 4px;
    }

    .contact .php-email-form button[type=submit]:hover {
        background: #5969f3;
    }

    @keyframes animate-loading {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>