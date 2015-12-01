import './main.css';
import React from 'react';
import config from '../config/';


export default class MainTitle extends React.Component {
  render() {
  	const rootDir = config.rootdirectory + "imatges/cami.jpg";
	return (<div>
				<h1>{this.props.title}</h1>
				<a  href={rootDir}>
					<img   alt="Irlanda del Nord" src="http://www.raig.cat/thumbs/thumb_cami_50.jpg"/>
				</a>
			</div>	
    )
  }
}
