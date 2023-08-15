import React from "react";
import { Link } from "react-router-dom";
import "./hero.css";

const social_media = [
  { name: "Facebook", to: "https://www.facebook.com/rtechuae" },
  { name: "Instagram", to: "https://www.instagram.com/rtechuae/" },
  { name: "Linked In", to: "https://www.linkedin.com/in/rtechuae" },
  { name: "Twitter", to: "https://twitter.com/Rtechuae" },
];

const Hero = () => {
  return (
    <>
      <section id="hero" className="hero">
        <div className="info d-flex align-items-center">
          <div className="container">
            <div className="row justify-content-center">
              <div className="col-lg-10 text-center hero-main">
                <h2 className="hero-title" data-aos="fade-down">
                  <span>Let's turn your idea into an</span>
                  <span>extraordinary digital product</span>
                </h2>
                <span>
                  We have the experience, knowledge and technical know-how to
                  deliver an innovative digital product that will exceed your
                  expectations.
                </span>
              </div>
            </div>
          </div>
        </div>
        <div className="left-based-text">
          <div className="base-inner">
            <div className="hours">
              <ul className="clearfix">
                <li>
                  <span>MON - SAT</span>
                </li>
                <li>
                  <span>9am - 6pm</span>
                </li>
              </ul>
            </div>
            <div className="social-links">
              <div className="clearfix">
                {social_media.map((item) => (
                  <Link key={item.name} to={item.to} className="mx-3">
                    {item.name}
                  </Link>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
};

export default Hero;
