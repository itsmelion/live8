import React, { PureComponent } from 'react';
import Modal from 'react-modal';

import './SoundHunter.scss';
// eslint-disable-next-line import/no-unresolved
import soundhunter from 'images/icons/soundhunter.svg';
import iWantYou from './images/i-want-you.png';
import Wave from '../Wave/Wave';
import Header from '../Header/Header';
import AppleCards from '../AppleCards/AppleCards';
import Combo from '../Combo/Combo';

Modal.setAppElement('#root');

const email = {
  subject: encodeURI('Quero participar do Elenco!'),
  content: encodeURI(
    'Oi, vi o site de vocês e gostaria de saber mais sobre SoundHunter!',
  ),
  to: 'daniel@live8.com.br',
  cc: 'alexandre@live8.com.br',
};

const modalStyling = {
  overlay: {
    backgroundColor: 'rgba(5, 10, 5, .5)',
  },

  content: {
    top: 'unset',
    padding: 0,
    bottom: 0,
    color: 'black',
  },
};

class SoundHunter extends PureComponent {
  state = {
    openDialog: false,
  };

  handleOpenModal = () => {
    this.setState({ openDialog: true });
  };

  handleCloseModal = () => {
    this.setState({ openDialog: false });
  };

  render() {
    const { openDialog } = this.state;

    return (
      <main id="SoundHunter">
        <Header
          title="Sound Hunter"
          subtitle="Lorem, ipsum dolor sit amet consectetur adipisicing elit."
          classe="soundhunter-header"
        />

        <div className="tip">
          <img src={soundhunter} alt="soundwave" />

          <article column="" align="start stretch">
            <h3 style={{ paddingRight: '90px' }}>O que é um SoundHunter?</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Excepturi, laborum tempora perspiciatis adipisci ut libero iusto,
              provident quidem commodi, alias nam nihil velit illum. Impedit
              illum ea corrupti perspiciatis porro.
            </p>
          </article>
        </div>

        <div contain="" className="text-center" style={{ marginTop: '3em' }}>
          <h1>Como Funciona?</h1>

          <p style={{ margin: '1rem .5rem' }}>
            É bem simples, são 3 etapas te oferecer a melhor experiencia
            possível.
          </p>
        </div>

        <Wave />

        <div contain="">
          <AppleCards />

          <div className="row mv2" align="center">
            <button
              type="button"
              className="button btn btn-primary center mv10"
              onClick={this.handleOpenModal}
            >
              Eu tenho uma banda
            </button>

            <Combo />
          </div>

          <Modal
            shouldCloseOnOverlayClick
            onRequestClose={this.handleCloseModal}
            isOpen={openDialog}
            style={modalStyling}
          >
            <aside
              className="center social"
              tabIndex="-1"
              role="dialog"
              aria-labelledby="modal-label"
              aria-hidden="true"
            >
              <h1 className="m-3">Entre pro time!</h1>

              <p className="text-left">
                Inscreva a sua banda, seja visto!
                <br />
                Nós temos uma excelente infraestrutura para os seus shows, e
                conosco voce ganha mais visibilidade.
              </p>

              <a
                className="btn btn-primary"
                href={`mailto:${email.to}?cc=${email.cc}&subject=${
                  email.subject
                }&body=${email.content}`}
              >
                Entre em contato
              </a>

              <img src={iWantYou} alt="Queremos você!" />
            </aside>

            <a href="#close" className="btn-close" aria-hidden="true">
              <span className="sr-only">Close</span>
            </a>
          </Modal>
        </div>
      </main>
    );
  }
}

export default SoundHunter;
