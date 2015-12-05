import './main.css';
import React from 'react';
import config from '../config/';


export default class MainTitle extends React.Component {
  render() {
  	const rootDir = config.rootdirectory + "imatges/cami.jpg";
  	const imageMainTitle = this.props.imageMainTitle;
  	const rootAndimage = config.rootdirectory  + this.props.imageMainTitle;
	return (<div>
				<h1>{this.props.title}</h1>
				<a  href={rootDir}>
					<img   alt="Irlanda del Nord" src={rootAndimage}/>
				</a>
			</div>	
    )
  }
}
