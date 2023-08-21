import React, { useState } from "react";
import { LightLogo } from "../../../assets/index";
import { Link } from "react-router-dom";

import SortIcon from "@mui/icons-material/Sort";
import ExpandMoreIcon from "@mui/icons-material/ExpandMore";
import { IconButton } from "@mui/material";

const Navbar = () => {
  const [active, setActive] = useState("home");
  const [toggle, setToggle] = useState(false);
  const [dropdown, setDropdown] = useState(false);

  const NavLinks = [
    {
      id: "technical-services",
      name: "technical services",
      to: "technical-services",
    },
    {
      id: "event-management",
      name: "event management",
      to: "event-management",
    },
    {
      id: "pricing",
      name: "pricing",
      to: "pricing",
    },
  ];

  const DropDownNavLink = [
    { id: "web-development", name: "web development", to: "web-development" },
    {
      id: "software-development",
      name: "software development",
      to: "software-development",
    },
    { id: "graphic-design", name: "graphic design", to: "graphic-design" },
    {
      id: "social-media-marketing",
      name: "social media marketing",
      to: "social-media-marketing",
    },
    { id: "interior-design", name: "interior design", to: "interior-design" },
  ];

  return (
    <div className="bg-primary w-full overflow-hidden">
      <div className="sm:px-16 px-6 flex justify-center items-center">
        <div className="xl:max-w-[1280px] w-full">
          <nav className="w-full flex py-6 justify-between items-center navbar">
            <Link to="/">
              <img
                src={LightLogo}
                alt="Logo"
                className="w-[124px] h-32px object-contain"
              />
            </Link>
            <ul className="list-none sm:flex hidden justify-end items-center flex-1">
              <li className="text-dimWhite uppercase font-fontSolway cursor-pointer text-[16px] mr-10">
                <span className="" onClick={() => setDropdown(!dropdown)}>
                  Information Technology
                </span>
                <ExpandMoreIcon
                  onClick={() => setDropdown(!dropdown)}
                  className="text-slate-50 text-4xl"
                />
                <div
                  className={`${
                    dropdown ? "flex" : "hidden"
                  } p-6 bg-black bg-black-gradient absolute top-20 mx-4 my-2 min-w-[160px] rounded-xl sidebar`}
                >
                  <ul className="list-none flex justify-end items-start flex-1 flex-col">
                    {DropDownNavLink.map((nav, index) => (
                      <li
                        key={nav.id}
                        className={`font-fontSolway uppercase font-normal cursor-pointer text-[16px] hover:text-secondary my-1 ${
                          active === nav.name ? "text-white" : "text-dimWhite"
                        } ${index === NavLinks.length - 1 ? "mr-0" : "mr-10"}`}
                        onClick={() => setActive(nav.name)}
                      >
                        <Link to={nav.to}>{nav.name}</Link>
                      </li>
                    ))}
                  </ul>
                </div>
              </li>
              {NavLinks.map((nav, index) => (
                <li
                  key={nav.id}
                  className={`font-fontSolway uppercase font-normal cursor-pointer text-[16px] hover:text-secondary ${
                    active === nav.name ? "text-white" : "text-dimWhite"
                  } ${index === NavLinks.length - 1 ? "mr-0" : "mr-10"}`}
                  onClick={() => setActive(nav.name)}
                >
                  <Link to={nav.to}>{nav.name}</Link>
                </li>
              ))}
              <li>
                <Link
                  className="font-fontSolway uppercase font-normal cursor-pointer text-[16px] hover:bg-secondary hover:text-black text-dimWhite ml-8 border-2 px-4 py-1 hover:"
                  to="/login"
                >
                  Join
                </Link>
              </li>
            </ul>

            <div className="sm:hidden flex flex-1 justify-end items-center">
              <IconButton onClick={() => setToggle(!toggle)}>
                <SortIcon className="text-slate-50 text-4xl" />
              </IconButton>

              <div
                className={`${
                  !toggle ? "hidden" : "flex"
                } p-6 bg-black bg-black-gradient absolute top-20 right-0 mx-4 my-2 min-w-[160px] rounded-xl sidebar`}
              >
                <ul className="list-none flex justify-end items-start flex-1 flex-col">
                  {NavLinks.map((nav, index) => (
                    <li
                      key={nav.id}
                      className={`font-fontSolway uppercase font-normal cursor-pointer text-[16px] my-1  hover:text-secondary ${
                        active === nav.name ? "text-white" : "text-dimWhite"
                      } ${index === NavLinks.length - 1 ? "mr-0" : "mr-10"}`}
                      onClick={() => setActive(nav.name)}
                    >
                      <Link to={nav.to}>{nav.name}</Link>
                    </li>
                  ))}
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  );
};

export default Navbar;
