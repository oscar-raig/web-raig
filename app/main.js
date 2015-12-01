import React from 'react';
import BreadCrumb from './breadCrumb.jsx';
import MainTitle from './mainTitle.jsx';
main();

function main() {
    React.render(<BreadCrumb/>, document.getElementById('home'));
    React.render(<MainTitle title="Benvinguts a la p&agrave;gina  de l Oscar Raig!!!"/>, document.getElementById('principal_header'));
}
