import React from 'react';
import BreadCrumb from './breadCrumb.jsx';
import MainTitle from './mainTitle.jsx';
import config from '../config/';
main();

function main() {
    React.render(<BreadCrumb/>, document.getElementById('home'));
    React.render(<MainTitle title="Benvinguts a la p&agrave;gina  de l Oscar Raig!!!" rootdir="localhost"   />, document.getElementById('principal_header'));
    console.log("Oscar was here!!" + config.rootdirectory);
}
