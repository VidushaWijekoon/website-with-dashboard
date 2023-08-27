import React from "react";
import "./testimonials.css";

const Testimonials = () => {
  return (
    <>
      <section id="team" class="team mb-5">
        <div class="container section-title text-center" data-aos="fade-up">
          <h2>Team</h2>
          <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
          </p>
        </div>

        <div class="container">
          <div class="row gy-5 mt-1">
            {team.map((e) => (
              <div
                class="col-lg-4 col-md-6 member"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <div class="member-img">
                  <img src={e.img} class="img-fluid" alt={e.name} />
                  <div class="social">
                    <a href="#">
                      <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#">
                      <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#">
                      <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </div>
                </div>
                <div class="member-info text-center">
                  <h4>{e.name}</h4>
                  <span>{e.desitnation}</span>
                  <p>{e.description}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
    </>
  );
};

export default Testimonials;

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
