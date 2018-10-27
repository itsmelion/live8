import React from 'react';

import SonicButtons from 'components/SonicButtons/SonicButtons';
import logo from 'images/logo-white.svg';
import './Home.scss';

const Home = () => (
  <main flex="" fill="" className="column Home" align="around center">
    <img src={logo} alt="Live8 Logo" width="125px" height="auto" />

    <SonicButtons />
  </main>
);

export default Home;
