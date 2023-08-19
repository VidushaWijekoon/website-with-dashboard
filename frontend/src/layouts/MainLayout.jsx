import React from "react";
import Navbar from "../components/frontend/Navbar/Navbar";
import Footer from "../components/frontend/Footer/Footer";
import { Outlet } from "react-router-dom";

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
