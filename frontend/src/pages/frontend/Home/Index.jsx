import React from "react";
import Hero from "./Hero/Hero";
import Services from "./Services/Services";
import About from "./About/About";
import Testimonials from "./Testimonials/Testimonials";
import Contact from "./Contact/Contact";

const Index = () => {
  return (
    <>
      <Hero />
      <main id="main">
        <Services />
        <About />
        <Testimonials />
        <Contact />
      </main>
    </>
  );
};

export default Index;
