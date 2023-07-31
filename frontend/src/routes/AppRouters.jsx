import React from "react";
import { createBrowserRouter } from "react-router-dom";
import Login from "../containers/Login/Login";
import Register from "../containers/Register/Register";
import MainLayout from "../layouts/MainLayout";
import Home from "../containers/Frontend/Home/Home";

const router = createBrowserRouter([
  {
    path: "/",
    element: <MainLayout />,
    children: [
      {
        path: "/",
        element: <Home />,
      },
    ],
  },
  {
    path: "/login",
    element: <Login />,
  },
  {
    path: "/register",
    element: <Register />,
  },
]);

export default router;
