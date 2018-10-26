import './styles/main.scss';
import React from 'react';
import { render } from 'react-dom';
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import App from './App';
import * as serviceWorker from './serviceWorker';

import Navigation from '/components/Navigation/Navigation';

render(
  <BrowserRouter>
    <>
      <Navigation />
      <Switch>
        <Route exact path="/" component={Home} />
      </Switch>
      <Footer />
    </>
  </BrowserRouter>,

  document.getElementById('root')
);

<BrowserRouter>
  <>
    <Navigation />
    <Switch>
      <Route exact path="/" component={Home} />
      {/* <Route path="/cases" component={Cases} /> */}
      <Route path="/portfolio" component={Portfolio} />
      <Route path="/resume" component={Resume} />
    </Switch>
    <Footer />
  </>
</BrowserRouter>

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: http://bit.ly/CRA-PWA
serviceWorker.register();
