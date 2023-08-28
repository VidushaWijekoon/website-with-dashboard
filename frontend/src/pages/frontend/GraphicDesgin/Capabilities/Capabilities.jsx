import React from "react";
import "./capabilities.css";
import CheckCircleIcon from "@mui/icons-material/CheckCircle";
import { IconButton } from "@mui/material";

const works = [
  {
    id: "1",
    title: "Logo Design",
  },
  {
    id: "2",
    title: "Flyers & Brochures",
  },
  {
    id: "3",
    title: "Book Covers & Layouts",
  },
  {
    id: "4",
    title: "Company Profiles",
  },
  {
    id: "5",
    title: "Annual & Business Reports",
  },
  {
    id: "6",
    title: "Packaging & Labels",
  },
  {
    id: "7",
    title: "Digital & Print Graphics",
  },
  {
    id: "8",
    title: "Event Invitations",
  },
  {
    id: "9",
    title: "Magazine & Newspaper Ads",
  },
  {
    id: "10",
    title: "Youtube Thumbnails & Ads",
  },
  {
    id: "11",
    title: "Ebook Covers & Layouts",
  },
  {
    id: "12",
    title: "Simple Infographic",
  },
  {
    id: "13",
    title: "Business Card",
  },
  {
    id: "14",
    title: "Posters & Banners",
  },
  {
    id: "15",
    title: "Business Newsletters",
  },
  {
    id: "16",
    title: "PowerPoint Templates",
  },
  {
    id: "17",
    title: "Product Logo Mockups",
  },
  {
    id: "18",
    title: "Promotional Materials",
  },
  {
    id: "19",
    title: "Signage & Display Graphics",
  },
  {
    id: "20",
    title: "Tradeshow Banners",
  },
  {
    id: "21",
    title: "Google Display Ads",
  },
  {
    id: "22",
    title: "Podcast Cover Graphics",
  },
  {
    id: "23",
    title: "Email Newsletter",
  },
  {
    id: "24",
    title: "Ecommerce Graphics",
  },
  {
    id: "25",
    title: "Business Stationery",
  },
  {
    id: "26",
    title: "Catalogs & Booklets",
  },
  {
    id: "27",
    title: "Corporate Folders",
  },
  {
    id: "28",
    title: "Presentation Decks",
  },
  {
    id: "29",
    title: "Point Of Sale Products",
  },
  {
    id: "30",
    title: "Restaurant Menus",
  },
  {
    id: "31",
    title: "Billboards & Hoardings",
  },
  {
    id: "32",
    title: "Print Advertising",
  },
  {
    id: "33",
    title: "Social Media Posts & Ads",
  },
  {
    id: "34",
    title: "Website Banner Graphics",
  },
  {
    id: "35",
    title: "Blog Post Images",
  },
  {
    id: "36",
    title: "Amazon Listing Designs",
  },
  {
    id: "37",
    title: "UI / UX Web Designs",
  },
  {
    id: "38",
    title: "T-Shirt Design",
  },
];

const Capabilities = () => {
  return (
    <section id="capabilities" class="capabilities section-bg mt-5">
      <div class="container">
        <div class="section-title text-center">
          <h2 data-aos="fade-in">OUR DESIGNS CAPABILTIES</h2>
          <p data-aos="fade-in">
            With our unlimited graphic design packages, you can get any of the
            work listed below. Your one-stop destination for all your graphic
            design projects.
          </p>
        </div>

        <div class="row justify-content-center">
          {works.map(({ title }, index) => (
            <Items key={index} title={title} />
          ))}
        </div>
      </div>
    </section>
  );
};

export default Capabilities;

const Items = ({ title }) => (
  <div class="col-lg-4 col-md-4 mb-3">
    <div class="icon-box">
      <IconButton sx={{ color: "var(--light-blue)" }}>
        <CheckCircleIcon />
      </IconButton>
      <span style={{ fontSize: "20px" }}>{title}</span>
    </div>
  </div>
);
