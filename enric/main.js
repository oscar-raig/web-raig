
import React from 'react';
import VideoImage from '../components/videoImage.jsx';
import ContainerVidoeImage from '../components/containerVideoImage.jsx';

main();


function main() {


	React.render(<VideoImage videoid="k-ZOWxVoxmY" />, document.getElementById('patrulla_canina'));
	React.render(<VideoImage videoid="SMFVBAbEDJI" />, document.getElementById('sam_bombero'));

	React.render(<VideoImage videoid="HW0O8-wVJM0" />, document.getElementById('third-video'));
	

	React.render(<VideoImage videoid="wADfcksLLyQ" />, document.getElementById('four-video'));
	React.render(<VideoImage videoid="Kf3pL9KDQlk" />, document.getElementById('five-video'));
	React.render(<VideoImage videoid="ACH-NbMmclw" />, document.getElementById('six-video'));

	

	React.render(<VideoImage videoid="osXurFN0lG8" />, document.getElementById('seven-video'));
	
	var dataVideo = {
		"list_videos" :[
		"k-ZOWxVoxmY",
		"osXurFN0lG8",
		"SMFVBAbEDJI",
		"HW0O8-wVJM0",
		"wADfcksLLyQ",
		"Kf3pL9KDQlk"
		]
	};

	React.render(<ContainerVidoeImage listofvideos={dataVideo}/> ,  
		document.getElementById('elements_of_group_bottom'));

	console.log("Oscar and Enric were here!!"); 
}