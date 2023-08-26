import React from "react";
import "./hero.css";

const Hero = () => {
  return (
    <section id="hero" className="d-flex align-items-center mb-5">
      <div className="container">
        <div className="row">
          <div
            className="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up"
          >
            <div>
              <h3>
                Best Digital Marketing Agency in United Arab Emirates(UAE)
              </h3>
              <span>
                Establish the online presence of your brand and drive growth
                across multiple digital channels.
              </span>
            </div>
          </div>
          <div
            className="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
            data-aos="fade-up"
          >
            <img
              src="https://www.weblankan.com/wp-content/uploads/2022/09/web-design-sri-lanka-1.png"
              className="img-fluid"
              alt="hero img"
            />
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
