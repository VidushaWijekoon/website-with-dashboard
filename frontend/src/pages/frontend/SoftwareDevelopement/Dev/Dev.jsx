import React from "react";

import img1 from "../../../../assets/images/software_dev/web-design-company-rtech-14.png";
import img2 from "../../../../assets/images/software_dev/web-design-company-rtech-15.png";
import img3 from "../../../../assets/images/software_dev/web-design-company-rtech-16.png";

const Dev = () => {
  return (
    <section id="dev" className="dev mt-4">
      <div
        className="container-fluid p-0 aos-init aos-animate"
        data-aos="fade-up"
      >
        <header className="section-header p-5">
          <h2
            className="d-flex justify-content-center"
            style={{ color: "#112D4E", fontWeight: "bold" }}
          >
            THE RESULT-ORIENTED PROCESS AT RTECH INTERNATIONAL
          </h2>
          <h5 className="text-center text-white">
            HELPS DEVELOP TOP-NOTCH SOFTWARE TO MEET YOUR COMPANY’S EVERY NEED!
          </h5>
        </header>
        <div class="row g-0">
          <div class="col-lg-12">
            <div class="container p-5">
              <div class="row">
                <div class="col-md-4 text-center">
                  <img src={img1} alt="START-UP BUSINESSES" class="mb-4" />
                  <h5 class="text-white">Talk to our Experts</h5>
                  <p class="text-white">
                    Need an innovative solution? Our team will help you from the
                    start to the finish!
                  </p>
                </div>
                <div class="col-md-4 text-center">
                  <img
                    src={img2}
                    alt="SMALL AND MEDIUM BUSINESSES"
                    class="mb-4"
                  />
                  <h5 class="text-white">Get a Quote</h5>
                  <p class="text-white">
                    Need an innovative solution? Our team will help you from the
                    start to the finish!
                  </p>
                </div>
                <div class="col-md-4 text-center">
                  <img src={img3} alt="ENTERPRISES" class="mb-4" />
                  <h6 class="text-white">Minimum Viable Product</h6>
                  <p class="text-white">
                    Contact us for your minimum viable product solutions!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Dev;
