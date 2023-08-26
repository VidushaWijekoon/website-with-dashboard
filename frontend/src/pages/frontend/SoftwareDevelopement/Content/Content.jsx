import React from "react";
import "./content.css";
import DoneAllIcon from "@mui/icons-material/DoneAll";

import dev1 from "../../../../assets/images/software_dev/dev/soft-dev1.png";
import dev2 from "../../../../assets/images/software_dev/dev/soft-dev2.png";
import dev3 from "../../../../assets/images/software_dev/dev/soft-dev3.png";
import dev4 from "../../../../assets/images/software_dev/dev/soft-dev4.png";

const Content = () => {
  return (
    <section id="details" className="details mb-5">
      <div className="container">
        <div className="row content">
          <div className="col-md-4" data-aos="fade-right">
            <img src={dev4} className="img-fluid" alt="" />
          </div>
          <div className="col-md-8 pt-4" data-aos="fade-up">
            <h3>CRM, ERP Development</h3>
            <p>
              Everyone struggles when they are in need to find a skilled laborer
              for day-to-day chores. Whether we need a plumber, painter,
              carpenter or electrician, we find it difficult to find the best
              match for our requirements at the right time. At the same time,
              many skilled laborers in the local areas struggle to find a source
              of income by selling their skills. Particularly for the skilled
              laborers in remote areas, the only mode of promotion of their
              skills is by word of mouth.
            </p>
            <ul>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
            </ul>
          </div>
        </div>

        <div className="row content">
          <div className="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src={dev3} className="img-fluid" alt="" />
          </div>
          <div className="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>System Development</h3>
            <p>
              Develop a social learning management system that enhanced their
              engagement through a collaborative learning journey using the
              knowledge and expertise of our in-house LMS developers. After
              including the extensive list of features the customer requested,
              it was important to maintain the Learning Management System’s
              strength, usability, and engagement.
            </p>
            <ul>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
            </ul>
          </div>
        </div>

        <div className="row content">
          <div className="col-md-4" data-aos="fade-right">
            <img src={dev2} className="img-fluid" alt="" />
          </div>
          <div className="col-md-8 pt-5" data-aos="fade-up">
            <h3>Constuction System Development</h3>
            <p>
              Construction is a construction company that handles construction
              sites around the island. As the construction company is rapidly
              advancing with the latest technology, their main priority was to
              revolutionize their operational procedure.
            </p>
            <ul>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
            </ul>
          </div>
        </div>

        <div className="row content">
          <div className="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src={dev1} className="img-fluid" alt="" />
          </div>
          <div className="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Health Care System</h3>
            <p>
              A well-integrated software application was developed to provide
              solutions for the challenges faced by Dental clinics. New features
              added to the application have improved patient engagement,
              scalability, and experience.
            </p>
            <ul>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
              <li>
                <DoneAllIcon />
                <span className="mx-2">
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Content;
