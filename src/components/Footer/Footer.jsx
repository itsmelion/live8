import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faChevronUp } from '@fortawesome/free-solid-svg-icons';
import Swipeable from 'react-swipeable';
import {
  faInstagram,
  faFacebook,
  faWhatsapp,
} from '@fortawesome/free-brands-svg-icons';

import facebook from './facebook.svg';
import instagram from './instagram-wave.svg';
import logo from './logo.svg';

const Footer = () => (
  <>
    <Swipeable
      className="text-center arrow light up"
      style={{
        marginTop: '-96px',
        bottom: '0',
        position: 'absolute',
      }}
      onSwipedUp={this.swipeUp}>

      <FontAwesomeIcon icon={faChevronUp} alt="Swipe up" />
    </Swipeable>
    <footer>
      <section className="text-center arrow down dark">
        <FontAwesomeIcon icon={faFacebook} />
        <FontAwesomeIcon icon={faChevronUp} alt="Swipe up" />
      </section>

      <div className="container">
        <div className="row" align="center center">

          <div id="footer-brand">
            <img src={logo} width="80px" height="auto" alt="logo live8" />
          </div>

          <div className="row social-links" align="center center">
            <a id="instagram" href="//instagram.com/grupolive8">
              <FontAwesomeIcon icon={faInstagram} />
              <img src={instagram} alt="Instagram" />
            </a>

            <a id="facebook" href="//facebook.com/grupolive8">
              <FontAwesomeIcon icon={faFacebook} />
              <img src={facebook} alt="Facebook" />
            </a>
          </div>

          <address>
            <p className="card-text">
              Belo Horizonte/MG
              <br />
              telefone: (31) 9 9581-0804
            </p>

            <a
              className="btn btn-success iconic"
              href="mailto:daniel@live8.com.br?cc=alexandre@live8.com.br&subject=Quero%20participar%20do%20Elenco&amp;&body=Oi%20vi%20o%20site%20de%20voces%20e%20gostaria%20de%20saber%20mais">
              Escrever email
            </a>

            <a
              className="btn btn-outline-success hidden-md-up iconic"
              href="tel:+5531995810804">
              <FontAwesomeIcon icon={faWhatsapp} alt="WhatsApp" />
              Adicionar aos contatos
            </a>
          </address>
        </div>
      </div>
    </footer>
  </>
);

export default Footer;
