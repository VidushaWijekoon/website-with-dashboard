import React from "react";
import "./us.css";

const Us = () => {
  return (
    <>
      <section id="call-to-action" className="call-to-action">
        <div className="container-fluid">
          <div
            className="row justify-content-center"
            data-aos="zoom-in"
            data-aos-delay="100"
          >
            <div className="col-xl-12">
              <div className="text-center">
                <h1 className="text-uppercase">We are RTech International</h1>
                <h3>
                  RTech International is a leading digital marketing agency and
                  web design company in Dubai(UAE). We specialize in offering
                  bespoke web design and digital marketing solutions that drive
                  your business growth. Our team will work closely with you to
                  understand your business goals and create a digital strategy
                  that aligns with your brand. Whether you need a simple
                  informational site or a complex e-commerce platform, we have
                  the expertise to deliver. Contact RTech International today
                  for all your web design and digital marketing needs.
                </h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="counts" className="counts mb-5">
        <div className="container-fluid">
          <div className="row no-gutters">
            <div className="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div className="count-box text-center">
                <h3>232</h3>
                <p>
                  <strong className="title mb-3">
                    WEB DEVELOPMENT PROJECTS
                  </strong>
                  <br />
                </p>
              </div>
            </div>

            <div className="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div className="count-box text-center">
                <h3>232</h3>
                <p>
                  <strong className="title mb-3">
                    SOFTWARE DEVELOPMENT PROJECTS
                  </strong>
                  <br />
                </p>
              </div>
            </div>

            <div className="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div className="count-box text-center">
                <h3>232</h3>
                <p>
                  <strong className="title mb-3">HAPPY CLIENTS</strong>
                  <br />
                </p>
              </div>
            </div>

            <div className="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
              <div className="count-box text-center">
                <h3>START UP</h3>
                <p>
                  <strong className="title mb-3">YEARS OF EXPERIENCE</strong>
                  <br />
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
};

export default Us;
