@section('title', 'RTech | Software Development')
@extends('layouts.frontend.app')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Software Development in RTech International</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">We create purposeful software solutions that deliver real
                        value to your brand.
                    </h2>
                </div>
                <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('images/software_dev/hero-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts mb-5">
        <div class="container-fluid">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box d-flex">
                        <img src="{{ asset('images/software_dev/count/digital-marketing-companies.png') }}" alt="Software">
                        <p>
                            <strong className="title mb-3">SOFTWARE DEVELOPMENT</strong>
                            <br />
                            Every Business requires tailored software and we’ve got one just
                            for you!
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box d-flex">
                        <img src="{{ asset('images/software_dev/count/rtech_qa.png') }}" alt="QA">
                        <p>
                            <strong className="title">QUALITY ASSURANCE</strong>
                            <br />
                            We are dedicated to ensuring that your business gets the best
                            service.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box d-flex">
                        <img src="{{ asset('images/software_dev/count/application_management.png') }}" alt="QA">
                        <p>
                            <strong className="title">APPLICATION MANAGEMENT</strong>
                            <br />
                            We help manage your applications, whether its in the cloud or
                            even on your own premises!
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box d-flex">
                        <img src="{{ asset('images/software_dev/count/rtech_qa.png') }}" alt="QA" width="100"
                            style="object-fit: contain">
                        <p>
                            <strong className="title">24/7 SUPPORT</strong>
                            <br />
                            We take every step of the journey with you to ensure that your
                            business can strive!
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features mb-5">
        <div class="container">
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-1">
                    <img src="{{ asset('images/software_dev/web_development.png') }}" class="img-fluid"
                        alt="web_development">
                </div>
                <div class="col-md-7 order-2 order-md-2">
                    <h1 class="text-info">CUSTOMIZED SOFTWARE SOLUTIONS THAT HELP DRIVE YOUR BUSINESS!</h1>
                    <p class="fst-italic">
                        TAILOR-MADE TO EVERY NEED OF YOUR BRAND
                    </p>
                    <p>
                        Over the years, bespokesoftware developmenthas proven to be an utmost necessity in any business, as
                        such is required to adapt to the unique requirements that each business has. The use of Software has
                        become a crucial element in the modern context of a company, but most businesses fail to understand
                        its importance and as a result, are unable to solve more modernized problems.
                    </p>
                    <p>
                        As a leadingsoftware developmentcompany in UAE, RTech International create customized software for
                        companies ranging from start-ups to multinationals. Whatever your requirements, we are dedicated to
                        providing effective and sustainable solutions. We first get to know your business and industry
                        better, and on the identification of which aspects require development, based on your requirements,
                        we can design and knit the perfect type of software to ensure that your business runs even smoother!
                        A simple process is driven by an innovative strategy and backed by powerful results!
                    </p>
                </div>
            </div>
            <!-- Features Item -->

        </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Dev Section ======= -->
    <section id="dev" class="dev mt-4 mb-5">
        <div class="container-fluid p-0 aos-init aos-animate" data-aos="fade-up">
            <header class="section-header p-5">
                <h2 class="d-flex justify-content-center" style="font-weight: bold; color: rgb(17, 45, 78);">SOLUTIONS FOR
                    EVERY KIND OF BUSINESS</h2>
                <p class="text-center">WE CAN HELP ANY KIND OF BUSINESS IN ACHIEVING KEY OBJECTIVES</p>
                <p class="text-center">At Weblankan, we tailor software to a wide spectrum of individual businesses who
                    require personalised solutions. Our client base covers an array of customers who benefit from our
                    expertise in bespoke software and range from small start-ups to large enterprises!</p>
            </header>
            <div class="row g-0">
                <div class="col-lg-12" style="background: rgb(17, 45, 78);">
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-md-3 text-center"><img
                                    src="data:image/png;base64,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"
                                    alt="ENTERPRISES">
                                <p class="mt-3">START-UP BUSINESSES</p>
                            </div>
                            <div class="col-md-3 text-center"><img
                                    src="data:image/png;base64,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"
                                    alt="SMALL AND MEDIUM BUSINESSES">
                                <p class="mt-3">SMALL AND MEDIUM BUSINESSES</p>
                            </div>
                            <div class="col-md-3 text-center"><img
                                    src="data:image/png;base64,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"
                                    alt="ENTERPRISES">
                                <p class="mt-3">ENTERPRISES</p>
                            </div>
                            <div class="col-md-3 text-center"><img
                                    src="data:image/png;base64,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"
                                    alt="AGENCIES">
                                <p class="mt-3">AGENCIES</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Dev Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details mb-5">
        <div class="container">
            <div class="row content mb-5">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="{{ asset('images/software_dev/dev/soft-dev1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-4" data-aos="fade-up">
                    <h3 class="text-info">CRM, ERP Development</h3>
                    <p>Everyone struggles when they are in need to find a skilled laborer for day-to-day chores. Whether we
                        need a plumber, painter, carpenter or electrician, we find it difficult to find the best match for
                        our requirements at the right time. At the same time, many skilled laborers in the local areas
                        struggle to find a source of income by selling their skills. Particularly for the skilled laborers
                        in remote areas, the only mode of promotion of their skills is by word of mouth.</p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row content mb-5">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="{{ asset('images/software_dev/dev/soft-dev2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3 class="text-info">System Development</h3>
                    <p>Develop a social learning management system that enhanced their engagement through a collaborative
                        learning journey using the knowledge and expertise of our in-house LMS developers. After including
                        the extensive list of features the customer requested, it was important to maintain the Learning
                        Management System’s strength, usability, and engagement.</p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row content mb-5">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="{{ asset('images/software_dev/dev/soft-dev4.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-4" data-aos="fade-up">
                    <h3 class="text-info">Health Care System</h3>
                    <p>
                        Construction is a construction company that handles construction sites around the island. As the
                        construction company is rapidly advancing with the latest technology, their main priority was to
                        revolutionize their operational procedure.
                    </p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row content mb-5">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="{{ asset('images/software_dev/dev/soft-dev3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3 class="text-info">Constuction System Development</h3>
                    <p>
                        A well-integrated software application was developed to provide solutions for the challenges faced
                        by Dental clinics. New features added to the application have improved patient engagement,
                        scalability, and experience.
                    </p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-check-double text-white"></i>
                            <span class="mx-2 text-white">Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End Details Section -->

    <!-- ======= Projects Section ======= -->
    <section id="project" class="project mt-4">
        <div class="container-fluid p-0 aos-init aos-animate" data-aos="fade-up">
            <header class="section-header p-5">
                <h2 class="d-flex justify-content-center" style="color: rgb(17, 45, 78); font-weight: bold;">THE
                    RESULT-ORIENTED PROCESS AT RTECH INTERNATIONAL</h2>
                <h5 class="text-center text-white">HELPS DEVELOP TOP-NOTCH SOFTWARE TO MEET YOUR COMPANY’S EVERY NEED!</h5>
            </header>
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-md-4 text-center"><img
                                    src="{{ asset('images/software_dev/web-design-company-rtech-14.png') }}"
                                    alt="START-UP BUSINESSES" class="mb-4">
                                <h5 class="text-white">Talk to our Experts</h5>
                                <p class="text-white">Need an innovative solution? Our team will help you from the start to
                                    the finish!</p>
                            </div>
                            <div class="col-md-4 text-center"><img
                                    src="{{ asset('images/software_dev/web-design-company-rtech-15.png') }}"
                                    alt="SMALL AND MEDIUM BUSINESSES" class="mb-4">
                                <h5 class="text-white">Get a Quote</h5>
                                <p class="text-white">Need an innovative solution? Our team will help you from the start to
                                    the finish!</p>
                            </div>
                            <div class="col-md-4 text-center"><img
                                    src="{{ asset('images/software_dev/web-design-company-rtech-16.png') }}"
                                    alt="ENTERPRISES" class="mb-4">
                                <h6 class="text-white">Minimum Viable Product</h6>
                                <p class="text-white">Contact us for your minimum viable product solutions!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

@endsection

@push('css')
    <style>
        /* ------------------------------------- */
        /* Hero */
        /* ------------------------------------- */
        .hero {
            width: 100%;
            height: 70vh;
        }

        .hero h1 {
            margin: 0;
            font-size: 48px;
            font-weight: 700;
            color: var(--medium-blue);
        }

        .hero h2 {
            color: var(--light-blue);
            margin: 15px 0 0 0;
            font-size: 26px;
        }


        .hero .hero-img {
            text-align: right;
        }

        @media (min-width: 1024px) {
            .hero {
                background-attachment: fixed;
            }
        }

        @media (max-width: 991px) {
            .hero {
                height: auto;
                padding: 120px 0 60px 0;
            }

            .hero .hero-img {
                text-align: center;
                margin-top: 80px;
            }

            .hero .hero-img img {
                width: 80%;
            }
        }

        @media (max-width: 768px) {
            .hero {
                text-align: center;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero h2 {
                font-size: 24px;
            }

            .hero .hero-img img {
                width: 100%;
            }
        }


        /* ------------------------------------- */
        /* Count */
        /* ------------------------------------- */
        .counts .count-box {
            box-shadow: var(--boxShadow) !important;
            padding: 30px;
            width: 100%;
        }

        .counts .count-box span {
            font-size: 42px;
            line-height: 24px;
            display: block;
            font-weight: 700;
            color: var(--medium-blue);
            margin-left: 50px;
        }

        .counts .count-box p {
            margin: 0 30px;
            font-family: var(--font-solway);
            font-size: 14px;
        }

        .title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .counts .count-box p strong {
            color: var(--light-blue);
        }

        /* ------------------------------------- */
        /* Count */
        /* ------------------------------------- */

        .features {
            padding-top: 40px;
        }

        .features .features-item+.features-item {
            margin-top: 100px;
        }

        @media (max-width: 640px) {
            .features .features-item+.features-item {
                margin-top: 40px;
            }
        }

        .features .features-item h1 {
            font-weight: 600;
            font-size: 36px;
            color: var(--medium-blue);
        }

        .features .features-item p:last-child {
            margin-bottom: 0;
        }
    </style>
@endpush
