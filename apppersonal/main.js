import React from 'react';
import BreadCrumb from '../appindex/breadCrumb.jsx';
import MainTitle from './../appindex/mainTitle.jsx';

import config from '../config/';
main();

function main() {
	var dataBreadCrumb = [
  		{link: "http://www.raig.cat", linkName: "Inici"},
  		{link: "http://www.raig.cat/personal/personal_index.html", linkName: "Personal"},

	];
    React.render(<BreadCrumb  data = {dataBreadCrumb} />, 
    	document.getElementById('home'));
    React.render(<MainTitle title="Qui soc?" rootdir="localhost" 
     imageMainTitle="thumbs/thumb_circ_colomers_llac_50.jpg" />, 
     document.getElementById('principal_header'));


    console.log("Oscar was here!!" + config.rootdirectory);
} 
