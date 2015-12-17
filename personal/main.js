import React from 'react';
import BreadCrumb from '../components/breadCrumb.jsx';
import MainTitle from '../components/mainTitle.jsx';

import config from '../config/';
main();

function main() {
	var dataBreadCrumb = [
  		{link: "http://www.raig.cat", linkName: "Inici"},
  		{link: "http://www.raig.cat/personal/personal_index.html", linkName: "Personal"},

	];
    React.render(<BreadCrumb  data = {dataBreadCrumb} />, 
    	document.getElementById('home'));

    React.render(<MainTitle title="Qui sSoc?" rootdir="localhost" image_width="70%"
     imageMainTitle="thumbs/thumb_circ_colomers_llac_50.jpg" />, 
     document.getElementById('principal_header'));


    console.log("Oscar was here!!" + config.rootdirectory);
} 
