import React from "react";

const About = () => {
  return (
    <section id="details" className="details mb-5">
      <div className="container">
        <div className="row content">
          <div
            className="col-md-4 d-flex align-items-center"
            data-aos="fade-right"
          >
            <img
              src="https://pacewalk.com/wp-content/uploads/2020/03/social.png"
              className="img-fluid w-100"
              alt="Img1"
            />
          </div>
          <div className="col-md-8 p-4" data-aos="fade-up">
            <h3>SOCIAL MEDIA MARKETING</h3>
            <p>RESEARCH CUSTOMERS AT THE RIGHT PLACE AT THE RIGHT TIME</p>
            <p>
              Social media is a fabulous opportunity to connect with your
              existing and prospective customers, and engage with those who will
              shout about your product/brand and it’s now an important factor in
              ranking well in search engines. However, first you need to earn
              the trust and respect of your social audience by adding value to
              their lives via social interactions & interesting content. It’s
              also one of the most rapidly changing marketing channels, with new
              features and updates constantly being released by the likes of
              Facebook, Twitter, LinkedIn, Instagram, and Pinterest, It can be
              hard to keep up, or even know where to start! That’s the job of
              our social media team who have all the experience needed to make
              the most of your profiles – whatever the nature of your business.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;
