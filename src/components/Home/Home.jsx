import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faChevronUp } from '@fortawesome/free-solid-svg-icons';

import SonicButtons from 'components/SonicButtons/SonicButtons';
import logo from 'images/logo-white.svg';
import headerImageLarge from './header.jpg';
import headerImageMobile from './header-iphone.jpg';

const Home = () => (
  <main flex="" fill="" className="column Home">
    <img src={logo} alt="Live8 Logo" width="125px" height="auto" />
    {
      (() => {
        const bg = (window.outerWidth > 999) ? headerImageLarge : headerImageMobile;
        document.body.style.backgroundImage = `url(${bg})`; return null;
      })()
    }

    <SonicButtons />

    <div
      className="text-center arrow light up"
      style={{
        marginTop: '-96px',
        bottom: '0',
        position: 'absolute',
      }}
    >

      <FontAwesomeIcon icon={faChevronUp} alt="Swipe up" />
    </div>
  </main>
);

export default Home;
