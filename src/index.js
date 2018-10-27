import './styles/main.scss';
import React from 'react';
import { render } from 'react-dom';
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import Navigation from './components/Navigation/Navigation';
import Footer from './components/Footer/Footer';
import Home from './components/Home/Home';
import SoundHunter from './components/SoundHunter/SoundHunter';
import VR from './components/VR/VR';
import FX from './components/FX/FX';

import * as serviceWorker from './serviceWorker';

render(
  <BrowserRouter>
    <>
      <Navigation />
      <Switch>
        <Route exact path="/" component={Home} />
        <Route exact path="/soundhunter" component={SoundHunter} />
        <Route exact path="/virtual-reality" component={VR} />
        <Route exact path="/sound-effects" component={FX} />
      </Switch>
      <Footer />
    </>
  </BrowserRouter>,

  document.getElementById('root')
);

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: http://bit.ly/CRA-PWA
serviceWorker.register();
