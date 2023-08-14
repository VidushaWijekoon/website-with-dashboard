import React from "react";
import { RouterProvider, createBrowserRouter } from "react-router-dom";
import MainLayout from "../layouts/MainLayout";
import HomePage from "../pages/frontend/HomePage/Home";
import GraphicDesign from "../pages/frontend/Graphic_Design/GraphiDesign";
import WebDevelopment from "../pages/frontend/Web_Development/WebDevelopment";
import SoftwareDevelopment from "../pages/frontend/Software_Development/SoftwareDevelopment";
import SocialMediaMarketing from "../pages/frontend/Social_Media_Marketing/SocialMediaMarketing";
import PageNotFound from "../pages/__404/__404PageNotFound";

const router = createBrowserRouter([
  {
    path: "/",
    element: <MainLayout />,
    children: [
      {
        index: true,
        element: <HomePage />,
      },
      {
        path: "graphic-desgin",
        element: <GraphicDesign />,
      },
      {
        path: "web-development",
        element: <WebDevelopment />,
      },
      {
        path: "software-development",
        element: <SoftwareDevelopment />,
      },
      {
        path: "social-media-markerting",
        element: <SocialMediaMarketing />,
      },
    ],
  },
  {
    path: "*",
    element: <PageNotFound />,
  },
]);

const HomePageAppRoute = () => {
  return <RouterProvider router={router} />;
};

export default HomePageAppRoute;
