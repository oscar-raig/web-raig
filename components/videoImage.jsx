import React from 'react';

export default class VideoImage extends React.Component {

	getIdVideo(imageYouTube) {
		var str = imageYouTube.split("/");
		console.log(str[4]);
		return str[4];
	}

	handleClick(event) {
		var  data = event.target.getAttribute("src");
    	var idVideo = this.getIdVideo(data)
    	var newUrlVideo = "http://www.youtube.com/embed/" + idVideo + "?autoplay=1";
    					
    	event.target.ownerDocument.getElementById('iframeYouTube').setAttribute("src",newUrlVideo);
  	}
  	
  	render() {

	  	var vidoe_image_style = {
	  		width:"100%",
			height:"100%"
		};
			 
		var urlYoutube = "http://img.youtube.com/vi/" + this.props.videoid + "/0.jpg";
	  	
	    return (<img style={vidoe_image_style} src={urlYoutube} onClick={this.handleClick.bind(this)} />);
	 }
};

