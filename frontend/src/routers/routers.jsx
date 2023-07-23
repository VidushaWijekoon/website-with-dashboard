import { createBrowserRouter } from "react-router-dom";

import Home from "../pages/frontend/Home";
import MainLayout from "../layouts/frontend/MainLayout";
import WebDevelopment from "../pages/frontend/WebDevelopment";
import SoftwareDevelopment from "../pages/frontend/SoftwareDevelopment";
import SEO from "../pages/frontend/SEO";
import GraphicDesign from "../pages/frontend/GraphicDesign";
import PageNotFound from "../pages/frontend/PageNotFound";
import TechnicalServices from "../pages/frontend/TechnicalServices";
import EventManagement from "../pages/frontend/EventManagement";
import ScienceTechnology from "../pages/frontend/ScienceTechnology";
import Login from "../pages/frontend/auth/Login";
import Register from "../pages/frontend/auth/Register";

const router = createBrowserRouter([
  {
    path: "/",
    element: <MainLayout />,
    children: [
      {
        path: "/",
        element: <Home />,
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
        path: "social-media-marketing",
        element: <SEO />,
      },
      {
        path: "graphic-design",
        element: <GraphicDesign />,
      },
      {
        path: "science-technology",
        element: <ScienceTechnology />,
      },
      {
        path: "technical-services",
        element: <TechnicalServices />,
      },
      {
        path: "event-management",
        element: <EventManagement />,
      },
    ],
  },
  {
    path: "/login",
    element: <Login />,
  },
  {
    path: "/regsiter",
    element: <Register />,
  },
  {
    path: "*",
    element: <PageNotFound />,
  },
]);

export default router;
