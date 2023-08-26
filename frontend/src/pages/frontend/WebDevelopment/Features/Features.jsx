import React from "react";

const Features = () => {
  return (
    <section id="features" class="features">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <header class="section-header p-5">
          <h2
            class="d-flex justify-content-center"
            style={{ color: "#112D4E", fontWeight: "bold" }}
          >
            RELATED SERVICES
          </h2>
        </header>

        <div class="row align-self-center gy-4">
          {feature.map((event) => (
            <div
              class="col-md-4 aos-init aos-animate"
              data-aos="zoom-out"
              data-aos-delay="200"
            >
              <div class="feature-box d-flex align-items-center mb-5">
                <img src={event.imgUrl} alt={event.title} />
                <h5 class="mx-3">{event.title}</h5>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Features;

const feature = [
  {
    id: "1",
    title: "Mobile Responsive Design",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/08/responsive-icon.png",
  },
  {
    id: "2",
    title: "Site Loading",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/08/site-loading-icon.png",
  },
  {
    id: "3",
    title: "Site security",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/08/site-security-icon.png",
  },
  {
    id: "4",
    title: "Cloud Hosting",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/08/cloud-icon.png",
  },
  {
    id: "5",
    title: "Email Support",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/08/email-support.png",
  },
  {
    id: "6",
    title: "Domain Register",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/08/domain-icon.png",
  },
  {
    id: "7",
    title: "Content Update",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/08/content-icon.png",
  },
  {
    id: "8",
    title: "SEO",
    imgUrl: "https://www.weblankan.com/wp-content/uploads/2022/08/seo-icon.png",
  },
  {
    id: "9",
    title: "Multi Language website",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/08/multi-lang-icon.png",
  },
];
