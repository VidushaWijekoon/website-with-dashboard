import React from "react";
import Navbar from "../components/frontend/Navbar/Navbar";
import Footer from "../components/frontend/Footer/Footer";
import { Outlet } from "react-router-dom";
import BackToTop from "../components/frontend/BackToTop/BackToTop";

const MainLayout = () => {
  return (
    <>
      <Navbar />
      <Outlet />
      <Footer />
      <BackToTop />
    </>
  );
};

export default MainLayout;
