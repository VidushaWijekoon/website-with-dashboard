import React from "react";

const details = [
  {
    id: "1",
    title: "100% Relevant to Your Business",
    imgUrl: "https://www.weblankan.com/wp-content/uploads/2022/04/puzzle.png",
    description:
      "An official website that reflects your brand identity & nature of business",
  },
  {
    id: "2",
    title: "Strategy Driven",
    imgUrl: "https://www.weblankan.com/wp-content/uploads/2022/04/strategy.png",
    description:
      "UI/UX and marketing strategy driven website to achieve your business objectives",
  },
  {
    id: "3",
    title: "Convert Visitors to Customers",
    imgUrl: "https://www.weblankan.com/wp-content/uploads/2022/04/crm.png",
    description:
      "Easily convert site visitors to loyal customers with optimized conversion techniques",
  },
  {
    id: "4",
    title: "Search Engine Friendly",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/04/search-engine.png",
    description:
      "Your website will be coded, structured and built with SEO in mind",
  },
  {
    id: "5",
    title: "Unlimited Tech Support",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/04/customer-service-1.png",
    description:
      "We’ll support you with any updates or amendments to your website",
  },
  {
    id: "6",
    title: "100% Mobile Responsive",
    imgUrl: "https://www.weblankan.com/wp-content/uploads/2022/04/app.png",
    description:
      "Mobile-friendly design helps you connect with customers everywhere",
  },
  {
    id: "7",
    title: "Result Focused Content",
    imgUrl:
      "https://www.weblankan.com/wp-content/uploads/2022/04/content-1.png",
    description:
      "Engaging graphics, videos and most importantly written content that inspires action",
  },
];

const Dev = () => {
  return (
    <section id="dev" className="dev mt-4">
      <div
        className="container-fluid p-0 aos-init aos-animate"
        data-aos="fade-up"
      >
        <div div="row g-0">
          <div div="col-lg-12">
            <div div="container p-5">
              <div div="row">
                {details.map(({ imgUrl, title, description }, index) => (
                  <Items
                    key={index}
                    imgUrl={imgUrl}
                    title={title}
                    description={description}
                  />
                ))}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Dev;

const Items = ({ imgUrl, title, description }) => {
  <div div="col-md-3 mb-3 text-center mx-auto box">
    <img src={imgUrl} alt="START-UP BUSINESSES" div="mb-4" />
    <h5 div="text-white">{title}</h5>
    <p div="text-white">{description}</p>
  </div>;
};
