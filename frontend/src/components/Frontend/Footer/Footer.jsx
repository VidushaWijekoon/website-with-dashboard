import React from "react";
import Logo from "../../../assets/rtlogolight.png";
import { Link } from "react-router-dom";
import "./footer.css";

import FacebookIcon from "@mui/icons-material/Facebook";
import InstagramIcon from "@mui/icons-material/Instagram";
import TwitterIcon from "@mui/icons-material/Twitter";
import PinterestIcon from "@mui/icons-material/Pinterest";
import LinkedInIcon from "@mui/icons-material/LinkedIn";

const Footer = () => {
  return (
    <footer id="footer" className="footer">
      <div className="footer-content position-relative">
        <div className="container">
          <div className="row">
            <div className="col-lg-4 col-md-6">
              <div className="footer-info">
                <div className="logo">
                  <Link>
                    <img src={Logo} alt="RTech" width={100} className="mb-3" />
                  </Link>
                </div>
                <p>
                  A108 Adam Street <br />
                  NY 535022, USA
                  <br />
                  <br />
                  <strong>Phone:</strong> +1 5589 55488 55
                  <br />
                  <strong>Email:</strong> info@example.com
                  <br />
                </p>
                <div className="social-links d-flex mt-3">
                  {socialMedia.map((social, index) => (
                    <Link
                      target="_blank"
                      to={social.link}
                      className="d-flex align-items-center justify-content-center"
                    >
                      {social.icon}
                    </Link>
                  ))}
                </div>
              </div>
            </div>

            {footerLinks.map((footerlink) => (
              <div className="col-lg-2 col-md-3 footer-links">
                <div key={footerlink.title}>
                  <h4>{footerlink.title}</h4>
                  {footerlink.links.map((link, index) => (
                    <ul>
                      <li key={link.name}>
                        <Link to={link.link} className="footer-nav-links">
                          {link.name}
                        </Link>
                      </li>
                    </ul>
                  ))}
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;

const footerLinks = [
  {
    title: "Useful Links",
    links: [
      {
        name: "Home",
        link: "/",
      },
      {
        name: "Pricing",
        link: "pricing",
      },
      {
        name: "Pay Online",
        link: "pay-online",
      },
      {
        name: "Careers",
        link: "careers",
      },
      {
        name: "Login",
        link: "login",
      },
    ],
  },
  {
    title: "Our Services",
    links: [
      {
        name: "Technical Serives",
        link: "technical-services",
      },
      {
        name: "Event Management",
        link: "event-management",
      },
      {
        name: "Blog",
        link: "blog",
      },
    ],
  },
  {
    title: "Term & Conditions",
    links: [
      {
        name: "Help Center",
        link: "help-center",
      },
      {
        name: "Terms & Conditions",
        link: "terms-conditions",
      },
      {
        name: "Return Policy",
        link: "return-policy",
      },
    ],
  },
  {
    title: "Information Technology",
    links: [
      {
        name: "Web Development",
        link: "web-development",
      },
      {
        name: "Software Development",
        link: "software-development",
      },
      {
        name: "Graphic Design",
        link: "graphic-design",
      },
      {
        name: "Social Media Marketing",
        link: "social-media-marketing",
      },
      {
        name: "Interior Design",
        link: "interior-design",
      },
    ],
  },
];

const socialMedia = [
  {
    id: "social-media-1",
    icon: <InstagramIcon />,
    link: "https://www.instagram.com/rtechuae/",
  },
  {
    id: "social-media-2",
    icon: <FacebookIcon />,
    link: "https://www.facebook.com/rtechuae",
  },
  {
    id: "social-media-3",
    icon: <TwitterIcon />,
    link: "https://twitter.com/Rtechuae",
  },
  {
    id: "social-media-4",
    icon: <LinkedInIcon />,
    link: "https://www.linkedin.com/in/rtechuae",
  },
  {
    id: "social-media-4",
    icon: <PinterestIcon />,
    link: "https://www.pinterest.com/rtechuae/",
  },
];
