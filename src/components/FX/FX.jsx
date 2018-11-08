import React from 'react';
import './FX.scss';
import jokey from './images/jokey.png';
import Gallery from '../Gallery/Gallery';
import Combo from '../Combo/Combo';

// FX = SoundEffects
const FX = () => (
  <>
    <header id="headerFX" column="" align="center center">
      <div className="swipe fx1" />
      <div className="swipe fx2" />
      <div className="swipe fx3" />

      <div className="lead text-center">
        <h1 className="display">Sound Effects</h1>
        <h3>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nobis
          rem quasi alias, facere cupiditate sed quia.
        </h3>
      </div>
    </header>

    <section className="duplex" id="FX">
      <article className="contain row">
        <div mobile-flex="100" flex="50" className="artigo">
          <h3 className="mv1 mt2">Section Title</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis
            pariatur, quas quibusdam nostrum ab laudantium in quasi provident
            officia harum libero explicabo, incidunt velit omnis aspernatur
            cupiditate ducimus illum repudiandae.
          </p>
        </div>

        <div mobile-flex="100" flex="50" className="text-right">
          <img src={jokey} alt="DJ" />
        </div>
      </article>
    </section>

    <section className="center mv10">
      <h2>Galeria</h2>
      <p>Veja abaixo nossas fotos</p>

      <Gallery />
    </section>

    <Combo />
  </>
);

export default FX;
