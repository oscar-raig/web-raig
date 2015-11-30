import React from 'react';
import BreadCrumb from './breadCrumb.jsx';
import MainTitle from './mainTitle.jsx';
main();

function main() {
    React.render(<BreadCrumb/>, document.getElementById('home'));
    React.render(<MainTitle/>, document.getElementById('principal_header'));
}