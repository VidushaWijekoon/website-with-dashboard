@extends('layouts.frontend.app')
@section('title', 'Rtech | Home')
@section('content')
@if (session('message'))
<h6 class="alert alert-success mb-2">{{ session('message') }}</h6>
@endif

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url(https://images.pexels.com/photos/442579/pexels-photo-442579.jpeg?cs=srgb&dl=pexels-jeshootscom-442579.jpg&fm=jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><span>Welcome </span>to Rtech
                                International</h2>
                            <p class="animate__animated animate__fadeInUp">
                                We provide marketing services to startups and small businesses looking for a partner for
                                their digital media. We work
                                with you, not for you. We are on a mission to build, grow and maintain loyal
                                communities. Join forces with innovative
                                minds to foster your business growth!
                                Our expertise in technology, integrated with coherent cross channel marketing and strong
                                media presence is a unique
                                niche. All your digital requirements are under one umbrella.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item"
                    style="background-image: url(https://scitechdaily.com/images/AI-Technology-Creation-Concept.gif);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Science & Technology</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Science and technology are closely intertwined fields that play a crucial role in the
                                advancement and understanding of
                                the world around us. Science is a systematic approach to acquiring knowledge through
                                observation, experimentation, and
                                analysis, while technology refers to the application of scientific knowledge for
                                practical purposes.
                            </p>
                            <div>
                                <a href="{{ route('science_technology.index') }}"
                                    class="btn-menu animate__animated animate__fadeInUp scrollto">More About
                                    Rtech Science & Technology</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item "
                    style="background-image: url(https://miro.medium.com/v2/resize:fit:2000/1*-ntL3Dsvc-dJ5cLGRtSuEw.gif);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Web Development</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Web development refers to the process of
                                creating websites and web applications. It involves various aspects, including
                                web design, coding, server configuration, and database management. Web developers use
                                programming languages, frameworks,
                                and tools to build websites that are functional, visually appealing, and user-friendly.
                            </p>
                            <div>
                                <a href="{{ route('web_development.index') }}"
                                    class="btn-menu animate__animated animate__fadeInUp scrollto">More About
                                    Rtech Web Development</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item"
                    style="background-image: url(https://i.pinimg.com/originals/b2/83/11/b2831136a1912c98b1cad1b4eb9ab112.gif);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Software Development</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Software development is the process of designing, coding, testing, and maintaining
                                computer programs and applications.
                                It involves a systematic approach to building software solutions that meet specific
                                requirements and address user needs.
                                Software development encompasses a wide range of activities,.</p>
                            <div>
                                <a href="{{ route('software_development.index') }}"
                                    class="btn-menu animate__animated animate__fadeInUp scrollto">More About
                                    Rtech software development</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-item "
                    style="background-image: url(https://assets-global.website-files.com/59e16042ec229e00016d3a66/5dfbd74fe0b6d7150b256a28_digital-marketing-hero.gif);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Digital Markerting</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Digital marketing refers to the use of digital channels and technologies to promote
                                products, services, and brands to
                                reach and engage with a target audience. It encompasses a wide range of activities aimed
                                at driving online visibility,
                                increasing website traffic, generating leads, and ultimately, achieving business goals.
                                Digital marketing strategies can
                                include various components,
                            </p>
                            <div>
                                <a href="{{ route('digital_marketing.index') }}"
                                    class="btn-menu animate__animated animate__fadeInUp scrollto">More About
                                    Rtech digital markerting</a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="carousel-item "
                    style="background-image: url(https://cdn.mos.cms.futurecdn.net/aSmHfhGPbuYvRJZUxmsniW.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Graphic Design</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Graphic design is the process of visual communication through the use of typography,
                                images, color, and layout. It
                                involves creating and combining visual elements to convey a specific message or evoke a
                                particular emotional response.
                                Graphic designers utilize their creativity and technical skills to design various types
                                of visual materials.</p>
                            <div>
                                <a href="{{ route('graphic_design.index') }}"
                                    class="btn-menu animate__animated animate__fadeInUp scrollto">More About
                                    Rtech graphic design</a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 7 -->
                <div class="carousel-item "
                    style="background-image: url(https://thumbs.gfycat.com/AdorableImportantCaecilian-max-1mb.gif);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Technical Services</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Technical services refer to a range of professional services that provide technical
                                expertise and support in various
                                industries. These services typically involve specialized knowledge, skills, and tools to
                                address technical challenges,
                                implement solutions, and ensure the efficient operation of systems and processes.
                            </p>
                            <div>
                                <a href="{{ route('technical_services.index') }}"
                                    class="btn-menu animate__animated animate__fadeInUp scrollto">More About
                                    Rtech technical services</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 8 -->
                <div class="carousel-item "
                    style="background-image: url(https://www.mabbevents.com/assets/images/background-2.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Event Management</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Event management refers to the process of planning, organizing, and executing events,
                                such as conferences, trade shows,
                                corporate meetings, weddings, and concerts. Event management involves various tasks and
                                responsibilities to ensure that
                                an event runs smoothly and successfully.
                            </p>
                            <div>
                                <a href="{{ route('event_management.index') }}"
                                    class="btn-menu animate__animated animate__fadeInUp scrollto">More About
                                    Rtech Event Management</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<!-- ======= Tabs Section ======= -->
<section id="tabs" class="tabs mt-5">
    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex justify-content-center">
            <li class="nav-item col-3 mb-4">
                <a class="nav-link active show" href="{{ route('science_technology.index') }}">
                    <i class="fa-solid fa-microchip"></i>
                    <h4 class="d-none d-lg-block">Science & Technology</h4>
                </a>
            </li>
            <li class="nav-item col-3 mb-4">
                <a class="nav-link" href="{{ route('web_development.index') }}">
                    <i class="fa-solid fa-code"></i>
                    <h4 class="d-none d-lg-block">Web Development</h4>
                </a>
            </li>
            <li class="nav-item col-3 mb-4">
                <a class="nav-link" href="{{ route('software_development.index') }}">
                    <i class="fa-solid fa-database"></i>
                    <h4 class="d-none d-lg-block">Software Development</h4>
                </a>
            </li>
            <li class="nav-item col-3 mb-4">
                <a class="nav-link" href="{{ route('digital_marketing.index') }}">
                    <i class="fa-solid fa-arrows-to-eye"></i>
                    <h4 class="d-none d-lg-block">Digital Marketing</h4>
                </a>
            </li>
            <li class="nav-item col-3 mb-4">
                <a class="nav-link" href="{{ route('graphic_design.index') }}">
                    <i class="fa-solid fa-palette"></i>
                    <h4 class="d-none d-lg-block">Graphic Design</h4>
                </a>
            </li>
            <li class="nav-item col-3 mb-4">
                <a class="nav-link" href="{{ route('technical_services.index') }}">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <h4 class="d-none d-lg-block">Technical Services</h4>
                </a>
            </li>
            <li class="nav-item col-3 mb-4">
                <a class="nav-link" href="{{ route('event_management.index') }}">
                    <i class="fa-regular fa-object-group"></i>
                    <h4 class="d-none d-lg-block">Event Management</h4>
                </a>
            </li>
        </ul>
    </div>
</section><!-- End Tabs Section -->

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
                <img src="{{ asset('frontend/images/brands/512x512.webp') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('frontend/images/brands/alnusralogonew.webp') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('frontend/images/brands/MFK_TM_GreenWhite1.webp') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('frontend/images/brands/name_logo.webp') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset('frontend/images/brands/resellerlogo.webp') }}" class="img-fluid" alt="">
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


            <div class="row gy-4 mb-4">
                <div class="col-md-3">
                    <div class="info-box">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Head Office</h3>
                        <p>Sharjah Research Technology and Innovation Park ,BLOCK B, Ofc No: B16,Sharjah, UAE,
                            Po Box No :66636</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-box">
                        <i class="bi bi-telephone"></i>
                        <h3>Branch Office</h3>
                        <p>M26,Crystal Building, Al Karama, Dubai</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-box">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@rtechglobal.ae</p>
                    </div>
                </div>
                <div class="col-md-3">
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
    </div>

</section>
<!-- End Contact Section -->

@endsection

@push('style')
<style>
    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
    #hero {
        width: 100%;
        height: 100vh;
        background-color: rgba(39, 37, 34, 0.8);
        overflow: hidden;
        padding: 0;
    }

    #hero .carousel-item {
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    #hero .carousel-item::before {
        content: "";
        background-color: rgba(12, 11, 10, 0.5);
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

    #hero h2 span {
        color: #02a4d6;
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
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: scroll;
        background-position: center;
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

    #hero .carousel-control-next-icon,
    #hero .carousel-control-prev-icon {
        background: none;
        font-size: 30px;
        line-height: 0;
        width: auto;
        height: auto;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50px;
        transition: 0.3s;
        color: rgba(255, 255, 255, 0.5);
        width: 54px;
        height: 54px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #hero .carousel-control-next-icon:hover,
    #hero .carousel-control-prev-icon:hover {
        background: rgba(255, 255, 255, 0.3);
        color: rgba(255, 255, 255, 0.8);
    }

    #hero .carousel-indicators li {
        cursor: pointer;
    }

    #hero .btn-menu,
    #hero .btn-book {
        font-weight: 600;
        font-size: 13px;
        letter-spacing: 1px;
        text-transform: uppercase;
        display: inline-block;
        padding: 12px 30px;
        border-radius: 50px;
        transition: 0.5s;
        line-height: 1;
        margin: 0 10px;
        animation-delay: 0.8s;
        color: #fff;
        border: 2px solid #02a4d6;
    }

    #hero .btn-menu:hover,
    #hero .btn-book:hover {
        background: #02a4d6;
        color: #fff;
    }

    @media (max-width: 768px) {
        #hero h2 {
            font-size: 28px;
        }
    }

    @media (min-width: 1024px) {
        #hero p {
            width: 50%;
        }

        #hero .carousel-control-prev,
        #hero .carousel-control-next {
            width: 5%;
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
        background: url("../frontend/images/banner-800.webp") center center no-repeat;
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
        background-image: url("../frontend/images/counter_bg.webp");
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

    /*--------------------------------------------------------------
    # Tabs
    --------------------------------------------------------------*/
    .tabs .nav-tabs {
        border: 0;
    }

    .tabs .nav-link {
        border: 1px solid #b9b9b9;
        padding: 15px;
        transition: 0.3s;
        color: #111111;
        border-radius: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .tabs .nav-link i {
        padding-right: 15px;
        font-size: 48px;
    }

    .tabs .nav-link h4 {
        font-size: 18px;
        font-weight: 600;
        margin: 0;
    }

    .tabs .nav-link:hover {
        color: #5969f3;
    }

    .tabs .nav-link.active {
        background: #5969f3;
        color: #fff;
        border-color: #5969f3;
    }

    @media (max-width: 768px) {
        .tabs .nav-link i {
            padding: 0;
            line-height: 1;
            font-size: 36px;
        }
    }

    @media (max-width: 575px) {
        .tabs .nav-link {
            padding: 15px;
        }

        .tabs .nav-link i {
            font-size: 24px;
        }
    }

    .tabs .tab-content {
        margin-top: 30px;
    }

    .tabs .tab-pane h3 {
        font-weight: 600;
        font-size: 26px;
    }

    .tabs .tab-pane ul {
        list-style: none;
        padding: 0;
    }

    .tabs .tab-pane ul li {
        padding-bottom: 10px;
    }

    .tabs .tab-pane ul i {
        font-size: 20px;
        padding-right: 4px;
        color: #5969f3;
    }

    .tabs .tab-pane p:last-child {
        margin-bottom: 0;
    }
</style>
@endpush