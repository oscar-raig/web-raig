import React from 'react';
import BreadCrumb from './breadCrumb.jsx';
import MainTitle from './mainTitle.jsx';
import config from '../config/';
import Block_with_list from '../components/block_with_list.jsx'
import Icons_bundle from '../components/icons_bundle.jsx'
import Aanlytics from '../components/analytics.jsx'
main();

function main() {

	var dataBreadCrumb = [
  		{link: "http://www.raig.cat", linkName: "Inici"}
	];

    React.render(<BreadCrumb data = {dataBreadCrumb} />, document.getElementById('home'));
    React.render(<MainTitle title="Benvinguts a la p&agrave;gina  de l Oscar Raig!!!" 
    	rootdir="localhost"  imageMainTitle="thumbs/thumb_cami_50.jpg"  />, 
    	document.getElementById('principal_header'));
   	React.render(<Block_with_list href="/personal/personal_index.html"  
   		href_title="Alguna cosa sobre miii	" />, 
   		document.getElementById('firstBlock'));

   	React.render(<Icons_bundle/> ,document.getElementById('icons_div'));

   	    analytics_div
   	React.render(<Aanlytics/> ,document.getElementById('analytics_div'));
   
    console.log("Oscar was here!!" + config.rootdirectory);
}
 