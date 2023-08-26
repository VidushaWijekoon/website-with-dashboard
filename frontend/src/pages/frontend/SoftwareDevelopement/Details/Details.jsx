import React from "react";
import IMG1 from "../../../../assets/images/software_dev/web_development.png";
import "./details.css";

const Details = () => {
  return (
    <section id="details" className="details mb-5">
      <div className="container">
        <div className="row content">
          <div className="col-md-4" data-aos="fade-right">
            <img src={IMG1} className="img-fluid" alt="Img1" />
          </div>
          <div className="col-md-8 p-4" data-aos="fade-up">
            <h3>
              CUSTOMIZED SOFTWARE SOLUTIONS THAT HELP DRIVE YOUR BUSINESS!
            </h3>
            <p className="fst-italic">
              TAILOR-MADE TO EVERY NEED OF YOUR BRAND
            </p>
            <p>
              Over the years, bespoke
              <strong className="text-italic mx-1">software development</strong>
              has proven to be an utmost necessity in any business, as such is
              required to adapt to the unique requirements that each business
              has. The use of Software has become a crucial element in the
              modern context of a company, but most businesses fail to
              understand its importance and as a result, are unable to solve
              more modernized problems.
            </p>
            <p>
              As a leading
              <strong className="text-italic mx-1">software development</strong>
              company in UAE, RTech International create customized software for
              companies ranging from start-ups to multinationals. Whatever your
              requirements, we are dedicated to providing effective and
              sustainable solutions. We first get to know your business and
              industry better, and on the identification of which aspects
              require development, based on your requirements, we can design and
              knit the perfect type of software to ensure that your business
              runs even smoother! A simple process is driven by an innovative
              strategy and backed by powerful results!
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Details;
