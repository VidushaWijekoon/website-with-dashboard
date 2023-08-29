import React from "react";
import Logo from "../../../assets/images/rtlogolight.png";
import { Link } from "react-router-dom";
import "./navbar.css";
import KeyboardArrowDownIcon from "@mui/icons-material/KeyboardArrowDown";

const Navbar = () => {
  return (
    <div id="header" className="d-flex align-items-center">
      <div className="container d-flex justify-content-between align-items-center">
        <div className="logo">
          <Link>
            <img src={Logo} alt="RTech" width={100} />
          </Link>
        </div>
        <nav id="navbar" className="navbar">
          <ul>
            <li className="dropdown">
              <Link>
                <span>Information Technology</span>
                <KeyboardArrowDownIcon />
              </Link>
              <ul>
                <li>
                  <Link to="web-development">Web Development</Link>
                </li>
                <li>
                  <Link to="software-development">Software Development</Link>
                </li>
                <li>
                  <Link to="graphic-design">Graphic Design</Link>
                </li>
                <li>
                  <Link to="social-media-marketing">
                    Social Media Marketing
                  </Link>
                </li>
                <li>
                  <Link to="interior-design">Interior Design</Link>
                </li>
              </ul>
            </li>
            <li>
              <a href="technical-services">Technical Services</a>
            </li>
            <li>
              <Link to="event-management">Event Management</Link>
            </li>
            <li>
              <Link to="science-technology">Science & Technology</Link>
            </li>
            <li>
              <Link to="pricing">Pricing</Link>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  );
};

export default Navbar;
