require('./bootstrap');

import React from 'react';
import ReactDOM from 'react-dom'
import { Provider } from '@shopify/app-bridge-react';
import enTranslations from '@shopify/polaris/locales/en.json';
import { AppProvider } from '@shopify/polaris';

const App = () => {
  const config = {
    apiKey: document.getElementById("apiKey").value,
    host: document.getElementById("host").value,
  };

  return (
    <AppProvider i18n={ enTranslations}>
      <Provider config={ config }>
        React test!
      </Provider>
    </AppProvider>
  )
};

if (document.getElementById("app")) {
  ReactDOM.render(<App/>, document.getElementById("app"));
}