import React from "react";
import { RouterProvider, createBrowserRouter } from "react-router-dom";
import MainLayout from "../layouts/MainLayout";

import Index from "../pages/frontend/Home/Index";
import SoftwareDevelopment from "../pages/frontend/Software_Developement/Software_Development";
import GraphicDesign from "../pages/frontend/Graphic_Desgin/Graphic_Design";
import Social_Media_Marketing from "../pages/frontend/Social_Media_Marketing/Social_Media_Marketing";
import Interior_Design from "../pages/frontend/Interior_Design/Interior_Design";
import Technical_Services from "../pages/frontend/Technical_Services/Technical_Services";
import Event_Management from "../pages/frontend/Event_Management/Event_Management";
import Pricing from "../pages/frontend/Pricing/Pricing";
import Web_Developement from "../pages/frontend/Web_Development/Web_Developement";
import Login from "../pages/Auth/Login";
import Register from "../pages/Auth/Register";
import NotFound from "../pages/404/NotFound";

const router = createBrowserRouter([
  {
    path: "/",
    element: <MainLayout />,
    children: [
      {
        index: true,
        element: <Index />,
      },
      {
        path: "web-development",
        element: <Web_Developement />,
      },
      {
        path: "software-development",
        element: <SoftwareDevelopment />,
      },
      {
        path: "graphic-design",
        element: <GraphicDesign />,
      },
      {
        path: "social-media-marketing",
        element: <Social_Media_Marketing />,
      },
      {
        path: "interior-design",
        element: <Interior_Design />,
      },
      {
        path: "technical-services",
        element: <Technical_Services />,
      },
      {
        path: "event-management",
        element: <Event_Management />,
      },
      {
        path: "pricing",
        element: <Pricing />,
      },
    ],
  },
  {
    path: "login",
    element: <Login />,
  },
  {
    path: "register",
    element: <Register />,
  },
  {
    path: "*",
    element: <NotFound />,
  },
]);

const AppRouter = () => {
  return <RouterProvider router={router} />;
};

export default AppRouter;
