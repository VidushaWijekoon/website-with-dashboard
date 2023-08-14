import React from "react";
import { Link } from "react-router-dom";
import Logo from "../../../assets/images/rtlogolight.png";

const navigation = [
  { name: "Web Development", href: "web-development" },
  { name: "Software Development", href: "software-development" },
  { name: "Graphic Design", href: "graphic-desgin" },
  { name: "Social Media", href: "social-media-markerting" },
  { name: "Technical Services", href: "technical-services" },
  { name: "Blog", href: "blog" },
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
            <ul className="d-flex">
              {navigation.map((item) => (
                <li>
                  <Link key={item.name} to={item.href}>
                    {item.name}
                  </Link>
                </li>
              ))}
            </ul>
          </nav>
        </div>
      </header>
    </>
  );
};

export default Navbar;
