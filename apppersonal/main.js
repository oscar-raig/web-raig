import React from 'react';
import BreadCrumb from '../appindex/breadCrumb.jsx';
import MainTitle from './../appindex/mainTitle.jsx';
import config from '../config/';
main();

function main() {
    React.render(<BreadCrumb/>, document.getElementById('home'));
    React.render(<MainTitle title="Qui soc?" rootdir="localhost"  imageMainTitle="thumbs/thumb_circ_colomers_llac_50.jpg" />, document.getElementById('principal_header'));
    console.log("Oscar was here!!" + config.rootdirectory);
}
