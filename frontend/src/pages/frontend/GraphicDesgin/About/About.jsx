import React from "react";

const About = () => {
  return (
    <div className="container mb-5">
      <div className="row content">
        <div
          className="col-md-4 order-1 order-md-2 d-flex justify-content-center align-items-center"
          data-aos="fade-left"
        >
          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT__o5X8Ge46d74YmYvkq4UNQ-eyyqKBdQUJw&usqp=CAU"
            className="img-fluid"
            alt=""
          />
        </div>
        <div className="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
          <h3>
            More than 11 Years of Experience in Graphic Designing Team in RTeach
            International
          </h3>
          <p>
            RTech International is one of the leading graphic designing
            companies in Dubai(UAE) . Our Know-how and expertise in the field of
            printing services have made us a strong contender in developing,
            powerful, and effective print communication for all our clients.
            Being one of the oldest printing presses in Dubai(UAE), we have
            worked with some of the top business houses, banks, educational
            institutes, advertising companies, and government agencies in the
            UAE and abroad. Our workforce has and always will be the pride of
            our print shop and the sole reason for our success. We have come to
            realize that we’re not in the business of printing business cards,
            flyers, brochures, calendars, etc but in the business of
            communicating ideas into images.
          </p>
        </div>
      </div>
    </div>
  );
};

export default About;
