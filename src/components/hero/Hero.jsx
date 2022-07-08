import React from "react";

const heroContent = {
  heroImage: "img/hero/72153286_947389682263307_8541890331912699904_n.jpg",
  heroImageMobile: "img/hero/72153286_947389682263307_8541890331912699904_n_small.jpg",
  heroTitleName: "Suryahadi Eko Hanggoro",
  heroDesignation: "IT Developer",
  heroDescriptions: `A professional IT Developer, network infrastructure, software enginer, server setup and management.`,
};

const Hero = () => {

  return (
    <>
      <div className="row home-details-container align-items-center">
        <div
          className="col-lg-4 bg position-fixed d-none d-lg-block"
          style={{
            backgroundImage: `url(${
              process.env.PUBLIC_URL + heroContent.heroImage
            })`,
          }}
        ></div>
        <div className="col-12 col-lg-8 offset-lg-4 home-details text-center text-lg-start">
          <div>
            <img
              src={heroContent.heroImageMobile}
              className="img-fluid main-img-mobile d-sm-block d-lg-none"
              alt="hero man"
            />
            <h1 className="text-uppercase poppins-font">
              I'm {heroContent.heroTitleName}.
              <span>{heroContent.heroDesignation}</span>
            </h1>
            <p className="open-sans-font">{heroContent.heroDescriptions}</p>
          </div>
        </div>
      </div>
      {/* End home-details-container */}
    </>
  );
};

export default Hero;
