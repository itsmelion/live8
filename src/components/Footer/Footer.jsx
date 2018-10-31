import React, { PureComponent } from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faChevronUp } from '@fortawesome/free-solid-svg-icons';
import Swipeable from 'react-swipeable';
import { faWhatsapp } from '@fortawesome/free-brands-svg-icons';

import './Footer.scss';
import facebook from './facebook.svg';
import instagram from './instagram-wave.svg';
import logo from './logo.svg';

const email = {
  subject: encodeURI('Quero participar do Elenco!'),
  content: encodeURI('Oi, vi o site de vocês e gostaria de saber mais!'),
  to: 'daniel@live8.com.br',
  cc: 'alexandre@live8.com.br'
};

class Footer extends PureComponent {
  constructor(props) {
    super(props);
    this.state = {
      open: false
    };
  }

  swipeUp = () => {
    this.setState(({ open }) => ({ open: !open }));
  };

  render() {
    const { open } = this.state;
    return (
      <>
        <Swipeable
          className="text-center arrow pulse light up"
          onClick={this.swipeUp}
          onSwipedUp={this.swipeUp}
        >
          <FontAwesomeIcon icon={faChevronUp} alt="Swipe up" />
        </Swipeable>

        <footer className={open ? 'open' : 'closed'}>
          <Swipeable
            onSwipedDown={this.swipeUp}
            onClick={this.swipeUp}
            className="text-center pulse arrow down dark"
          >
            <FontAwesomeIcon icon={faChevronUp} alt="Swipe up" />
          </Swipeable>

          <div className="container">
            <div className="row" align="center center">
              <div id="footer-brand">
                <img src={logo} width="80px" height="auto" alt="logo live8" />
              </div>

              <div className="row social-links" align="center center">
                <a id="instagram" href="//instagram.com/grupolive8">
                  <img src={instagram} alt="Instagram" />
                </a>

                <a id="facebook" href="//facebook.com/grupolive8">
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
                  href={`mailto:${email.to}?cc=${email.cc}&subject=${
                    email.subject
                  }&body=${email.content}`}
                >
                  Escrever email
                </a>

                <a
                  className="btn btn-outline-success hidden-md-up iconic"
                  href="tel:+5531995810804"
                >
                  <FontAwesomeIcon icon={faWhatsapp} alt="WhatsApp" />
                  Adicionar aos contatos
                </a>
              </address>
            </div>
          </div>
        </footer>
      </>
    );
  }
}

export default Footer;
