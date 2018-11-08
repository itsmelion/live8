import React from 'react';
import './Header.scss';

const Header = ({ id, title, subtitle, classe, paragraph }) => (
  <header id={id} align="center center" className={`column Header ${classe}`}>
    <div className="contain center">
      <h1 className="display">{title}</h1>
      <h3>{subtitle}</h3>
      {paragraph && <p className="mt1">{paragraph}</p>}
    </div>
  </header>
);

export default Header;
