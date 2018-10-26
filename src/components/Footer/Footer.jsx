import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import {
  faInstagram,
  faFacebook,
  faWhatsapp,
} from '@fortawesome/free-brands-svg-icons';

const Footer = () => (
  <footer>
    <section className="text-center arrow down dark">
      <FontAwesomeIcon icon={faFacebook} />
      <img src="<?php echo get_bloginfo('template_url') ?>/images/icons/arrow.svg" alt="Swipe up" />
    </section>

    <div className="container">
      <div className="row d-flex justify-content-center align-items-center">

        <div id="footer-brand">
          <img src="<?php echo get_bloginfo('template_url') ?>/images/logo.svg" width="80px" height="auto" alt="logo live8" />
        </div>

        <div className="row d-flex justify-content-center align-items-center social-links">

          <a id="instagram" href="//instagram.com/grupolive8">
            <FontAwesomeIcon icon={faInstagram} />
            <img src="<?php echo get_bloginfo('template_url') ?>/images/icons/instagram-wave.svg" alt="Instagram" />
          </a>

          <a id="facebook" href="//facebook.com/grupolive8">
            <FontAwesomeIcon icon={faFacebook} />
            <img src="<?php echo get_bloginfo('template_url') ?>/images/icons/facebook.svg" alt="Facebook" />
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
            href="mailto:daniel@live8.com.br?cc=alexandre@live8.com.br&subject=Quero%20participar%20do%20Elenco&amp;&body=Oi%20vi%20o%20site%20de%20voces%20e%20gostaria%20de%20saber%20mais"
          >
            Escrever email
          </a>

          <a className="btn btn-outline-success hidden-md-up iconic" href="tel:+5531995810804">
            <FontAwesomeIcon icon={faWhatsapp} />
            <img src="<?php echo get_bloginfo('template_url') ?>/images/icons/whatsapp.svg" alt="WhatsApp" />
            Adicionar aos contatos
          </a>
        </address>
      </div>
    </div>
  </footer>
);

export default Footer;
