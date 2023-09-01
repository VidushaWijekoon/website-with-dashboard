@extends('layouts.frontend.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center mb-5">
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

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg mb-5">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Information Technology</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                            sint occaecati cupiditate</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Science and Technology</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Technical Services</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box icon-box-blue">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Event Management</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= US ======= -->
    <section id="us" class="us mb-5">
        <div class="container-fluid">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-12">
                    <div class="text-center">
                        <h1 class="text-uppercase" style="color: var(--light-blue)">We are RTech International</h1>
                        <h3 class="mt-5" style="font-size: 22px; color: var(--text-white)">RTech International is a
                            leading digital marketing agency
                            and web design company
                            in Dubai(UAE).
                            We specialize in offering bespoke web design and digital marketing solutions that drive your
                            business growth. Our team will work closely with you to understand your business goals and
                            create a digital strategy that aligns with your brand. Whether you need a simple informational
                            site or a complex e-commerce platform, we have the expertise to deliver. Contact RTech
                            International today for all your web design and digital marketing needs.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End US Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <p class="text-uppercase">Web Projects</p>
                            <span class="text-white">232</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <p>SOFTWARE PROJECTS</p>
                            <span class="text-white">232</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <p class="text-uppercase">Hours Of Support</p>
                            <span class="text-white">24/7</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <p>YEARS OF EXPERIENCE</p>
                            <span class="text-white">2</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="mb-5">
        <div class="container-fluid" data-aos="fade-up">

            <div className="container section-title text-center mb-5" data-aos="fade-up">
                <h2 class="d-flex justify-content-center" style="color: var(--text-white)">
                    Contact RTech International
                </h2>
            </div>

            <div class="row about-cols justify-content-center mt-5">

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/software_dev/hero-img.png') }}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Web Development</a></h2>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui
                            ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/software_dev/hero-img.png') }}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Software Development</a></h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem
                            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/software_dev/hero-img.png') }}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Graphic Design</a></h2>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui
                            ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/software_dev/hero-img.png') }}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Interior Design</a></h2>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui
                            ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/software_dev/hero-img.png') }}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Digital Marketing</a></h2>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui
                            ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/software_dev/hero-img.png') }}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Science & Technology</a></h2>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui
                            ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/software_dev/hero-img.png') }}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Technical Services</a></h2>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui
                            ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/software_dev/hero-img.png') }}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Event Management</a></h2>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui
                            ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End About Us Section -->

    <!-- Team Section - Home Page -->
    <section id="team" class="team mb-5">

        <!--  Section Title -->
        <div className="container section-title text-center mb-5" data-aos="fade-up">
            <h2 class="d-flex justify-content-center" style="color: var(--text-white)">
                Team of RTech
            </h2>
        </div><!-- End Section Title -->

        <div class="container mt-5">

            <div class="row gy-5">

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="https://shotkit.com/wp-content/uploads/2021/06/cool-profile-pic-matheus-ferrero.jpeg"
                            class="img-fluid" alt="">
                    </div>
                    <div class="member-info text-center">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire
                            flow</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="https://shotkit.com/wp-content/uploads/2021/06/cool-profile-pic-matheus-ferrero.jpeg"
                            class="img-fluid" alt="">
                    </div>
                    <div class="member-info text-center">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                        <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores
                            exercitationem ut</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="https://shotkit.com/wp-content/uploads/2021/06/cool-profile-pic-matheus-ferrero.jpeg"
                            class="img-fluid" alt="">
                    </div>
                    <div class="member-info text-center">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed
                            facilis at qui</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="https://shotkit.com/wp-content/uploads/2021/06/cool-profile-pic-matheus-ferrero.jpeg"
                            class="img-fluid" alt="">
                    </div>
                    <div class="member-info text-center">
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam
                            consectetur</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                    <div class="member-img">
                        <img src="https://shotkit.com/wp-content/uploads/2021/06/cool-profile-pic-matheus-ferrero.jpeg"
                            class="img-fluid" alt="">
                    </div>
                    <div class="member-info text-center">
                        <h4>Brian Doe</h4>
                        <span>Marketing</span>
                        <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia
                            impedit laborum velit</p>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                    <div class="member-img">
                        <img src="https://shotkit.com/wp-content/uploads/2021/06/cool-profile-pic-matheus-ferrero.jpeg"
                            class="img-fluid" alt="">
                    </div>
                    <div class="member-info text-center">
                        <h4>Josepha Palas</h4>
                        <span>Operation</span>
                        <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit
                            eligendi cupiditate vel</p>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- End Team Section -->

    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

        <!--  Section Title -->
        <div className="container section-title text-center mb-5" data-aos="fade-up">
            <h2 class="d-flex justify-content-center" style="color: var(--text-white)">
                Contact RTech International
            </h2>
        </div>
        <!-- End Section Title -->

        <div class="container-fluid mt-5" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Main Branch</h3>
                                <a href="http://maps.google.com/?q=1200 121 Sheikh Khalifa Bin Zayed St - Al Karama - Dubai"
                                    target="_blank">
                                    <p>M26,Crystal Building, Al Karama, Dubai</p>
                                </a>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <a href="tel:971-43-398-7949">
                                    <p>+971 (04) 398 7949</p>
                                </a>
                                <a href="tel:971-43-398-7949">
                                    <p>+971 (052) 984 3844</p>
                                </a>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <a href="mailto:info@rtechglobal.ae">
                                    <p>info@rtechglobal.ae</p>
                                </a>
                                <a href="mailto:sales@rtechglobal.ae">
                                    <p>sales@rtechglobal.ae</p>
                                </a>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Working Hours</h3>
                                <p>Monday - Saturday</p>
                                <p>9:00AM - 06:00PM</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="#" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
    <!-- End Contact Section -->
@endsection

@push('css')
    <style>
        /* ------------------------------------- */
        /* Hero */
        /* ------------------------------------- */
        #hero {
            width: 100%;
            position: relative;
            overflow: hidden;
            padding: 0;
        }

        #hero::before {
            content: "";
            position: absolute;
            right: -100%;
            top: 20%;
            width: 250%;
            height: 200%;
            z-index: -1;
            background-color: var(--medium-blue);
            transform: skewY(135deg);
        }

        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 40px;
            font-weight: 500;
            line-height: 56px;
            color: var(--text-white);
            font-family: var(--font-solway);
            text-transform: uppercase;
        }

        #hero h2 {
            color: var(--light-blue);
            margin-bottom: 50px;
            font-size: 25px;
            margin-top: 20px;
        }

        @media (max-width: 991px) {
            #hero {
                text-align: center;
            }

            #hero .hero-img {
                text-align: center;
            }

            #hero .hero-img img {
                width: 60%;
            }
        }

        @media (max-width: 768px) {
            #hero h1 {
                font-size: 28px;
                line-height: 36px;
            }

            #hero h2 {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
            }

            #hero .hero-img img {
                width: 70%;
            }
        }

        @media (max-width: 575px) {
            #hero .hero-img img {
                width: 80%;
            }
        }

        /* ------------------------------------- */
        /* About */
        /* ------------------------------------- */

        #about::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 9;
        }

        #about .container {
            position: relative;
            z-index: 10;
        }

        #about .about-col {
            box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
            border: 2px solid var(--dark-blue);
        }

        #about .about-col .img {
            position: relative;
        }

        #about .about-col .img img {
            border-radius: 4px 4px 0 0;
            padding: 10px 10px;
        }

        #about .about-col .icon {
            width: 64px;
            height: 64px;
            text-align: center;
            position: absolute;
            background-color: var(--medium-blue);
            border-radius: 50%;
            border: 4px solid var(--light-blue);
            left: calc(50% - 32px);
            bottom: -30px;
            transition: 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #about .about-col i {
            font-size: 28px;
            line-height: 0;
            color: var(--light-blue);
            transition: 0.3s;
        }

        #about .about-col:hover .icon {
            background-color: var(--dark-blue);
        }

        #about .about-col:hover i {
            color: var(--light-blue);
        }

        #about .about-col h2 {
            color: var(--text-white);
            text-align: center;
            font-weight: 700;
            font-size: 20px;
            padding: 0;
            margin: 40px 0 12px 0;
        }

        #about .about-col h2 a {
            color: var(--text-white);
        }

        #about .about-col h2 a:hover {
            color: var(--dark-blue);
        }

        #about .about-col p {
            font-size: 14px;
            line-height: 24px;
            color: var(--text-white);
            margin-bottom: 0;
            padding: 0 20px 20px 20px;
        }

        /* ------------------------------------- */
        /* Services */
        /* ------------------------------------- */
        .counts {
            padding: 70px 0 60px;
        }

        .counts .count-box {
            display: flex;
            align-items: center;
            padding: 30px;
            width: 100%;
            box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08);
        }

        .counts .count-box i {
            font-size: 42px;
            line-height: 0;
            margin-right: 20px;
            color: var(--darl-blue);
        }

        .counts .count-box span {
            font-size: 36px;
            display: block;
            font-weight: 600;
            color: var(--darl-blue);
        }

        .counts .count-box p {
            padding: 0;
            margin: 0;
            font-family: var(--font-solway);
            font-size: 14px;
        }

        /* ------------------------------------- */
        /* Services */
        /* ------------------------------------- */

        .services .icon-box {
            padding: 30px;
            position: relative;
            overflow: hidden;
            margin: 0;
            background: var(--medium-blue);
            box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
            transition: all 0.3s ease-in-out;
            text-align: center;
            border-bottom: 3px solid var(--light-blue);
        }

        .services .icon-box:hover {
            transform: translateY(-5px);
        }

        .services .icon i {
            font-size: 48px;
            line-height: 1;
            margin-bottom: 15px;
        }

        .services .title {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .services .title a {
            color: var(--text-white);
        }

        .services .description {
            font-size: 15px;
            line-height: 28px;
            margin-bottom: 0;
        }

        .services .icon-box-pink .icon i {
            color: #ff689b;
        }

        .services .icon-box-pink:hover {
            border-color: #ff689b;
        }

        .services .icon-box-cyan .icon i {
            color: #3fcdc7;
        }

        .services .icon-box-cyan:hover {
            border-color: #3fcdc7;
        }

        .services .icon-box-green .icon i {
            color: #41cf2e;
        }

        .services .icon-box-green:hover {
            border-color: #41cf2e;
        }

        .services .icon-box-blue .icon i {
            color: #2282ff;
        }

        .services .icon-box-blue:hover {
            border-color: #2282ff;
        }

        /* ------------------------------------- */
        /* Team */
        /* ------------------------------------- */

        .team .member {
            position: relative;
        }

        .team .member .member-img {
            margin: 0 80px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            border: 4px solid var(--light-blue);
            box-shadow: 0 15px 35px -10px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 1024px) {
            .team .member .member-img {
                margin: 0 60px;
            }
        }

        .team .member .member-img img {
            position: relative;
            z-index: 1;
        }

        .team .member .member-info {
            margin-top: 30px;
        }

        .team .member .member-info h4 {
            color: var(--text-white);
            font-weight: 700;
            margin-bottom: 6px;
            font-size: 18px;
        }

        .team .member .member-info span {
            font-style: italic;
            display: block;
            font-size: 15px;
            color: var(--light-blue);
            margin-bottom: 10px;
        }

        .team .member .member-info p {
            margin-bottom: 0;
            font-size: 14px;
        }

        .team .member:hover .member-img .social {
            padding-bottom: 0;
            visibility: visible;
            opacity: 1;
        }

        /* ------------------------------------- */
        /* Contanct */
        /* ------------------------------------- */

        .contact .info-item {
            box-shadow: -10px -5px 40px 0 rgb(115 104 104 / 10%);
            padding: 30px;
        }

        .contact .info-item i {
            font-size: 38px;
            line-height: 0;
            color: var(--light-blue);
        }

        .contact .info-item h3 {
            color: var(--light-blue);
            font-size: 20px;
            font-weight: 700;
            margin: 20px 0 10px 0;
        }

        .contact .info-item p {
            padding: 0;
            line-height: 24px;
            font-size: 14px;
            margin-bottom: 0;
        }

        .contact .php-email-form {
            padding: 30px;
            height: 100%;
            box-shadow: -10px -5px 40px 0 rgb(115 104 104 / 10%);
            padding: 30px;
        }

        .contact .php-email-form .error-message {
            display: none;
            background: var(--dark-blue);
            color: var(--light-blue);
            text-align: left;
            padding: 15px;
            margin-bottom: 24px;
            font-weight: 600;
        }

        .contact .php-email-form .sent-message {
            display: none;
            background: var(--dark-blue);
            color: var(--light-blue);
            text-align: center;
            padding: 15px;
            margin-bottom: 24px;
            font-weight: 600;
        }

        .contact .php-email-form .loading {
            display: none;
            background: var(--dark-blue);
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
            border: 3px solid var(--dark-blue);
            border-top-color: var(--dark-blue);
            animation: animate-loading 1s linear infinite;
        }

        .contact .php-email-form input[type="text"],
        .contact .php-email-form input[type="email"],
        .contact .php-email-form textarea {
            font-size: 14px;
            padding: 10px 15px;
            box-shadow: none;
            border-radius: 0;
            color: var(--light-blue);
            background-color: rgba(var(--light-blue), 0.5);
            border-color: rgba(var(--light-blue), 0.2);
        }

        .contact .php-email-form input[type="text"]:focus,
        .contact .php-email-form input[type="email"]:focus,
        .contact .php-email-form textarea:focus {
            border-color: var(--color-primary);
        }

        .contact .php-email-form input[type="text"]::-moz-placeholder,
        .contact .php-email-form input[type="email"]::-moz-placeholder,
        .contact .php-email-form textarea::-moz-placeholder {
            color: rgba(var(--color-default-rgb), 0.3);
        }

        .contact .php-email-form input[type="text"]::placeholder,
        .contact .php-email-form input[type="email"]::placeholder,
        .contact .php-email-form textarea::placeholder {
            color: rgba(var(--color-default-rgb), 0.3);
        }

        .contact .php-email-form button[type="submit"] {
            background: var(--medium-blue);
            color: var(--text-white);
            border: 0;
            padding: 5px 15px;
            transition: 0.4s;
            border-radius: 4px;
        }

        .contact .php-email-form button[type="submit"]:hover {
            background: rgba(var(--color-primary-rgb), 0.8);
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
@endpush
