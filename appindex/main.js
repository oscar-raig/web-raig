import React from 'react';
import BreadCrumb from './breadCrumb.jsx';
import MainTitle from './mainTitle.jsx';
import config from '../config/';
import Block_with_list from '../components/block_with_list.jsx'
main();

function main() {

	var dataBreadCrumb = [
  		{link: "http://www.raig.cat", linkName: "Inici"},
  		{link: "http://www.raig.cat/personal/personal_index.html", linkName: "Personal"},

	];

    React.render(<BreadCrumb data = {dataBreadCrumb} />, document.getElementById('home'));
    React.render(<MainTitle title="Benvinguts a la p&agrave;gina  de l Oscar Raig!!!" 
    	rootdir="localhost"  imageMainTitle="thumbs/thumb_cami_50.jpg"  />, 
    	document.getElementById('principal_header'));
   	React.render(<Block_with_list href="/personal/personal_index.html"  
   		href_title="Alguna cosa sobre miii	" />, 
   		document.getElementById('firstBlock'));
   
    console.log("Oscar was here!!" + config.rootdirectory);
}
 