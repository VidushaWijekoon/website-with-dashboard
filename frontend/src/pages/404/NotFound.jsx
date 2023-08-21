import React from "react";
import { Link } from "react-router-dom";
import __404 from "../../assets/404.png";

const NotFound = () => {
  return (
    <section className="w-full h-screen flex justify-center items-center">
      <div className="text-white">
        <h1 className=" text-4xl font-fontSolway text-center">
          Oops! Page Not Found
        </h1>
        <p className="text-center font-fontPoppins mt-5">
          We are very sorry for inconvenience. It looks like ypu're trying to
          access a page that was has been deleted or never even existed
        </p>

        <img src={__404} alt="Logo" className="flex mx-auto w-[750px]" />
        <Link
          to="/"
          class="font-fontSolway w-[210px] bg-sky-500 hover:bg-sky-700 px-4 py-1 flex mx-auto uppercase"
        >
          go back home page
        </Link>
      </div>
    </section>
  );
};

export default NotFound;
