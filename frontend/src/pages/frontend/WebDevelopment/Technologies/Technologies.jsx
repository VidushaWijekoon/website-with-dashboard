import React from "react";

const Technologies = () => {
  return (
    <section id="features" class="features mb-5">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <header class="section-header p-5">
          <h2
            class="d-flex justify-content-center"
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

        <div class="row align-self-center gy-4">
          {pics.map((event) => (
            <div className="col-md-2 justify-content-center mx-auto">
              <img src={event.imgUrl} alt={event.title} />
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Technologies;

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
