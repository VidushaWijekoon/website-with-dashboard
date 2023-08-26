import React from "react";
import IMG1 from "../../../../assets/images/software_dev/web_development.png";
import "./details.css";

const Details = () => {
  return (
    <section id="details" className="details mb-5">
      <div className="container d-flex">
        <div className="row content">
          <div className="col-md-8 p-4" data-aos="fade-up">
            <h3>WEB DESIGN & DEVELOPMENT</h3>
            <p className="fst-italic">
              WE CREATE INTERACTIVE WEBSITES FOR ANY INDUSTRY
            </p>
            <p>
              In the current digital era, having a website has become an
              indispensable requirement for any business, regardless of size. A
              website and other digital media can be used to execute a range of
              marketing techniques that can significantly accelerate your
              business’s growth. As a premier web development company in United
              Arab Emirates(UAE) Dubai, we understand that a professional
              website has a far-reaching impact compared to any other
              advertising form. Your website functions as the centre of your
              company’s online presence, empowering you to advertise your
              products and services across the internet through various social
              media channels, forums, and pay-per-click advertising programs.
              Our team of expert web designers in United Arab Emirates(UAE)
              Dubai are committed to constructing websites that are visually
              appealing, highly functional, and responsive. We employ the latest
              web development methods and technologies to guarantee that your
              website is fast, secure, and optimized for search engines.
            </p>
            <p className="fst-italic">What is your web development process?</p>
            <p>
              Our web development process starts with understanding your
              business and goals. From there, we create a custom design and
              develop the website using the latest technologies and best
              practices. Our team tests the website thoroughly before launching
              it, and we provide ongoing maintenance and support to ensure it
              continues to perform optimally.
            </p>
            <p className="fst-italic">
              How long does it take to develop a website?
            </p>
            <p>
              The timeline for developing a website depends on several factors,
              including the size and complexity of the site, the features and
              functionality required, and the client’s goals and preferences.
              Generally, we aim to complete projects within a timeframe that is
              mutually agreed upon with the client
            </p>
          </div>
          <div
            className="col-md-4 d-flex h-100 justify-content-center align-items-center"
            data-aos="fade-right"
          >
            <img src={IMG1} className="img-fluid" alt="Img1" />
          </div>
        </div>
      </div>
    </section>
  );
};

export default Details;
