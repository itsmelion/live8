import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPlus } from '@fortawesome/free-solid-svg-icons';
import { Link } from 'react-router-dom';
import './Combo.scss';
import comboLogo from './combo.svg';

const Combo = React.memo(() => (
  <section contain="" id="Combo">
    <div align="center" className="column intercall">
      <img className="liveCombo" src={comboLogo} alt="Live Combo!" />

      <Link to="/soundhunter" row="" align="start center">
        <span className="plus">
          <FontAwesomeIcon icon={faPlus} />
        </span>
        <span flex="">Sound Hunter</span>
      </Link>

      <Link to="/audio-effects" row="" align="start center">
        <span className="plus">
          <FontAwesomeIcon icon={faPlus} />
        </span>
        <span flex="">Audio & Effects</span>
      </Link>

      <Link to="/virtual-reality" row="" align="start center">
        <span className="plus">
          <FontAwesomeIcon icon={faPlus} />
        </span>
        <span flex="">Virtual Reality</span>
      </Link>

      <p className="text-combo">
        3 serviços que se integram e te entregam uma experiência sem igual
      </p>
    </div>
  </section>
));

export default Combo;
