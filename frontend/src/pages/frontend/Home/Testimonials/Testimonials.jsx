import React from "react";
import "./testimonials.css";

const team = [
  {
    id: "1",
    name: "Vidusha Wijekoon",
    desitnation: "Senior Software Engineer",
    description:
      " Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel",
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxPT05RVepzn3H3EdE-fKbNCAJNRLzmmWSm-aLIY5SKA&s",
  },
  {
    id: "2",
    name: "Srinika Jayawardena",
    desitnation: "Senior Graphic Designer",
    description:
      " Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel",
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxPT05RVepzn3H3EdE-fKbNCAJNRLzmmWSm-aLIY5SKA&s",
  },
  {
    id: "3",
    name: "Cinderella Paul",
    desitnation: "Junior Software Engineer",
    description:
      " Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel",
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxPT05RVepzn3H3EdE-fKbNCAJNRLzmmWSm-aLIY5SKA&s",
  },
  {
    id: "3",
    name: "Cinderella Paul",
    desitnation: "Junior Software Engineer",
    description:
      " Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel",
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxPT05RVepzn3H3EdE-fKbNCAJNRLzmmWSm-aLIY5SKA&s",
  },
  {
    id: "3",
    name: "Cinderella Paul",
    desitnation: "Junior Software Engineer",
    description:
      " Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel",
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxPT05RVepzn3H3EdE-fKbNCAJNRLzmmWSm-aLIY5SKA&s",
  },
  {
    id: "3",
    name: "Cinderella Paul",
    desitnation: "Junior Software Engineer",
    description:
      " Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel",
    img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxPT05RVepzn3H3EdE-fKbNCAJNRLzmmWSm-aLIY5SKA&s",
  },
];

const Testimonials = () => {
  return (
    <>
      <section id="team" className="team mb-5">
        <div className="container section-title text-center" data-aos="fade-up">
          <h2>Team</h2>
          <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
          </p>
        </div>

        <div className="container">
          <div className="row gy-5 mt-1">
            {team.map(({ img, name, desitnation, description }, index) => (
              <OurTeam
                key={index}
                img={img}
                name={name}
                desitnation={desitnation}
                description={description}
              />
            ))}
          </div>
        </div>
      </section>
    </>
  );
};

export default Testimonials;

const OurTeam = ({ img, name, desitnation, description }) => (
  <div
    className="col-lg-4 col-md-6 member"
    data-aos="fade-up"
    data-aos-delay="100"
  >
    <div className="member-img">
      <img src={img} className="img-fluid" alt={name} />
    </div>
    <div className="member-info text-center">
      <h4>{name}</h4>
      <span>{desitnation}</span>
      <p>{description}</p>
    </div>
  </div>
);
