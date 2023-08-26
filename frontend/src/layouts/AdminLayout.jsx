import React from "react";
import ASidebar from "../components/admin/ASidebar";
import Navbar from "../components/admin/Navbar";
import { Outlet } from "react-router-dom";
import "../assets/css/admin_main.css";

const AdminLayout = () => {
  return (
    <div className="wrapper">
      <ASidebar />
      <div className="main">
        <Navbar />
        <main class="content">
          <Outlet />
        </main>
      </div>
    </div>
  );
};

export default AdminLayout;
