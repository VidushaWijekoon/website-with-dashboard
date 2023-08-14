import React from "react";
import { RouterProvider, createBrowserRouter } from "react-router-dom";
import MainLayout from "../layouts/MainLayout";
import HomePage from "../pages/frontend/HomePage/Home";
import GraphicDesign from "../pages/frontend/Graphic_Design/GraphiDesign";
import WebDevelopment from "../pages/frontend/Web_Development/WebDevelopment";
import SoftwareDevelopment from "../pages/frontend/Software_Development/SoftwareDevelopment";
import SocialMediaMarketing from "../pages/frontend/Social_Media_Marketing/SocialMediaMarketing";
import PageNotFound from "../pages/__404/__404PageNotFound";
import Blog from "../pages/frontend/Blog/Blog";
import Technical from "../pages/frontend/Technical/Technical";

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
        path: "web-development",
        element: <WebDevelopment />,
      },
      {
        path: "software-development",
        element: <SoftwareDevelopment />,
      },
      {
        path: "graphic-desgin",
        element: <GraphicDesign />,
      },
      {
        path: "social-media-markerting",
        element: <SocialMediaMarketing />,
      },
      {
        path: "technical-services",
        element: <Technical />,
      },
      {
        path: "blog",
        element: <Blog />,
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
