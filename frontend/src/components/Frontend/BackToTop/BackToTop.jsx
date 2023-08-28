import React from "react";
import { Link } from "react-router-dom";

import WhatsAppIcon from "@mui/icons-material/WhatsApp";

const BackToTop = () => {
  return (
    <>
      <Link
        to="#"
        className="back-to-top d-flex align-items-center justify-content-center"
      >
        <WhatsAppIcon />
      </Link>
    </>
  );
};

export default BackToTop;
