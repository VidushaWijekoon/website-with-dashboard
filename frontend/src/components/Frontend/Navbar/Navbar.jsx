import React from "react";
import { Link } from "react-router-dom";
import Logo from "../../../assets/images/rtlogolight.png";
import "./navbar.css";

const navigation = [
  { name: "Web Development", to: "web-development" },
  { name: "Software Development", to: "software-development" },
  { name: "Graphic Design", to: "graphic-desgin" },
  { name: "Social Media", to: "social-media-markerting" },
  { name: "Technical Services", to: "technical-services" },
  { name: "Blog", to: "blog" },
];

const Navbar = () => {
  return (
    <>
      <header id="header" className="header d-flex align-items-center">
        <div className="container-fluid container-xl d-flex align-items-center justify-content-between">
          <Link href="#" className="logo d-flex align-items-center">
            <img src={Logo} alt="RTech Logo" width={133} />
          </Link>
          <i className="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i className="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
          <nav id="navbar" className="navbar">
            <div className="d-flex">
              {navigation.map((item) => (
                <Link key={item.name} to={item.to} className="mx-3">
                  {item.name}
                </Link>
              ))}
            </div>
          </nav>
        </div>
      </header>
    </>
  );
};

export default Navbar;
