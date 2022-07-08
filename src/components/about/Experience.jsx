import React from "react";

const experienceContent = [
  {
    year: "   May 2022 - Present",
    position: "CEO and Founder",
    compnayName: "MarkasDEV",
    details: `MarkasDEV is a startup company that is focused on develops software and web applications.`,
  },
  {
    year: "   Aug 2020 - Mei 2022",
    position: " IT Manager",
    compnayName: "PT Digital Cipta Gemilang",
    details: `  Manage and maintain the IT infrastructure of the company. And ensure the project is completed on time.`,
  },
  {
    year: "   Feb 2019 - Jun 2020",
    position: " IT Support",
    compnayName: "PT Movitek Kreatif Digital",
    details: `My Job Desk is Maintenance Server, Network, Software, and Hardware to ensure if the system is working properly.`,
  },
  {
    year: "   Feb 2017 - Aug 2017",
    position: " Admin Power",
    compnayName: "PT Bambang Djaja",
    details: `Vocational School Asigment`,
  },
];

const Experience = () => {
  return (
    <ul>
      {experienceContent.map((val, i) => (
        <li key={i}>
          <div className="icon">
            <i className="fa fa-briefcase"></i>
          </div>
          <span className="time open-sans-font text-uppercase">{val.year}</span>
          <h5 className="poppins-font text-uppercase">
            {val.position}
            <span className="place open-sans-font">{val.compnayName}</span>
          </h5>
          <p className="open-sans-font">{val.details}</p>
        </li>
      ))}
    </ul>
  );
};

export default Experience;
