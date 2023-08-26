import React from "react";
import robot from "../../../../assets/images/robot_1.png";
import "./hero.css";

const Hero = () => {
  return (
    <div className="hero mb-5" id="hero">
      <div
        className="hero-container container-fluid"
        data-aos="zoom-in"
        data-aos-delay="100"
      >
        <div className="row justify-content-center align-items-center">
          <div className="col-md-6">
            <h1 className="mb-4 pb-0">
              Let's turn your idea into an
              <br />
              <span>extraordinary digital product</span>
            </h1>
            <p className="mb-4 pb-0">
              We have the experience, knowledge and technical know-how to
              deliver an innovative digital product that will exceed your
              expectations.
            </p>
          </div>
          <div className="col-md-6 hero-img">
            <img src={robot} alt="Hero" style={{ width: "100%" }} />
          </div>
        </div>
      </div>
    </div>
  );
};

export default Hero;
