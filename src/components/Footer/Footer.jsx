import React, { PureComponent } from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faChevronUp } from '@fortawesome/free-solid-svg-icons';
import { faWhatsapp } from '@fortawesome/free-brands-svg-icons';
import Swipeable from 'react-swipeable';
import './Footer.scss';
import facebook from './facebook.svg';
import instagram from './instagram-wave.svg';
import logo from './logo.svg';

const email = {
  subject: encodeURI('Quero participar do Elenco!'),
  content: encodeURI('Oi, vi o site de vocês e gostaria de saber mais!'),
  to: 'daniel@live8.com.br',
  cc: 'alexandre@live8.com.br',
};

class Footer extends PureComponent {
  constructor(props) {
    super(props);
    this.state = {
      open: false,
    };
  }

  swipeUp = () => {
    this.setState(({ open }) => ({ open: !open }));
  };

  render() {
    const { open } = this.state;

    return (
      <footer className={open ? 'open' : 'closed'}>
        <Swipeable
          onSwipedDown={this.swipeUp}
          onClick={this.swipeUp}
          className="center pulse arrow up"
        >
          <FontAwesomeIcon icon={faChevronUp} alt="Swipe up" />
          <p>Clique ou arraste</p>
        </Swipeable>

        <section className="footer-content">
          <Swipeable
            onSwipedDown={this.swipeUp}
            onClick={this.swipeUp}
            className="center pulse arrow down"
          >
            <FontAwesomeIcon icon={faChevronUp} alt="Swipe down" />
            <p>Clique ou arraste</p>
          </Swipeable>

          <div contain="" row="" align="around center">
            <div id="footer-brand">
              <img src={logo} width="80px" height="auto" alt="logo live8" />
            </div>

            <div className="row social-links" align="center center">
              <a
                target="_blank"
                rel="noopener noreferrer"
                id="instagram"
                href="//instagram.com/grupolive8"
              >
                <img src={instagram} alt="Instagram" />
              </a>

              <a
                target="_blank"
                rel="noopener noreferrer"
                id="facebook"
                href="//facebook.com/grupolive8"
              >
                <img src={facebook} alt="Facebook" />
              </a>
            </div>

            <address>
              <p className="card-text">
                Belo Horizonte - Minas Gerais
                <br />
                <a href="tel:+5531995810804">(31) 9 9581-0804</a>
              </p>

              <a
                className="iconic"
                href={`mailto:${email.to}?cc=${email.cc}&subject=${
                  email.subject
                }&body=${email.content}`}
              >
                Escrever email
              </a>

              <a className="iconic" href="tel:+5531995810804">
                <FontAwesomeIcon icon={faWhatsapp} alt="WhatsApp" />
                Adicionar aos contatos
              </a>
            </address>
          </div>
        </section>
      </footer>
    );
  }
}

export default Footer;
