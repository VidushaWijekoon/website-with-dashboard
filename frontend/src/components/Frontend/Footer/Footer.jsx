import React from "react";
import { Link } from "react-router-dom";
import "./footer.css";
import Logo from "../../../assets/images/rtlogolight.png";

import FacebookRoundedIcon from "@mui/icons-material/FacebookRounded";
import TwitterIcon from "@mui/icons-material/Twitter";
import InstagramIcon from "@mui/icons-material/Instagram";
import LinkedInIcon from "@mui/icons-material/LinkedIn";
import KeyboardArrowRightIcon from "@mui/icons-material/KeyboardArrowRight";

const Footer = () => {
  return (
    <footer id="footer">
      <div className="footer-top">
        <div className="container">
          <div className="row">
            <div className="col-lg-5 col-md-6">
              <div className="footer-info">
                <h3>
                  <img src={Logo} alt="Company Logo" width={133} />
                </h3>
                <p>
                  <strong>Head Office:</strong>
                  Sharjah Research Technology and Innovation Park ,BLOCK B, Ofc
                  No: B16,Sharjah, UAE,
                </p>
                <p>
                  <strong>Brand Office:</strong>
                  M26,Crystal Building, Al Karama, Dubai
                </p>
                <p>
                  <strong>Phone:</strong> (+971) 52 984 3844
                </p>
                <p>
                  <strong>Email:</strong> info@rtechglobal.ae
                </p>
                <div className="social-links mt-3">
                  <Link className="twitter">
                    <TwitterIcon />
                  </Link>
                  <Link className="facebook">
                    <FacebookRoundedIcon />
                  </Link>
                  <Link className="instagram">
                    <InstagramIcon />
                  </Link>
                  <Link className="linkedin">
                    <LinkedInIcon />
                  </Link>
                </div>
              </div>
            </div>

            <div className="col-lg-2 col-md-6 footer-links">
              <h4>Pages</h4>
              <ul>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Home</Link>
                </li>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>About us</Link>
                </li>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Services</Link>
                </li>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Careers</Link>
                </li>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Privacy policy</Link>
                </li>
              </ul>
            </div>

            <div className="col-lg-2 col-md-6 footer-links">
              <h4>Other Services</h4>
              <ul>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Blog</Link>
                </li>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Event Management</Link>
                </li>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Technical Services</Link>
                </li>
              </ul>
            </div>

            <div className="col-lg-3 col-md-6 footer-links">
              <h4>Infomation Technology</h4>
              <ul>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Web Development</Link>
                </li>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Software Development</Link>
                </li>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Graphic Design</Link>
                </li>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Digital Markerting</Link>
                </li>
                <li>
                  <KeyboardArrowRightIcon />
                  <Link>Graphic Design</Link>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
