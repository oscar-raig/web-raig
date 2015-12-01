import './main.css';
import React from 'react';

export default class MainTitle extends React.Component {
  render() {
	return (<div>
				<h1>{this.props.title}</h1>
				<a  href="http://www.raig.cat/imatges/cami.jpg">
					<img   alt="Irlanda del Nord" src="http://www.raig.cat/thumbs/thumb_cami_50.jpg"/>
				</a>
			</div>	
    )
  }
}
