import React from "react";

const Portfolio = () => {
  return (
    <div className="portfolio text-center">
      <div className="col-12 mt-1">
        <a className="button" href="documents/portofolio_surya.pdf" download>
          <span className="button-text">Download Portfolio</span>
          <span className="button-icon fa fa-download"></span>
        </a>
      </div>
    </div>
  );
};

export default Portfolio;
