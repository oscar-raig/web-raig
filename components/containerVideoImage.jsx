

import React from 'react';
import VideoImage from './videoImage.jsx';


export default class containerVideoImage extends React.Component {

	render() {

		

		var container = this.props.listofvideos.list_videos.map(function(video){
			var style_div = {
			width:"20%",
			height:"100%",
			backgroundColor:"yellow",
			display:"inline-block",
			verticalAlign: "middle"
			};
			return (<div style={style_div}><VideoImage videoid={video} horizontal="true" /></div>);

		});
		var style_div_container = {
			width:"100%",
			height:"100%",
			backgroundColor:"yellow",
			overflowX:"auto",
			overflowY:"hidden",
			whiteSpace: "nowrap"
			};
		return <div style={style_div_container}>{container}</div>
	}


}	