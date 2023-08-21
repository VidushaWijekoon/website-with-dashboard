import React from "react";
import { LightLogo } from "../../../assets/index";
import { Link } from "react-router-dom";

import InstagramIcon from "@mui/icons-material/Instagram";
import FacebookIcon from "@mui/icons-material/Facebook";
import LinkedInIcon from "@mui/icons-material/LinkedIn";
import TwitterIcon from "@mui/icons-material/Twitter";
import PinterestIcon from "@mui/icons-material/Pinterest";
import NavigateNextIcon from "@mui/icons-material/NavigateNext";

const Footer = () => {
  return (
    <section className="flex-col sm:py-16 py-6 flex justify-center items-center font-fontSolway">
      <div className="flex justify-center items-start md:flex-row flex-col mb-8 w-full">
        <div className="xl:max-w-[1280px] w-full flex">
          <div className="flex-[1] flex flex-col justify-start mr-10">
            <Link to="/">
              <img
                src={LightLogo}
                alt="Logo"
                className="w-[124px] h-32px object-contain"
              />
            </Link>
            <div className="flex flex-col justify-start w-full">
              {companyDetails.map((link) => (
                <p className="font-poppins font-normal text-dimWhite text-[16px] leading-[30.8px] mt-1 capitalize">
                  {link.title} :
                  <strong className="capitalize">{link.description}</strong>
                </p>
              ))}
            </div>
            <hr className="mt-3" />
            <ul className="flex flex-row md:mt-0 mt-6">
              {socialMedia.map((social) => (
                <li
                  key={social.id}
                  className="w-[21px] h-[21px] cursor-pointer text-dimWhite mx-3 mt-4"
                >
                  <Link to={social.link} target="_blank">
                    {social.icon}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          <div className="flex-[1.5] w-full flex flex-row justify-between flex-wrap md:mt-0 mt-10">
            {footerLinks.map((footerlink) => (
              <div
                key={footerlink.title}
                className={`flex flex-col ss:my-0 my-4 min-w-[150px]`}
              >
                <h4 className="font-poppins font-medium text-[18px] leading-[27px] text-white">
                  {footerlink.title}
                </h4>
                <ul className="list-none mt-4">
                  {footerlink.links.map((link, index) => (
                    <li
                      key={link.name}
                      className={`font-poppins font-normal text-[16px] leading-[24px] text-dimWhite hover:text-secondary cursor-pointer ${
                        index !== footerlink.links.length - 1 ? "mb-4" : "mb-0"
                      }`}
                    >
                      <NavigateNextIcon className="text-white"></NavigateNextIcon>
                      <Link to={link.link}>{link.name}</Link>
                    </li>
                  ))}
                </ul>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default Footer;

const footerLinks = [
  {
    title: "Useful Links",
    links: [
      {
        name: "Pay Online",
        link: "#",
      },
      {
        name: "Pricing",
        link: "pricing",
      },
      {
        name: "Careers",
        link: "#",
      },
      {
        name: "Terms & Services",
        link: "#",
      },
      {
        name: "Help Center",
        link: "#",
      },
    ],
  },
  {
    title: "Our Services",
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
        name: "Interior Design",
        link: "social-media-marketing",
      },
      {
        name: "Social Media Marketing",
        link: "interior-design",
      },
      {
        name: "Technical Services",
        link: "technical-services",
      },
      {
        name: "Event Management",
        link: "event-management",
      },
    ],
  },
  {
    title: "Partner",
    links: [
      {
        name: "Our Partner",
        link: "#",
      },
      {
        name: "Become a Partner",
        link: "#",
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
    link: "https://twitter.com/i/flow/login?redirect_after_login=%2FRtechuae",
  },
  {
    id: "social-media-4",
    icon: <LinkedInIcon />,
    link: "https://www.linkedin.com/in/rtechuae",
  },
  {
    id: "social-media-5",
    icon: <PinterestIcon />,
    link: "https://www.pinterest.com/rtechuae/",
  },
];

const companyDetails = [
  {
    id: "branch office",
    title: "branch offce",
    description: "M26,Crystal Building, Al Karama, Dubai",
  },
  {
    id: "office time",
    title: "office time",
    description: "Monday – Sat: 9am to 6pm",
  },
  {
    id: "phone",
    title: "phone",
    description: "+971 52 984 3844",
  },
  {
    id: "email",
    title: "email",
    description: "info@rtechglobal.ae",
  },
];
