import React from "react";
import Navbar from "../components/Frontend/Navbar/Navbar";

import { Outlet } from "react-router-dom";
import Footer from "../components/Frontend/Footer/Footer";

const MainLayout = () => {
  return (
    <>
      <Navbar />
      <Outlet />
      <Footer />
    </>
  );
};

export default MainLayout;
