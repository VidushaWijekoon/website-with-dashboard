import React from "react";

import { Outlet } from "react-router-dom";

import Navbar from "../../components/frontend/Navbar";
import Footer from "../../components/frontend/Footer";

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
