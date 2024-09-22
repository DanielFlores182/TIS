import React from 'react';
import ReactDOM from 'react-dom';
import Component from './components/component';

if (document.getElementById('react-app')) {
    ReactDOM.render(<Component />, document.getElementById('react-app'));
}
