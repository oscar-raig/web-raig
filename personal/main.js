import React from 'react';
import BreadCrumb from '../components/breadCrumb.jsx';
import MainTitle from '../components/mainTitle.jsx';
import Block_with_list from '../components/block_with_list.jsx'

import config from '../config/';
main();

function main() {
	var dataBreadCrumb = [
  		{link: "http://www.raig.cat", linkName: "Inici"},
  		{link: "http://www.raig.cat/personal/personal_index.html", linkName: "Personal"},

	];
    React.render(<BreadCrumb  data = {dataBreadCrumb} />, 
    	document.getElementById('home'));

    React.render(<MainTitle title="Qui soc?" rootdir="localhost" image_width="70%"
     imageMainTitle="thumbs/thumb_circ_colomers_llac_50.jpg" />, 
     document.getElementById('principal_header'));


    React.render(<Block_with_list href=""  
    href_title="La resposta es ben senzilla: s&oacute;c aquest, s&oacute;c un entre tants ... Si et vols posar en contacte amb mi pots enviar-me un mail a: oscar.raig@gmail.com"  
    image="http://www.raig.cat/imatges/cerveser_desde_sempre.jpg"/>,   
    document.getElementById('quisoc'));

    React.render(<Block_with_list href="http://www.raig.cat/personal/que_es_llegir/que_es_llegir.html"  
    href_title="Alguns comentaris sobre llibres"  
    image="http://www.raig.cat/imatges/ombravent_420x243.jpg"/>,   
    document.getElementById('novela'));

    React.render(<Block_with_list href="https://dayzeroproject.com/user/oscar.raig/list/all"  
      href_title="101 objectius en 1000 dies"  
      image="http://www.raig.cat/imatges/dayzerologo2014.png"/>,   
      document.getElementById('dayzero'));

    React.render(<Block_with_list href="http://www.raig.cat/personal/101in1001.html"  
      href_title="101 objectius en 1000 dies: el seguiment"  
      image="http://www.raig.cat/imatges/dayzerologo2014.png"/>,   
      document.getElementById('dayzero-seguiment'));

    console.log("Oscar was here!!" + config.rootdirectory);
} 
