
import React from 'react';
import config from '../config/';


export default class MainTitle extends React.Component {
  render() {
  	var div_main_title_style = {
  		margin:'10px',
  		clear:'both'

  	}
    var image_style = {
        width:'100%'
    };

    if (this.props.image_width != null) {
        image_style.width = this.props.image_width;
    }
  	const rootDir = config.rootdirectory + "imatges/cami.jpg";
  	const imageMainTitle = this.props.imageMainTitle;
  	const rootAndimage = config.rootdirectory  + this.props.imageMainTitle;

    

	return (<div style={div_main_title_style}>
				<h1>{this.props.title}</h1>
				<a  href = {rootDir} >
					<img   style = {image_style}  src=	{rootAndimage}/>
				</a>
			</div>	
    )
  }
}
