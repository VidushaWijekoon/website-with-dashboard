import React from "react";
import Navbar from "../components/frontend/navbar/Navbar";
import { Outlet } from "react-router-dom";
import Footer from "../components/frontend/footer/Footer";

const MainLayout = () => {
  return (
    <div className="">
      <Navbar />
      <Outlet />
      <Footer />
    </div>
  );
};

export default MainLayout;
