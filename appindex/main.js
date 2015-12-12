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
   		href_title="Alguna cosa sobre miii	"
   		image="imatges/oscar_raig_image.jpg"/>,
   		
   		document.getElementById('firstBlock'));

   	React.render(<Block_with_list href="/clau_primaria/clau_primaria_index.html"  
   		href_title="Alguns temes d'Inform&agrave;tica"  
   		image="imatges/matrix_image.png"/>,
   		
   		document.getElementById('secondBlock'));

   	React.render(<Block_with_list href="/collector_obert/collector_obert_index.html"  
   		href_title="Col.lector obert: Alguns temes d'Electr&ograve;nica"  
   		image="imatges/open_collector_image.png"/>,
   		
   		document.getElementById('thirdBlock'));


   	React.render(<Block_with_list href="/cerveses/cerveses_index.html"  
   		href_title="L'apasionant m&oacute;n de les cerveses"  
   		image="imatges/beer_image.jpg"/>,
   		
   		document.getElementById('fourthBlock'));

   		React.render(<Block_with_list href="/receptes/receptes_index.html"  
   		href_title="Receptes de cuina"  
   		image="imatges/callos_imatge.jpg"/>,
   		
   		document.getElementById('secondRowfirstBlock'));




   	React.render(<Icons_bundle/> ,document.getElementById('icons_div'));

   	    analytics_div
   	React.render(<Aanlytics/> ,document.getElementById('analytics_div'));


   
    console.log("Oscar was here!!" + config.rootdirectory);
}
 