import React from "react";
import Software_Hero from "../../../../assets/images/software_dev/hero-img.png";

const Hero = () => {
  return (
    <section id="web_hero" className="d-flex align-items-center mb-5">
      <div className="container">
        <div className="row">
          <div className="col-lg-6 d-lg-flex  " data-aos="fade-up">
            <img src={Software_Hero} className="img-fluid" alt="hero img" />
          </div>
          <div
            className="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 "
            data-aos="fade-up"
          >
            <div>
              <h1>Welcome to Rtech Web Design & Web Development</h1>
              <h2>
                Let the whole world know about your brand with a unique and
                performance-driven website.
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
