import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faHome } from '@fortawesome/free-solid-svg-icons';
import { NavLink } from 'react-router-dom';
import './Navigation.scss';

const Navigation = () => (
  <nav className="menu">
    <NavLink title="Página inicial" to="/" className="menu-item">
      <FontAwesomeIcon icon={faHome} alt="Home" />
    </NavLink>
  </nav>
);

export default Navigation;
