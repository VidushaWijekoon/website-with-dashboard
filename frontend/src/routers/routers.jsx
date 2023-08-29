import React from "react";
import { RouterProvider, createBrowserRouter } from "react-router-dom";
import MainLayout from "../layouts/MainLayout";

import Index from "../pages/frontend/Home/Index";
import SoftwareDevelopment from "../pages/frontend/SoftwareDevelopement/SoftwareDevelopment";
import GraphicDesign from "../pages/frontend/GraphicDesgin/GraphicDesign";
import SocialMediaMarketing from "../pages/frontend/SocialMediaMarketing/SocialMediaMarketing";
import InteriorDesign from "../pages/frontend/InteriorDesign/InteriorDesign";
import TechnicalServices from "../pages/frontend/TechnicalServices/TechnicalServices";
import EventManagement from "../pages/frontend/EventManagement/EventManagement";
import Pricing from "../pages/frontend/Pricing/Pricing";
import WebDevelopement from "../pages/frontend/WebDevelopment/WebDevelopement";
import Login from "../pages/Auth/Login";
import Register from "../pages/Auth/Register";
import NotFound from "../pages/404/NotFound";
import Careers from "../pages/frontend/Careers/Careers";
import PayOnline from "../pages/frontend/PayOnline/PayOnline";
import HelpCenter from "../pages/frontend/HelpCenter/HelpCenter";
import TermsAndConditions from "../pages/frontend/TermsAndConditions/TermsAndConditions";
import ReturnPolicy from "../pages/frontend/ReturnPolicy/ReturnPolicy";
import ScienceAndTechnology from "../pages/frontend/ScienceAndTechnology/ScienceAndTechnology";
import Dashboard from "../pages/admin/Dashboard/Dashboard";
import AdminLayout from "../layouts/AdminLayout";

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
        element: <WebDevelopement />,
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
        element: <SocialMediaMarketing />,
      },
      {
        path: "interior-design",
        element: <InteriorDesign />,
      },
      {
        path: "technical-services",
        element: <TechnicalServices />,
      },
      {
        path: "event-management",
        element: <EventManagement />,
      },
      {
        path: "pricing",
        element: <Pricing />,
      },
      {
        path: "science-technology",
        element: <ScienceAndTechnology />,
      },
      {
        path: "careers",
        element: <Careers />,
      },
      {
        path: "pay-online",
        element: <PayOnline />,
      },
      {
        path: "help-center",
        element: <HelpCenter />,
      },
      {
        path: "terms-conditions",
        element: <TermsAndConditions />,
      },
      {
        path: "return-policy",
        element: <ReturnPolicy />,
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
  {
    path: "admin/",
    element: <AdminLayout />,
    children: [
      {
        path: "dashboard",
        element: <Dashboard />,
      },
    ],
  },
]);

const AppRouter = () => {
  return <RouterProvider router={router} />;
};

export default AppRouter;
