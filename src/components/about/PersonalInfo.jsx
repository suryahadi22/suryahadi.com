import React from "react";

const personalInfoContent = [
  { meta: "Name", metaInfo: "Suryahadi Eko Hanggoro" },
  { meta: "Age", metaInfo: "23 Years" },
  { meta: "Nationality", metaInfo: "Indonesia" },
  { meta: "Freelance", metaInfo: "Available" },
  { meta: "Address", metaInfo: "Tulungagung" },
  { meta: "Phone", metaInfo: "+6285806602320" },
  { meta: "Email", metaInfo: "halo@suryahadi.com" },
  { meta: "Instagram", metaInfo: "@suryahadi22" },
  { meta: "Facebook", metaInfo: "Suryahadi Eko Hanggoro" },
  { meta: "Twitter", metaInfo: "@suryahadi22" },
  { meta: "Languages", metaInfo: "Indonesia, English" },
];

const PersonalInfo = () => {
  return (
    <ul className="about-list list-unstyled open-sans-font">
      {personalInfoContent.map((val, i) => (
        <li key={i}>
          <span className="title">{val.meta}: </span>
          <span className="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">
            {val.metaInfo}
          </span>
        </li>
      ))}
    </ul>
  );
};

export default PersonalInfo;
