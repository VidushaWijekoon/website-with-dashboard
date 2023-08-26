import React from "react";

import StartUp from "../../../../assets/images/software_dev/solutions/stat_up_business_icon.png";
import Agancies from "../../../../assets/images/software_dev/solutions/agencies.png";
import Enterprises from "../../../../assets/images/software_dev/solutions/enterprises.png";
import SmallMedium from "../../../../assets/images/software_dev/solutions/small_medium.png";

const Solutions = () => {
  return (
    <>
      <section id="dev" className="dev mt-4 mb-5">
        <div
          className="container-fluid p-0 aos-init aos-animate"
          data-aos="fade-up"
        >
          <header className="section-header p-5">
            <h2
              className="d-flex justify-content-center"
              style={{ fontWeight: "bold", color: "#112D4E" }}
            >
              SOLUTIONS FOR EVERY KIND OF BUSINESS
            </h2>
            <p className="text-center">
              WE CAN HELP ANY KIND OF BUSINESS IN ACHIEVING KEY OBJECTIVES
            </p>
            <p className="text-center">
              At Weblankan, we tailor software to a wide spectrum of individual
              businesses who require personalised solutions. Our client base
              covers an array of customers who benefit from our expertise in
              bespoke software and range from small start-ups to large
              enterprises!
            </p>
          </header>
          <div className="row g-0">
            <div className="col-lg-12" style={{ background: "#112D4E" }}>
              <div className="container p-5">
                <div className="row">
                  <div className="col-md-3 text-center">
                    <img src={StartUp} alt="ENTERPRISES" />
                    <p className="mt-3">START-UP BUSINESSES</p>
                  </div>
                  <div className="col-md-3 text-center">
                    <img src={SmallMedium} alt="SMALL AND MEDIUM BUSINESSES" />
                    <p className="mt-3">SMALL AND MEDIUM BUSINESSES</p>
                  </div>
                  <div className="col-md-3 text-center">
                    <img src={Enterprises} alt="ENTERPRISES" />
                    <p className="mt-3">ENTERPRISES</p>
                  </div>
                  <div className="col-md-3 text-center">
                    <img src={Agancies} alt="AGENCIES" />
                    <p className="mt-3">AGENCIES</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
};

export default Solutions;
