import React from "react";
import "./contact.css";

import MailOutlineIcon from "@mui/icons-material/MailOutline";
import AccessTimeIcon from "@mui/icons-material/AccessTime";
import LocalPhoneIcon from "@mui/icons-material/LocalPhone";
import HomeIcon from "@mui/icons-material/Home";
import { Link } from "react-router-dom";

const Contact = () => {
  return (
    <section id="contact" className="contact mb-5">
      <div
        className="container section-title text-center mb-5"
        data-aos="fade-up"
      >
        <h2>Contact RTech International</h2>
      </div>

      <div className="container mb-5" data-aos="fade-up" data-aos-delay="100">
        <div className="row gy-4">
          <div className="col-lg-6">
            <div className="row gy-4">
              <div className="col-md-6">
                <div className="info-item" data-aos="fade" data-aos-delay="200">
                  <HomeIcon
                    sx={{
                      fontSize: "50px",
                    }}
                  />
                  <h3>Main Branch</h3>
                  <Link
                    to="http://maps.google.com/?q=1200 121 Sheikh Khalifa Bin Zayed St - Al Karama - Dubai"
                    target="_blank"
                  >
                    <p>M26,Crystal Building, Al Karama, Dubai</p>
                  </Link>
                </div>
              </div>

              <div className="col-md-6">
                <div className="info-item" data-aos="fade" data-aos-delay="300">
                  <LocalPhoneIcon
                    sx={{
                      fontSize: "50px",
                    }}
                  />
                  <h3>Call Us</h3>
                  <Link to="tel:971-43-398-7949">
                    <p>+971 (04) 398 7949</p>
                  </Link>
                  <Link to="tel:971-43-398-7949">
                    <p>+971 (052) 984 3844</p>
                  </Link>
                </div>
              </div>

              <div className="col-md-6">
                <div className="info-item" data-aos="fade" data-aos-delay="400">
                  <MailOutlineIcon
                    sx={{
                      fontSize: "50px",
                    }}
                  />
                  <h3>Email Us</h3>
                  <Link to="mailto:info@rtechglobal.ae">
                    <p>info@rtechglobal.ae</p>
                  </Link>
                  <Link to="mailto:sales@rtechglobal.ae">
                    <p>sales@rtechglobal.ae</p>
                  </Link>
                </div>
              </div>

              <div className="col-md-6">
                <div className="info-item" data-aos="fade" data-aos-delay="500">
                  <AccessTimeIcon
                    sx={{
                      fontSize: "50px",
                    }}
                  />
                  <h3>Working Hours</h3>
                  <p>Monday - Saturday</p>
                  <p>9:00AM - 06:00PM</p>
                </div>
              </div>
            </div>
          </div>

          <div className="col-lg-6">
            <form
              action="forms/contact.php"
              method="post"
              className="php-email-form"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div className="row gy-4">
                <div className="col-md-6">
                  <input
                    type="text"
                    name="name"
                    className="form-control"
                    placeholder="Your Name"
                    required
                  />
                </div>

                <div className="col-md-6 ">
                  <input
                    type="email"
                    className="form-control"
                    name="email"
                    placeholder="Your Email"
                    required
                  />
                </div>

                <div className="col-md-12">
                  <input
                    type="text"
                    className="form-control"
                    name="subject"
                    placeholder="Subject"
                    required
                  />
                </div>

                <div className="col-md-12">
                  <textarea
                    className="form-control"
                    name="message"
                    rows="6"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>

                <div className="col-md-12 text-center">
                  <div className="loading">Loading</div>
                  <div className="error-message"></div>
                  <div className="sent-message">
                    Your message has been sent. Thank you!
                  </div>

                  <button type="submit" className="btn btn-sm btn-success">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;
