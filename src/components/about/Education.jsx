import React from "react";

const educationContent = [
  {
    year: "2019 - Present",
    degree: "COLLAGE",
    institute: "PEMBANGUNAN JAYA UNIVERSITY",
    details: ``,
  },
  {
    year: "2020",
    degree: "STUDENT ",
    institute: "Dicoding",
    details: ``,
  },
];

const Education = () => {
  return (
    <ul>
      {educationContent.map((val, i) => (
        <li key={i}>
          <div className="icon">
            <i className="fa fa-briefcase"></i>
          </div>
          <span className="time open-sans-font text-uppercase">{val.year}</span>
          <h5 className="poppins-font text-uppercase">
            {val.degree}
            <span className="place open-sans-font">{val.institute}</span>
          </h5>
          <p className="open-sans-font">{val.details}</p>
        </li>
      ))}
    </ul>
  );
};

export default Education;
