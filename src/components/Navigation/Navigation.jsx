import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHome } from '@fortawesome/free-solid-svg-icons';
import './Navigation.scss';

const Navigation = () => (
  <nav className="menu">
    <a title="Página inicial" href="/" className="menu-item">
      <FontAwesomeIcon icon={faHome} alt="Home" />
    </a>
  </nav>
);

export default Navigation;
