require('./bootstrap');

import React from 'react';
import ReactDOM from 'react-dom'

const App = () => {
  return (
    <div>
      React test!
    </div>
  )
};

if (document.getElementById("app")) {
  ReactDOM.render(<App/>, document.getElementById("app"));
}