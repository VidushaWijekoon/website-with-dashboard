@extends('layouts.rtech.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="event_management_hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
            <div class="col-sm-10 col-md-5">
            </div>
            <div class="col-sm-10 col-md-7">
                <h1 style="color: #fff">Welcome to <span>R-Tech Event Management</span></h1>
                <p class="mt-2">
                    Our Mission is to provide memorable experience to our customer.
                    We endeavor to be one of the most reliable and creative event management company.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="event_management_about" class="event_management_about section-bg">
    <div class="container" data-aos="fade-up">
        <header class="section-header p-5">
            <h2 class="d-flex justify-content-center" style="color: #112D4E; font-weight: bold">R-Tech International
                Event Management</h2>
        </header>
        <div class="row p-5">
            <div class="col-lg-6 d-flex justify-content-center align-items-center" data-aos="fade-right"
                data-aos-delay="100">
                <img src="{{ asset('rtech/images/events/event-1.jpg') }}" class="img-fluid" alt="event-1">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                data-aos-delay="100">

                <p class="fst-italic" style="color: #112D4E">
                    Max Events Dubai a name synonymous with Style, Creativity, and Quality in the Event Management
                    Business has a proven track record and a presence in the UAE market. Our professional team has over
                    ten years of experience working both here and in India handling everything from Corporate Launches
                    to Conferences, from Weddings to Gala dinners, from MICE Events to Award Ceremonies, and from
                    Exhibitions to Road Shows
                </p>
                <ul>
                    <li>
                        <i class="bx bx-store-alt"></i>
                        <div>
                            <p>
                                At Max Events Dubai, we are much more than the facilitators of your ideas; we are your
                                event partners. Working hand in hand, our number one goal is to deliver the meeting or
                                event that you expect, more brilliantly than you could have imagined with your meeting
                                on time and on budget.
                            </p>
                        </div>
                    </li>
                    <li>
                        <i class="bx bx-images"></i>
                        <div>
                            <p>Events has been our only Passion and Business in the UAE Since 2013</p>
                        </div>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</section>
<!-- End About Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features p-5">
    <div class="container">
        <div class="section-title" style="text-align: center; padding-bottom: 30px;">
            <header class="section-header p-5">
                <h2 class="d-flex justify-content-center" style="color: #112D4E; font-weight: bold">Event Management
                    Services</h2>
            </header>
            <span class="mt-2" style="color: #112D4E">
                From creative concepts to final production, our services cover all aspects of inbound and outbound
                marketing strategy to reach your target customers exactly when they need it. One of the biggest
                advantages of our agency is the strong bonds we build with our clients. We thoroughly vet your
                business and industry before designing a strategy or creative concept, and every member of our
                team enjoys getting to know our clients personally.

            </span>
        </div>
        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

            <div class="col-md-5">
                <img src="{{ asset('rtech/images/events/wedding.jpg') }}" class="img-fluid" alt="weddings">
            </div>
            <div class="col-md-7">
                <h3>Wedding Parties.</h3>
                <p class="fst-italic">
                    A team crafted for turning your dream day into an unmatched reality. We specialize in
                    crafting your dreams, fantasies, and desires into reality. We provide both theme
                    weddings and destination weddings at the most level. We at solid events get into your
                    dreams, concur with your desires and add a magical touch of professionalism to make your
                    wedding ceremony the perfect day of your life in all aspects. We are ready to serve you
                    the best possible service because we value your expectations and are always ready to
                    stand for it to be achieved.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Islamic Wedding</li>
                            <li><i class="bi bi-check-circle"></i> Hindu Weddings</li>
                            <li><i class="bi bi-check-circle"></i> Christian Weddings</li>
                            <li><i class="bi bi-check-circle"></i> Civil Ceremony Weddings</li>
                            <li><i class="bi bi-check-circle"></i> Formal Weddings</li>
                            <li><i class="bi bi-check-circle"></i> Infomal Weddings</li>
                            <li><i class="bi bi-check-circle"></i> Destination Weddings</li>
                            <li><i class="bi bi-check-circle"></i> Vintage Style Weddings</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Any Type of Indian Weddings</li>
                            <li><i class="bi bi-check-circle"></i> Group Wedding</li>
                            <li><i class="bi bi-check-circle"></i> Double Weddings</li>
                            <li><i class="bi bi-check-circle"></i> Proxy Weddings</li>
                            <li><i class="bi bi-check-circle"></i> Engagement Ceremony</li>
                            <li><i class="bi bi-check-circle"></i> Mehendi Ceremony</li>
                            <li><i class="bi bi-check-circle"></i> Haldi Ceremony</li>
                            <li><i class="bi bi-check-circle"></i> Wedding Ceremony</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
                <img src="{{ asset('rtech/images/events/coopate-events.jpg') }}" class="img-fluid"
                    alt="cooparate events">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <h3>Cooparate Events</h3>
                <p class="fst-italic">
                    We work on improving the quality and performance of the company. Strategy planning,
                    Creativity knowledge, skill, commitment, and a talented pool of professionals are the
                    underlying strengths f our company. We undertake all kinds of activities related to
                    management at various levels of cooperates needs. depending upon the scope of your
                    request, We may work to identify key details, manage and negotiate contacts and provide
                    on-site event management
                </p>

            </div>
        </div>
        <!--  Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5">
                <img src="{{ asset('rtech/images/events/music-event.jpg') }}" class="img-fluid" alt="Inauguration">
            </div>
            <div class="col-md-7">
                <h3>Inauguration</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Flower Decoration Service</li>
                            <li><i class="bi bi-check-circle"></i> Corporate Event Inaugurations</li>
                            <li><i class="bi bi-check-circle"></i> Balloon Decaration for Inaugurations</li>
                            <li><i class="bi bi-check-circle"></i> P3 LED Wall for events</li>
                            <li><i class="bi bi-check-circle"></i> Nasik Dhol for Inaugurations</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Artist management for Inaugurations</li>
                            <li><i class="bi bi-check-circle"></i> Hostess and master of ceremony
                                arrangment</li>
                            <li><i class="bi bi-check-circle"></i> Celebrity organizer for Inaugurations
                            </li>
                            <li><i class="bi bi-check-circle"></i> Transportation management service</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
                <img src="{{ asset('rtech/images/events/Types-of-Promotional-events.jpg') }}" class="img-fluid"
                    alt="promotion">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <h3>Promotion & Product Launching</h3>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Promoting and Marketing</li>
                    <li><i class="bi bi-check-circle"></i> Event Manager and also valunteers staff</li>
                    <li><i class="bi bi-check-circle"></i> Speakers and host </li>
                    <li><i class="bi bi-check-circle"></i> Promoters and Models</li>
                    <li><i class="bi bi-check-circle"></i> Sound and visual screen</li>
                    <li><i class="bi bi-check-circle"></i> Venue and stage decoration</li>
                    <li><i class="bi bi-check-circle"></i> Food and beverages</li>
                    <li><i class="bi bi-check-circle"></i> Many more other services</li>
                </ul>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5">
                <img src="{{ asset('rtech/images/events/decorations.jpg') }}" class="img-fluid" alt="decoration">
            </div>
            <div class="col-md-7">
                <h3>Decorations</h3>
                <p>
                    Planning similar events each year can become monotonous with many event organizers running out of
                    event decoration
                    ideas. luckily, event design is about creativity. All you need is a little forethought and flare to
                    create a positive,
                    visceral response from your attendees the moment they step into your events. here are our top 10
                    event decoration ideas
                    to wow your attendees at your next event. Event design allows planners to step out of their usual
                    tasks and truly think
                    outside the box.
                    <br>
                    there are endless ideas depending on your budget and event type. we hope these ideas give you a head
                    start in planning
                    your next event and making it memorable.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Food Display</li>
                            <li><i class="bi bi-check-circle"></i> Fabrics</li>
                            <li><i class="bi bi-check-circle"></i> Ceiling</li>
                            <li><i class="bi bi-check-circle"></i> Table Decorations</li>
                            <li><i class="bi bi-check-circle"></i> Seating Arrangments</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Decorative Backdrops</li>
                            <li><i class="bi bi-check-circle"></i> Stage Design</li>
                            <li><i class="bi bi-check-circle"></i> Goodie Bags</li>
                            <li><i class="bi bi-check-circle"></i> Expert Lighting</li>
                            <li><i class="bi bi-check-circle"></i> Incoporate Digital</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Features Item -->


    </div>
</section><!-- End Features Section -->
@endsection

<style>
    .event_management_about .content h3 {
        font-weight: 600;
        font-size: 26px;
        color: #112D4E !important;
    }

    .event_management_about .content p {
        color: #112D4E !important;
    }

    .event_management_about .content ul {
        list-style: none;
        padding: 0;
    }

    .event_management_about .content ul li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 35px;
    }

    .event_management_about .content ul li:first-child {
        margin-top: 35px;
    }

    .event_management_about .content ul i {
        background: #fff;
        box-shadow: 0px 6px 15px #112D4E;
        font-size: 24px;
        padding: 20px;
        margin-right: 15px;
        color: #106eea;
        border-radius: 50px;
    }

    .event_management_about .content ul h5 {
        font-size: 18px;
        color: #112D4E;
    }

    .event_management_about .content ul p {
        font-size: 15px;
    }

    .event_management_about .content p:last-child {
        margin-bottom: 0;
    }

    #event_management_hero {
        background: url("../rtech/images/events/event-background.jpg") center center no-repeat;
        background-size: cover;
        position: relative;
        min-height: 80vh;
    }

    .events_management::before {
        content: "";
        background-color: #112D4E;
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
    }

    .events_management .section-title h2 {
        color: #fff;
        margin: 15px 0 0 0;
        font-size: 32px;
        font-weight: 700;
    }

    .events_management .container {
        position: relative;
    }

    @media (min-width: 1024px) {
        .events_management {
            background-attachment: fixed;
        }
    }

    .features {
        padding-top: 80px;
        background: #ffffff !important;
    }

    .features .features-item+.features-item {
        margin-top: 100px;
    }

    @media (max-width: 640px) {
        .features .features-item+.features-item {
            margin-top: 40px;
        }
    }

    .features .features-item h3 {
        font-weight: 600;
        font-size: 26px;
        color: #001973;
    }

    .features .features-item ul {
        list-style: none;
        padding: 0;
    }

    .features p {
        color: #112D4E
    }

    .features .features-item ul li {
        padding-bottom: 10px;
        color: #112D4E
    }

    .features .features-item ul li:last-child {
        padding-bottom: 0;
    }

    .features .features-item ul i {
        font-size: 20px;
        padding-right: 4px;
        color: var(--color-primary);
    }

    .features .features-item p:last-child {
        margin-bottom: 0;
    }
</style>