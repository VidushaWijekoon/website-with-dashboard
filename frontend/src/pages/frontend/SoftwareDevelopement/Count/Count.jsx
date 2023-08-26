import React from "react";
import "./count.css";

import QA from "../../../../assets/images/software_dev/count/rtech_qa.png";
import Soft from "../../../../assets/images/software_dev/count/digital-marketing-companies.png";
import App from "../../../../assets/images/software_dev/count/application_management.png";
import Support from "../../../../assets/images/software_dev/count/rtech247.png";

const Count = () => {
  return (
    <section id="counts" className="counts mb-5">
      <div className="container-fluid">
        <div className="row no-gutters">
          <div className="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div className="count-box d-flex">
              <img src={Soft} alt="Soft" style={{ objectFit: "contain" }} />
              <span
                data-purecounter-start="0"
                data-purecounter-end="232"
                data-purecounter-duration="1"
                className="purecounter"
              ></span>
              <p>
                <strong className="title mb-3">SOFTWARE DEVELOPMENT</strong>
                <br />
                Every Business requires tailored software and we’ve got one just
                for you!
              </p>
            </div>
          </div>

          <div className="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div className="count-box d-flex">
              <img src={QA} alt="QA" style={{ objectFit: "contain" }} />
              <span
                data-purecounter-start="0"
                data-purecounter-end="521"
                data-purecounter-duration="1"
                className="purecounter"
              ></span>
              <p>
                <strong className="title">QUALITY ASSURANCE</strong>
                <br />
                We are dedicated to ensuring that your business gets the best
                service.
              </p>
            </div>
          </div>

          <div className="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div className="count-box d-flex">
              <img src={App} alt="App" style={{ objectFit: "contain" }} />
              <span
                data-purecounter-start="0"
                data-purecounter-end="1463"
                data-purecounter-duration="1"
                className="purecounter"
              ></span>
              <p>
                <strong className="title">APPLICATION MANAGEMENT</strong>
                <br />
                We help manage your applications, whether its in the cloud or
                even on your own premises!
              </p>
            </div>
          </div>

          <div className="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div className="count-box d-flex">
              <img
                src={Support}
                alt="Support"
                style={{ objectFit: "contain" }}
              />
              <span
                data-purecounter-start="0"
                data-purecounter-end="15"
                data-purecounter-duration="1"
                className="purecounter"
              ></span>
              <p>
                <strong className="title">24/7 SUPPORT</strong>
                <br />
                We take every step of the journey with you to ensure that your
                business can strive!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Count;
