import React from "react";

const pics = [
  {
    id: "1",
    title: "wordpress",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-70.png",
  },
  {
    id: "2",
    title: "woocommerce",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-71.png",
  },
  {
    id: "3",
    title: "laravel",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-72.png",
  },
  {
    id: "4",
    title: "nodejs",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-73.png",
  },
  {
    id: "5",
    title: "flutter",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-74.png",
  },
  {
    id: "6",
    title: "jquery",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-79.png",
  },
  {
    id: "7",
    title: "magento",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-78.png",
  },
  {
    id: "8",
    title: "mysql",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-77.png",
  },
  {
    id: "9",
    title: "html-css",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-76.png",
  },
  {
    id: "10",
    title: "react",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-75.png",
  },
  {
    id: "11",
    title: "next",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-80.png",
  },
  {
    id: "12",
    title: "mongodb",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/09/web-design-company-sri-lanka-82.png",
  },
];

const Technologies = () => {
  return (
    <section id="features" className="features mb-5">
      <div className="container aos-init aos-animate" data-aos="fade-up">
        <header className="section-header p-5">
          <h2
            className="d-flex justify-content-center"
            style={{ color: "#112D4E", fontWeight: "bold" }}
          >
            THE CUTTING EDGE TECHNOLOGIES
          </h2>
          <span
            className="d-flex justify-content-center"
            style={{ color: "#eceaea" }}
          >
            Empowering you with the best technology
          </span>
        </header>

        <div className="row align-self-center gy-4">
          {pics.map(({ imgUrl, title }, index) => (
            <Items key={index} imgUrl={imgUrl} title={title} />
          ))}
        </div>
      </div>
    </section>
  );
};

export default Technologies;

const Items = ({ title, imgUrl }) => (
  <div className="col-md-2 justify-content-center mx-auto">
    <img src={imgUrl} alt={title} />
  </div>
);
