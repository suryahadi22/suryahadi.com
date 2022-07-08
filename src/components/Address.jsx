import React from "react";

const Address = () => {
  return (
    <>
      <p className="open-sans-font custom-span-contact position-relative">
        <i className="fa fa-map position-absolute"></i>
        <span className="d-block">Address Point</span>RT 02 RW 01 Dusun Contong Desa Bandung Kec. Bandung Kab. Tulungagung<br /> East Java - Indonesia.
      </p>
      {/* End .custom-span-contact */}

      <p className="open-sans-font custom-span-contact position-relative">
        <i className="fa fa-envelope-open position-absolute"></i>
        <span className="d-block">mail me</span>{" "}
        <a href="mailto:halo@suryahadi.com">halo@suryahadi.com</a>
      </p>
      {/* End .custom-span-contact */}

      <p className="open-sans-font custom-span-contact position-relative">
        <i className="fa fa-phone-square position-absolute"></i>
        <span className="d-block">call me</span>{" "}
        <a href="Tel: +6285806602320">+6285806602320</a>
      </p>
      {/* End .custom-span-contact */}
    </>
  );
};

export default Address;
