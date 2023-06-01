@extends('layouts.frontend.app')
@section('title', 'Rtech | Technical Services')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero hero-animated" class=" hero-animated d-flex align-items-center">
    <div class="container-fluid p-5" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
            <div class="col-md-5 col-sm-6 d-flex justify-content-center align-items-center">
                <div class="">
                    <h1>Welcome to
                        <span>Rtech Technical Services</span>
                    </h1>
                </div>
            </div>
            <div class="col-md-7 col-sm-6">
                <img src="{{ asset('frontend/images/information_technology/rtect-software-development.png') }}"
                    alt="rtech_web_dev" class="web_dev_hero_img">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= On Focus Section ======= -->
<section id="onfocus" class="onfocus">
    <div class="container-fluid p-0" data-aos="fade-up">

        <div class="row g-0">
            <div class="col-lg-4 position-relative d-flex align-items-center ">
                <img src="https://media.subsea.org/2021/02/Mechanical-Engineering-Jobs.jpg" alt="" width="100%">
            </div>
            <div class="col-lg-8">
                <div class="content d-flex flex-column justify-content-center h-100">
                    <h3>TECHNICAL SERVICES</h3>
                    <p class="">
                        Technical services generally refer to a range of services that are provided to clients or
                        customers to support the use
                        and maintenance of technical products or systems. These services may include installation,
                        configuration, maintenance,
                        repair, training, and support for hardware, software, and other technical products.
                    </p>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>
                            IT support services: These are services that provide technical assistance and support to
                            users of computer systems,
                            software, and hardware.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <P>
                            Network services: These are services that help to design, install, configure, and maintain
                            computer networks and related
                            equipment.
                        </P>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <P>
                            Maintenance and repair services: These services are provided to fix technical issues or
                            defects in products and
                            equipment.
                        </P>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <P>
                            Technical training services: These services help customers to learn how to use technical
                            products or systems
                            effectively.
                        </P>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <P>
                            Consulting services: These services provide expert advice and guidance on technical matters,
                            such as system design,
                            product selection, and project management.
                        </P>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ======= Features Section ======= -->
<section id="features" class="features mb-5">
    <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

            <div class="col-md-5">
                <img src="https://www.ivytech.edu/media/0c1ntx10/mechanical-engineering-technology-1.jpg?width=1200&height=801.7021276595744"
                    class="img-fluid" alt="digital marketing">
            </div>
            <div class="col-md-7">
                <h3>OUR PROCESS</h3>
                <p class="text-black">
                    Our process is simple and transparent. From the initial step to the final step, our well-experienced
                    and friendly team
                    is here to guide you until you achieve the desired goals of your brand.
                </p>

            </div>
        </div>
        <!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
                <img src="https://www.servicemaxheating.com/img/corporate/images/AC-Maintenance-Professional-12695.jpg?t=1585705845"
                    class="img-fluid" alt="digital marketing">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <h3>MECHANICAL WORK</h3>
                <div class="text-black">
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>Heating, Ventilation & Air Condition (HVAC) System</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>All type of Air Conditioning System (Centerlized, Wall-Mounted, Split System, CC, Ducted)</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>Chilled water system, chiller plants, cooling towers, FAU, AHU, FCU</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>Refrigeration and low temperature projects</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>Duct works & installations</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>Ventilation system</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>Inspection, Surveys & Reports of existing installations</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5">
                <img src="https://library.homeserve.com/m/77ee2d141b4c672b/Blog-GettyImages-1150199946.jpg"
                    class="img-fluid" alt="digital marketing">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <h3>PLUMBING WORK</h3>

                <div class="text-black">
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <P>Plumbing services offerd include the complete installation of water supply and drainage
                            piping, equipment, fixtures and accessories</P>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>
                            Repair & Replacement of water heaters, water pumps, pipes, tanks, sanitary-water ware
                            fittings & Optimizing Social Media Channels</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
                <img src="https://www.mfmgroup.co.uk/wp-content/webpc-passthru.php?src=https://www.mfmgroup.co.uk/wp-content/uploads/electrical-installation-company.jpg&nocache=1"
                    class="img-fluid" alt="digital marketing">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <h3>ELECTRICAL WORK</h3>
                <div class="text-black">
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <P>
                            Electrical services offered include the preparation of shop drawing, and load schedules as
                            applicable, supple and installation of main & sub-main distribution boards, final
                            distribution boards, main cabling and final circuit wiring, electrical accessories and
                            devices, lighting fixtures and associated devices etc in-line with the project
                            specifications and requirments.
                        </P>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>
                            Main and power upgrade in complinace with DEWA/SEWA/FEWA regulations. Sizing desgin, laying,
                            termination & testing of MV, LV and control cables
                        </p>
                    </div>

                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>
                            Materials shall be in conformance and in compliance with the requirements of clients and
                            project specification and shall meet the require quality standards.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5">
                <img src="https://rapidfacilities.co.nz/wp-content/uploads/2022/04/Building-maintenance-services-1.jpg"
                    class="img-fluid" alt="digital marketing">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <h3>ANNUAL MAINTENANCE OF BUILDING</h3>
                <div class="text-black">
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>We are offering annual building maintanance contracts and technical solutions right from
                            concept to completion of projects of the following natures</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Item -->

        <!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
                <img src="https://www.computercareers.org/wp-content/uploads/Network-Engineer-Laptops.jpg"
                    class="img-fluid" alt="digital marketing">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <h3>Laptop Repairing & Networking</h3>
                <div class="text-black">
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <P>
                            Laptop repair refers to the process of fixing or resolving issues with a laptop computer. It
                            involves diagnosing
                            hardware or software problems, troubleshooting and resolving issues, and performing
                            necessary repairs or replacements to
                            ensure the laptop functions properly. Laptop repair can include various tasks such as
                            replacing faulty components like
                            the screen, keyboard, battery, or hard drive, repairing or upgrading internal hardware,
                            resolving software conflicts or
                            errors, and addressing connectivity issues.

                        </P>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>
                            Diagnosing hardware problems: This includes identifying and fixing issues with components
                            such as the screen, keyboard,
                            touchpad, battery, power adapter, motherboard, RAM, hard drive, or other internal
                            components.
                        </p>
                    </div>

                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>
                            Screen repair or replacement: If the laptop screen is cracked, malfunctioning, or displaying
                            abnormal images, it may
                            need to be repaired or replaced.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-minus mx-2 p-1"></i>
                        <p>
                            Keyboard replacement: If the keyboard is not working properly due to stuck keys,
                            non-responsive keys, or liquid damage,
                            it may need to be replaced.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Features Section -->

<!-- ======= Services Section 1 ======= -->
<section id="service" class="services pt-0 mb-5">
    <div class="container" data-aos="fade-up">

        <header class="section-header p-5">
            <h2 class="d-flex justify-content-center text-uppercase" style="color: #112D4E; font-weight: bold">Rtech
                International
                Technical Service Offers</h2>
        </header>

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/Domal-Aluminium-Partitions.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>ALUMINIUM WORK</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/structural-steel-fabrication.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>STEEL FABRICATION WORK</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/office-cabin-partition6.webp') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>GYPSUM PARTION WORK</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/blue-paint.webp') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>PAINTING WORK</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/carpentry-cn-5089.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>CARPENTRY WORK</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/Wall-and-floor-tiler.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>FLOOR AND WALL TAILING</h3>
                </div>
            </div><!-- End Card Item -->

        </div>

    </div>
</section>
<!-- End Services Section -->

<!-- ======= Services Section 2 ======= -->
<section id="service" class="services pt-0 mb-5">
    <div class="container" data-aos="fade-up">

        <header class="section-header p-5">
            <h2 class="d-flex justify-content-center text-uppercase" style="color: #112D4E; font-weight: bold">Rtech
                International Technical PLASTERING</h2>
        </header>

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/CLAY-PLASTERING.webp') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>CLAY PLASTERING</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/GYPSUM-PLASTERING.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>GYPSUM PLASTERING</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/lime-plaster-being-applied.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>LIME PLASTERING</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/CEMENT-PLASTERING.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>CEMENT PLASTERING</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/homeguide-red-brick-wall-privacy-fence.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>BRICKING WORK</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/circular-column.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>COLUMNS</h3>
                </div>
            </div><!-- End Card Item -->

        </div>

    </div>
</section>
<!-- End Services Section -->

<!-- ======= Services Section 3 ======= -->
<section id="service" class="services pt-0 mb-5">
    <div class="container" data-aos="fade-up">

        <header class="section-header p-5">
            <h2 class="d-flex justify-content-center text-uppercase" style="color: #112D4E; font-weight: bold">Rtech
                International Technical interior decoration work</h2>
        </header>

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/pillars.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>PILLAR WORK</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/Paver-Block.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>PAVING BLOCKS - ROAD WORKS</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/Landscaping-Work-Dubai.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>LANDSCAPING WORKS</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/garden-color-palette.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>GARDENING ARRAGEMENTS</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/False-ceiling.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>FALSE CEILING</h3>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('frontend/images/science_technology/services/Wall-Cladding_0000_Wall-Cladding.jpg') }}"
                            alt="service_1" class="img-fluid">
                    </div>
                    <h3>WALL CLADDING WORKS</h3>
                </div>
            </div><!-- End Card Item -->

        </div>

    </div>
</section>
<!-- End Services Section -->

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services" style="background:#333">
    <div class="container p-5">

        <div class="row gy-4 ">
            <h1 class="title d-flex justify-content-center">MARKETING IS AN INVESTMENT IN THE GROWTH OF YOUR BUSINESS
            </h1>
        </div>

    </div>
</section>
<!-- End Featured Services Section -->

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
        min-height: 80vh;
        background: url('https://cutewallpaper.org/21/cool-gif-background/Cool-Background-GIF.gif');
        background-size: cover;
        position: relative;
        padding: 70px 0 60px;
    }

    .hero-animated h2 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 300;
        color: #112D4E;
        font-family: "Poppins", sans-serif;
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
        color: #112D4E;
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

    .title {
        font-weight: 700;
        margin-bottom: 10px;
        font-size: 32px;
        color: #3F72AF;
        transition: 0.3s;
    }

    /*--------------------------------------------------------------
        # Featured Services
        --------------------------------------------------------------*/
    .featured-services .icon-box {
        padding: 30px;
        position: relative;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
    }

    .featured-services .icon-box::before {
        content: "";
        position: absolute;
        background: #cbe0fb;
        right: 0;
        left: 0;
        bottom: 0;
        top: 100%;
        transition: all 0.3s;
        z-index: -1;
    }

    .featured-services .icon-box:hover::before {
        background: #106eea;
        top: 0;
        border-radius: 0px;
    }

    .featured-services .icon {
        margin-bottom: 15px;
    }

    .featured-services .icon i {
        font-size: 48px;
        line-height: 1;
        color: #106eea;
        transition: all 0.3s ease-in-out;
    }

    .featured-services .title {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 18px;
    }

    .featured-services .title a {
        color: #111;
    }

    .featured-services .description {
        font-size: 15px;
        line-height: 28px;
        margin-bottom: 0;
    }

    .featured-services .icon-box:hover .title a,
    .featured-services .icon-box:hover .description {
        color: #fff;
    }

    .featured-services .icon-box:hover .icon i {
        color: #fff;
    }

    /*--------------------------------------------------------------
        # Features Section
        --------------------------------------------------------------*/
    .features {
        padding-top: 80px;
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

    .features .features-item ul li {
        padding-bottom: 10px;
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

    /*--------------------------------------------------------------
    # Services Section
    --------------------------------------------------------------*/

    .services .card {
        border: 1px solid rgba(14, 29, 52, 0.15);
        background: #fff;
        position: relative;
        border-radius: 0;
        height: 100%;
    }

    .services .card .card-img {
        overflow: hidden;
        margin-bottom: 15px;
        border-radius: 0;
    }

    .services .card .card-img img {
        transition: 0.3s ease-in-out;
    }

    .services .card h3 {
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 5px;
        padding: 10px 30px;
        text-transform: uppercase;
        color: #112D4E;
    }

    .services .card h3:hover {
        color: #02a4d6;
    }

    .services .card a {
        color: #112D4E;
        transition: 0.3;
    }

    .services .card a:hover {
        color: var(--color-primary);
    }

    .services .card p {
        padding: 0 30px;
        margin-bottom: 30px;
        font-size: 15px;
        color: #112D4E;
    }

    .services .card:hover .card-img img {
        transform: scale(1.1);
    }
</style>
@endpush