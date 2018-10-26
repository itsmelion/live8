import React, { PureComponent } from 'react';

// import './SonicButtons.scss';

const items = [
  {
    icon: '/images/icons/soundhunter.svg',
    text: `Briefing e assessoria personalizada para escolha das atrações musicais,
    consultoria técnica especializada em infraestrutura para eventos`,
    caption: 'Sound Hunter',
  },
  {
    icon: '/images/icons/soundfx.svg',
    text: `Locação e montagem de equipamentos profissionais de audio e efeitos visuais,
    desenvolvimento de projetos personalizados em plataforma 3D`,
    caption: 'Audio & Effects',
  },
  {
    icon: '/images/icons/vr.svg',
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
      <header className="home">
        <section className="container-fluid degrade-icons">
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
              className="social"
              tabIndex="-1"
              role="dialog"
              aria-labelledby="modal-label"
              aria-hidden="true"
            >
              <img src={item.icon} alt={item.caption} />
              <h2>{item.caption}</h2>
              <p>{item.text}</p>
              <a href="soundhunter" className="btn btn-primary">Veja mais</a>
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
