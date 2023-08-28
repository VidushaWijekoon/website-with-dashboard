import React from "react";
import HeroHeader from "./HeroHeader/HeroHeader";
import About from "./About/About";
import Services from "./Services/Services";
import GraphicCount from "./Count/GraphicCount";
import Content from "./Content/Content";
import Capabilities from "./Capabilities/Capabilities";

const GraphicDesign = () => {
  return (
    <>
      <HeroHeader />
      <About />
      <Services />
      <GraphicCount />
      <Capabilities />
      <Content />
    </>
  );
};

export default GraphicDesign;
