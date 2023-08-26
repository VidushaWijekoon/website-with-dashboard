import React from "react";

import img1 from "../../../../assets/images/software_dev/web-design-company-rtech-14.png";
import img2 from "../../../../assets/images/software_dev/web-design-company-rtech-15.png";
import img3 from "../../../../assets/images/software_dev/web-design-company-rtech-16.png";

const Dev = () => {
  return (
    <section id="dev" className="dev mt-4">
      <div
        className="container-fluid p-0 aos-init aos-animate"
        data-aos="fade-up"
      >
        <div class="row g-0">
          <div class="col-lg-12">
            <div class="container p-5">
              <div class="row">
                {details.map((event) => (
                  <div class="col-md-3 mb-3 text-center mx-auto">
                    <img
                      src={event.imgUrl}
                      alt="START-UP BUSINESSES"
                      class="mb-4"
                    />
                    <h5 class="text-white">{event.title}</h5>
                    <p class="text-white">{event.description}</p>
                  </div>
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
