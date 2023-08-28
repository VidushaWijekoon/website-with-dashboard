import React from "react";
import "./services.css";

const details = [
  {
    id: "1",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2019/12/OPPS-PRINT-Business-Card-Printing-Dubai-1.jpg",
    title: "Business Card Design",
    description:
      "Be prepared for every business opportunity that comes you way with professionally printed business card.",
    url: "",
  },
  {
    id: "2",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2020/01/OPPS-PRINT-Catalogue-Printing-Dubai-2.jpg",
    title: "Catalogue Design",
    description:
      "Grab the attention of your customers by using vivid imagery & descriptive text for your next catalog print project",
    url: "",
  },
  {
    id: "3",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2019/12/OPPS-PRINT-Brochure-Printing-Dubai-1-1.jpg",
    title: "Brochure Design",
    description:
      "A well designed brochure serves as a great marketing tool that helps build customer trust in your brand.",
    url: "",
  },
  {
    id: "4",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2019/12/OPPS-PRINT-Flyer-Printing-Dubai-1.jpg",
    title: "Flyer Design",
    description:
      "Announce upcoming offers & events to your target audiences with our high quality flyers printing service.",
    url: "",
  },
  {
    id: "5",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2019/12/OPPS-Print-Letterhead-Envelope-Printing-Dubai-1.jpg",
    title: "Stationery Design",
    description:
      "Stationey printed on high-quality paper gives the impression that your business is strong & trustworthy.",
    url: "",
  },
  {
    id: "6",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2019/12/OPPS-PRINT-Paper-Bag-Printing-Dubai-1.jpg",
    title: "Paper Bag Design",
    description:
      "An eye-catching custom printed paper bag can enhance your customers experience & leave a lasting impression.",
    url: "",
  },
  {
    id: "7",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2020/01/OPPS-PRINT-Carbonless-NCR-Form-Printing-Dubai-1.jpg",
    title: "NCR Form Design",
    description:
      "Create duplicate copies of handwritten or impact-printed essential business documents with ease using NCR forms.",
    url: "",
  },
  {
    id: "8",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2019/12/OPPS-PRINT-Sticker-Printing-Dubai-2.jpg",
    title: "Sticker Design",
    description:
      "Get your brand glued in the minds of your target audience with our multi-purpose stickers printing service.",
    url: "",
  },
  {
    id: "9",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2020/01/OPPS-PRINT-Restaurant-Menu-Printing-Dubai-2.jpg",
    title: "Menu Card Design",
    description:
      "Influence hungry customers with appetizing pictures of dishes offered at your restaurant with an eye-catching menu.",
    url: "",
  },
  {
    id: "10",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2019/12/OPPS-PRINT-Presentation-Folders-Printing-2.jpg",
    title: "Folder Design",
    description:
      "Be prepared for all business meetings, proposal submissions & events with your custom presentation folders.",
    url: "",
  },
  {
    id: "11",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2019/12/OPPS-PRINT-Calendar-Printing-Dubai-1.jpg",
    title: "Calendar Design",
    description:
      "Custom calendar printing is an affordable way to keep your brand in front of your customer 365 days a year.",
    url: "",
  },
  {
    id: "12",
    imgUrl:
      "https://www.oppsprint.com/wp-content/uploads/2019/12/OPPS-PRINT-Wedding-Card-Printing-Dubai-2.jpg",
    title: "Wedding Card Design",
    description:
      "Wedding invitations are the memorable starts to your big day & you definitely want every little detail to be just right.",
    url: "",
  },
];

const Services = () => {
  return (
    <section id="blog" className="blog mb-5">
      <div className="container" data-aos="fade-up" data-aos-delay="100">
        <div className="row gy-4 posts-list">
          {details.map(({ imgUrl, description, title, url }, index) => (
            <ServicesItem
              key={index}
              imgUrl={imgUrl}
              title={title}
              description={description}
              url={url}
            />
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;

const ServicesItem = ({ imgUrl, description, title, url }) => (
  <div className="col-xl-4 col-md-6">
    <div className="post-item position-relative h-100">
      <div className="post-img position-relative overflow-hidden">
        <img src={imgUrl} className="img-fluid" alt={title} />
      </div>

      <div className="post-content d-flex flex-column">
        <h3 className="post-title">{title}</h3>
        <p>{description}</p>
      </div>
    </div>
  </div>
);
