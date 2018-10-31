import React from 'react';
import './SoundHunter.scss';
import soundhunter from 'images/icons/soundhunter.svg';
import Wave from 'components/Wave/Wave';
import Header from 'components/Header/Header';

const SoundHunter = () => (
  <main id="SoundHunter">
    <Header
      title="SoundHunter"
      subtitle="saidjasidjia asdasdadmasd asdas dqwd qwd fiomrgoerm"
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

    <div className="text-center" style={{ marginTop: '3em' }}>
      <h1>Como Funciona?</h1>

      <p style={{ margin: '1rem .5rem' }}>
        É bem simples, são 3 etapas te oferecer a melhor experiencia possível.
      </p>
    </div>

    <Wave />
  </main>
);

export default SoundHunter;
