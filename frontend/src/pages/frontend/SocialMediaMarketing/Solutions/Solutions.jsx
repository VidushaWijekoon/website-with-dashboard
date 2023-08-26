import React from "react";

import StartUp from "../../../../assets/images/software_dev/solutions/stat_up_business_icon.png";
import Agancies from "../../../../assets/images/software_dev/solutions/agencies.png";
import Enterprises from "../../../../assets/images/software_dev/solutions/enterprises.png";
import SmallMedium from "../../../../assets/images/software_dev/solutions/small_medium.png";

const Solutions = () => {
  return (
    <>
      <section
        id="dev"
        className="dev mt-4 mb-5"
        style={{ background: "rgb(17, 45, 78)" }}
      >
        <div
          className="container-fluid p-0 aos-init aos-animate"
          data-aos="fade-up"
        >
          <header className="section-header p-5">
            <h2
              className="d-flex justify-content-center"
              style={{ fontWeight: "bold", color: "#112D4E" }}
            >
              MARKETING IS AN INVESTMENT IN THE GROWTH OF YOUR BUSINESS
            </h2>
            <p className="text-center">NOT AN EXPENSE</p>
          </header>
        </div>
      </section>
    </>
  );
};

export default Solutions;
