<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <div className="logo">
                            <a>
                                <img src="{{ asset('images/rtlogolight.png') }}" alt="RTech" width="120"
                                    className="mb-3" />
                            </a>
                        </div>
                        <p>
                            <strong>Head Office:</strong> Sharjah Research Technology and
                            Innovation Park ,BLOCK B, Ofc No: B16, Sharjah, UAE
                            <br />
                            <br />
                        </p>
                        <div class="social-links d-flex mt-3">
                            <a href="https://twitter.com/Rtechuae" target="_blank"
                                class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/rtechuae" target="_blank"
                                class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/rtechuae/" target="_blank"
                                class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/rtechuae" target="_blank"
                                class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="https://www.pinterest.com/rtechuae/" target="_blank"
                                class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End footer info column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('pricing') }}">Pricing</a></li>
                        <li><a href="{{ url('pay-online') }}">Pay Online</a></li>
                        <li><a href="{{ url('careers') }}">Careers</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="{{ url('technical-services') }}">Technical Serives</a></li>
                        <li><a href="{{ url('event-management') }}">Event Management</a></li>
                        <li><a href="{{ url('science-technology') }}">Science & Technology</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Term & Conditions</h4>
                    <ul>
                        <li><a href="{{ url('') }}">Help Center</a></li>
                        <li><a href="{{ url('') }}">Terms & Conditions</a></li>
                        <li><a href="{{ url('') }}">Return Policy</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Information Technology</h4>
                    <ul>
                        <li><a href="{{ url('web-development') }}">Web Development</a></li>
                        <li><a href="{{ url('software-development') }}">Software Development</a></li>
                        <li><a href="{{ url('graphic-design') }}">Graphic Design</a></li>
                        <li><a href="{{ url('social-media-marketing') }}">Social Media Marketing</a></li>
                        <li><a href="{{ url('interior-design') }}">Interior Design</a></li>
                    </ul>
                </div><!-- End footer links column-->

            </div>
        </div>
    </div>

    <div className="footer-legal text-center position-relative">
        <div className="container">
            <div className="d-flex justify-content-between align-items-center">
                <div className="copyright">
                    &copy; Copyright
                    <strong>
                        <span className="mx-2">RTech International (2023)</span>
                    </strong>
                    . All Rights Reserved
                </div>
                <div className="credits">
                    Powered By
                    <Link className="mx-2">
                    RTech International <span className="mx-2">1.1v</span>
                    </Link>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->
