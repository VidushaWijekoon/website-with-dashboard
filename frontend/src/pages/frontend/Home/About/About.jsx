import React from "react";
import "./about.css";

import { Link } from "react-router-dom";

import LanguageIcon from "@mui/icons-material/Language";

const About = () => {
  return (
    <>
      <section id="services" className="services mb-5">
        <div className="container-fluid">
          <div className="row justify-content-center">
            {serve.map((e) => (
              <div className="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                <div className="icon-box">
                  <div className="icon">
                    <img src={e.icon} alt="" />
                  </div>
                  <h4>
                    <Link to={e.url}>{e.title}</Link>
                  </h4>
                  <p>{e.description}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
    </>
  );
};

export default About;

const serve = [
  {
    id: "1",
    title: "Web Developement",
    icon: "https://www.weblankan.com/wp-content/uploads/2022/04/content-1.png",
    description:
      "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
    pic: "https://www.weblankan.com/wp-content/uploads/2022/04/content-1.png",
    url: "web-development",
  },
  {
    id: "2",
    title: "Software Development",
    icon: "https://www.weblankan.com/wp-content/uploads/2022/04/strategy.png",
    description:
      "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
    pic: "https://www.weblankan.com/wp-content/uploads/2022/04/strategy.png",
    url: "software-development",
  },
  {
    id: "3",
    title: "Social Media Marketing",
    icon: "https://www.weblankan.com/wp-content/uploads/2022/04/search-engine.png",
    description:
      "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
    url: "social-media-marketing",
  },
  {
    id: "4",
    title: "Graphic Design",
    icon: "https://www.weblankan.com/wp-content/uploads/2022/04/puzzle.png",
    description:
      "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
    pic: "https://www.weblankan.com/wp-content/uploads/2022/04/puzzle.png",
    url: "graphic-design",
  },
  {
    id: "5",
    title: "Interior Design",
    icon: "https://www.weblankan.com/wp-content/uploads/2022/04/crm.png",
    description:
      "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
    pic: "https://www.weblankan.com/wp-content/uploads/2022/04/crm.png",
    url: "interior-design",
  },
  {
    id: "6",
    title: "Technical Services",
    icon: "https://www.weblankan.com/wp-content/uploads/2022/09/digital-marketing-companies-in-sri-lanka-14.png",
    description:
      "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
    pic: "https://www.weblankan.com/wp-content/uploads/2022/09/digital-marketing-companies-in-sri-lanka-14.png",
    url: "technical-services",
  },
  {
    id: "1",
    title: "Event Management",
    icon: "https://www.weblankan.com/wp-content/uploads/2022/09/digital-marketing-companies-in-sri-lanka-15.png",
    description:
      "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
    pic: "https://www.weblankan.com/wp-content/uploads/2022/09/digital-marketing-companies-in-sri-lanka-15.png",
    url: "event-management",
  },
];
