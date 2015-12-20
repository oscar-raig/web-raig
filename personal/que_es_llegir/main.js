import React from 'react';
import Block_with_list from '../../components/block_with_list.jsx'

console.log("Que és llegir");
main();


function main() {


    React.render(<Block_with_list href="#"  
    	href_title="Narrativa"
    	image="http://www.raig.cat/imatges/ombravent_420x243.jpg"/>,   
    	document.getElementById('novela'));

    



}