import React, { PureComponent } from 'react';
import './Wave.scss';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMusic } from '@fortawesome/free-solid-svg-icons';
import { ReactComponent as WaveSVG } from './wave.svg';

const etapas = ['Sample Step 1', 'Sample Step 2', 'Sample Step 3'];

class Wave extends PureComponent {
  constructor(props) {
    super(props);
    this.classes = ['none', 'one', 'two', 'three'];
    this.state = {
      selectedItem: 0,
    };
  }

  showDetails(i) {
    this.setState({
      selectedItem: i + 1,
    });
  }

  render() {
    const { selectedItem } = this.state;

    return (
      <section id="Wave" className="wave-section">
        <div className={`wave-btn-container ${this.classes[selectedItem]}`}>
          <WaveSVG />

          <ul className="tabs">
            {etapas.map((item, i) => (
              <button
                key={item}
                type="button"
                onClick={() => this.showDetails(i)}
                className={`row button wave-btn ${selectedItem === i + 1}`}
                align="center center"
              >
                <FontAwesomeIcon icon={faMusic} className="caption" />
              </button>
            ))}
          </ul>
        </div>

        <ul className="wave-details" contain="">
          {etapas.map((item, i) => (
            <li className={`center ${selectedItem === i + 1}`} key={item}>
              <h3>{item}</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                optio assumenda praesentium doloremque asperiores reiciendis
                temporibus, et repudiandae dolor doloribus libero ad est!
                Exercitationem voluptatum, architecto sed placeat aliquam
                excepturi.
              </p>
            </li>
          ))}
        </ul>
      </section>
    );
  }
}

export default Wave;
