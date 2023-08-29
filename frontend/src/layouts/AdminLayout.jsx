import React from "react";
import Navbar from "../components/admin/Navbar";
import Sidebar from "../components/admin/Sidebar";
import { Outlet } from "react-router-dom";

import "../assets/css/admin_main.css";

const AdminLayout = () => {
  return (
    <>
      <div className="wrapper">
        <Sidebar />
        <div className="main">
          <Navbar />
          <main className="content">
            <Outlet />
          </main>
        </div>
      </div>
    </>
  );
};

export default AdminLayout;
