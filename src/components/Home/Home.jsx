import React from 'react';

import SonicButtons from 'components/SonicButtons/SonicButtons';
import logo from 'images/logo-white.svg';
import headerImageLarge from './header.jpg';
import headerImageMobile from './header-iphone.jpg';
import './Home.scss';

const Home = () => (
  <main flex="" fill="" className="column Home" align="around center">
    <img src={logo} alt="Live8 Logo" width="125px" height="auto" />

    <SonicButtons />

    {
      (() => {
        const { body } = document;
        const bg = (window.outerWidth > 999) ? headerImageLarge : headerImageMobile;
        body.classList.add('home');
        body.style.backgroundImage = `url(${bg})`; return null;
      })()
    }
  </main>
);

export default Home;
