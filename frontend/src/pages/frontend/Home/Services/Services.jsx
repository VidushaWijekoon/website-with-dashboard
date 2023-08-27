import React from "react";
import "./services.css";
import { Link } from "react-router-dom";

import PsychologyIcon from "@mui/icons-material/Psychology";
import SettingsSuggestIcon from "@mui/icons-material/SettingsSuggest";
import EmojiEventsIcon from "@mui/icons-material/EmojiEvents";
import SignpostIcon from "@mui/icons-material/Signpost";

const Services = () => {
  return (
    <section id="featured-services" className="featured-services mb-5">
      <div className="container">
        <div className="row gy-4">
          {services.map((service, index) => (
            <div className="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
              <div className="service-item position-relative">
                <div className="icon">{service.icon}</div>
                <h4>
                  <Link to={service.link} className="stretched-link">
                    {service.title}
                  </Link>
                </h4>
                <p>{service.description}</p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;

const services = [
  {
    id: "IT",
    title: "Information Technology",
    description:
      "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis",
    link: "",
    icon: <PsychologyIcon sx={{ fontSize: "66px" }} />,
  },
  {
    id: "Technical Services",
    title: "Technical Services",
    description:
      "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis",
    link: "technical-services",
    icon: <SettingsSuggestIcon sx={{ fontSize: "66px" }} />,
  },
  {
    id: "Event-Management",
    title: "Event Management",
    description:
      "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis",
    link: "event-management",
    icon: <EmojiEventsIcon sx={{ fontSize: "66px" }} />,
  },
  {
    id: "Blog",
    title: "Blog",
    description:
      "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis",
    link: "blog",
    icon: <SignpostIcon sx={{ fontSize: "66px" }} />,
  },
];
