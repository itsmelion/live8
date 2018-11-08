import React from 'react';
import Combo from '../Combo/Combo';
import Header from '../Header/Header';
import AppleCards from '../AppleCards/AppleCards';
import vr1 from './images/1.png';
import vr2 from './images/2.png';
import './VR.scss';

const VR = () => (
  <>
    <Header
      id="headerVR"
      title="Virtual Reality"
      subtitle="Facilis reiciendis incidunt quae repellendus cumque"
      paragraph="Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Facilis reiciendis incidunt quae repellendus cumque.
      Molestiae doloribus provident voluptatibus necessitatibus sunt,
      distinctio, corrupti, laboriosam libero optio impedit
      soluta sint commodi assumenda."
    />

    <section className="contain center" id="insight360">
      <div className="mt2">
        <h1>Section Title</h1>
        <p className="mv1">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
          reiciendis incidunt quae repellendus cumque. Molestiae doloribus
          provident voluptatibus necessitatibus sunt, distinctio, corrupti,
          laboriosam libero optio impedit soluta sint commodi assumenda.
        </p>
      </div>

      <div contain="">
        <img id="box-closed" src={vr1} alt="oculos Live8 atributos" />
        <img id="box-open" src={vr2} alt="oculos Live8 atributos" />
      </div>

      <div className="mv10">
        <div className="mv10">
          <h2>Exemplos</h2>
          <p>Veja abaixo alguns vídeos 360º</p>
        </div>

        <AppleCards />
      </div>
    </section>

    <Combo />
  </>
);

export default VR;
