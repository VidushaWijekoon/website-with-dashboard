import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import HomePageAppRoute from "./routers/HomePageAppRoute";

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <HomePageAppRoute />
  </React.StrictMode>
);
