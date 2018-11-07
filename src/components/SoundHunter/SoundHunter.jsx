import React from 'react';
import './SoundHunter.scss';
// eslint-disable-next-line import/no-unresolved
import soundhunter from 'images/icons/soundhunter.svg';
import Wave from '../Wave/Wave';
import Header from '../Header/Header';
import AppleCards from '../AppleCards/AppleCards';

const SoundHunter = () => (
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
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
          laborum tempora perspiciatis adipisci ut libero iusto, provident
          quidem commodi, alias nam nihil velit illum. Impedit illum ea corrupti
          perspiciatis porro.
        </p>
      </article>
    </div>

    <div contain="" className="text-center" style={{ marginTop: '3em' }}>
      <h1>Como Funciona?</h1>

      <p style={{ margin: '1rem .5rem' }}>
        É bem simples, são 3 etapas te oferecer a melhor experiencia possível.
      </p>
    </div>

    <Wave />

    <div contain="">
      <AppleCards />
    </div>
  </main>
);

export default SoundHunter;
