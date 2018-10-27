import React, { PureComponent } from 'react';
import './Wave.scss';
import { ReactComponent as WaveSVG } from './wave.svg';

const etapas = ['Sample Step 1', 'Sample Step 2', 'Sample Step 3'];

class Wave extends PureComponent {
  constructor(props) {
    super(props);
    this.state = {};
  }

  render() {
    return (
      <section id="Wave" className="wave-section">
        <div className="wave-btn-container">
          <WaveSVG />

          <ul className="tabs justify-content-center">
            {etapas.map((item, i) => (
              <li key={item} data-id={i}>
                <button type="button" data-id={i} className="wave-btn wave-thing">
                  <span className="caption">{item}</span>
                </button>
              </li>
            ))}
          </ul>
        </div>

        <ul className="row tab__content">
          <li className="active"><div className="content__wrapper" /></li>

          {etapas.map(item => (
            <li key={item} className="offset-md-3 col-md-6">
              <div className="content__wrapper text-center">
                <h2>{item}</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Aliquid optio assumenda praesentium doloremque asperiores
                  reiciendis temporibus, et repudiandae dolor doloribus libero ad est!
                  Exercitationem voluptatum, architecto sed placeat aliquam excepturi.
                </p>
              </div>
            </li>
          ))}
        </ul>
      </section>
    );
  }
}

export default Wave;
