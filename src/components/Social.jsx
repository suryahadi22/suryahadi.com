import React from "react";

const SocialShare = [
  {
    iconName: "fa fa-facebook",
    link: "https://www.facebook.com/suryahadieh",
  },
  {
    iconName: "fa fa-twitter",
    link: "https://twitter.com/suryahadi22"
  },
  {
    iconName: "fa fa-instagram",
    link: "https://www.instagram.com/suryahad22/"
  },
  {
    iconName: "fa fa-linkedin",
    link: "https://www.linkedin.com/in/suryahadi-eko-hanggoro-215464147/"
  },
  {
    iconName: "fa fa-github",
    link: "https://github.com/suryahadi22"
  },
  {
    iconName: "fa fa-whatsapp",
    link: "https://wa.me/6285806602320"
  },
  {
    iconName: "fa fa-telegram",
    link: "https://t.me/suryahadi22"
  }
];

const Social = () => {
  return (
    <ul className="social list-unstyled pt-1 mb-5">
      {SocialShare.map((val, i) => (
        <li key={i}>
          <a href={val.link} target="_blank" rel="noreferrer">
            <i className={val.iconName}></i>
          </a>
        </li>
      ))}
    </ul>
  );
};

export default Social;
