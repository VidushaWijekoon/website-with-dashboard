import React from "react";
import "./count.css";

const Count = [
  {
    id: "1",
    img: "https://www.weblankan.com/wp-content/uploads/2022/04/puzzle.png",
    title: "GRAPHIC DESIGN",
    describtion:
      "We help manage your applications, whether its in the cloud or even on your own premises!",
  },
  {
    id: "2",
    img: "https://www.weblankan.com/wp-content/uploads/2022/04/strategy.png",
    title: "QUALITY ASSURANCE",
    describtion:
      " We are dedicated to ensuring that your business gets the best service.",
  },
  {
    id: "4",
    img: "https://www.weblankan.com/wp-content/uploads/2022/04/customer-service-1.png",
    title: "24/7 SUPPORT",
    describtion:
      "We take every step of the journey with you to ensure that your business can strive!",
  },
];

const GraphicCount = () => {
  return (
    <section id="counts" className="counts mb-5">
      <div className="container-fluid">
        <div className="row no-gutters justify-content-center ">
          {Count.map(({ img, title, describtion }, index) => (
            <Items
              key={index}
              img={img}
              title={title}
              describtion={describtion}
            />
          ))}
        </div>
      </div>
    </section>
  );
};

export default GraphicCount;

const Items = ({ img, title, describtion }) => (
  <div className="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
    <div className="count-box d-flex">
      <img src={img} alt={title} style={{ objectFit: "contain" }} />
      <span
        data-purecounter-start="0"
        data-purecounter-end="521"
        data-purecounter-duration="1"
        className="purecounter"
      ></span>
      <p>
        <strong className="title">{title}</strong>
        <br />
        {describtion}
      </p>
    </div>
  </div>
);
