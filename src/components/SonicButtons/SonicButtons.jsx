import React, { PureComponent } from 'react';
import { Link } from 'react-router-dom';

import soundhunter from './soundhunter.svg';
import soundfx from './soundfx.svg';
import vr from './vr.svg';
// import './SonicButtons.scss';

const items = [
  {
    icon: soundhunter,
    route: '/soundhunter',
    text: `Briefing e assessoria personalizada para escolha das atrações musicais,
    consultoria técnica especializada em infraestrutura para eventos`,
    caption: 'Sound Hunter',
  },
  {
    icon: soundfx,
    route: '/sound-effects',
    text: `Locação e montagem de equipamentos profissionais de audio e efeitos visuais,
    desenvolvimento de projetos personalizados em plataforma 3D`,
    caption: 'Audio & Effects',
  },
  {
    icon: vr,
    route: '/virtual-reality',
    text: `Cobertura de eventos com filmagem e edição em 360º, técnicas de realidade
    aumentada e time-lapse, entrega de box para reprodução de vídeos
    em realidade virtual`,
    caption: 'Virtual Reality',
  },
];

class SonicButtons extends PureComponent {
  constructor(props) {
    super(props);
    this.state = {};
  }

  render() {
    return (
      <header className="home text-center">
        <section className="degrade-icons">
          <div className="row">
            <ul className="justify-content-center">
              {items.map((item, i) => (
                <li key={item.caption} data-id={i}>
                  <a className="wave-btn wave-thing" href={`#bottom-sheet${i}`}>
                    <img src={item.icon} alt={item.caption} />
                    <span className="caption">{item.caption}</span>
                  </a>
                </li>
              ))}
            </ul>
          </div>
        </section>

        {items.map((item, i) => (
          <div key={item.caption} id={`bottom-sheet${i}`} className="overlay">
            <aside
              className="contain social"
              tabIndex="-1"
              role="dialog"
              aria-labelledby="modal-label"
              aria-hidden="true"
            >
              <img src={item.icon} alt={item.caption} />
              <h2>{item.caption}</h2>
              <p>{item.text}</p>
              <Link to={item.route} className="btn btn-primary">Veja mais</Link>
            </aside>

            <a href="#close" className="btn-close" aria-hidden="true">
              <span className="sr-only">Close</span>
            </a>
          </div>
        ))}
      </header>
    );
  }
}

export default SonicButtons;
