import React from 'react';
import './Header.scss';

const Header = ({ title, subtitle, classe }) => (
  <header column="" align="center center" className={`Header ${classe}`}>
    <div className="lead text-center">
      <h1>{title}</h1>
      <h3>{subtitle}</h3>
    </div>
  </header>
);

export default Header;
