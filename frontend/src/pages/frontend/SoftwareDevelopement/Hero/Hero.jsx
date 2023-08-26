import React from "react";
import "./hero.css";
import Software_Hero from "../../../../assets/images/software_dev/hero-img.png";

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
              <h1>Software Development in RTech International</h1>
              <h2>
                We create purposeful software solutions that deliver real value
                to your brand.
              </h2>
            </div>
          </div>
          <div
            className="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
            data-aos="fade-up"
          >
            <img src={Software_Hero} className="img-fluid" alt="hero img" />
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
