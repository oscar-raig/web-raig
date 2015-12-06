import React from 'react';

export default class Block_with_list extends React.Component {

 render() {
 	var bloc_esquerra_style = {
 		background: '#6699CC',
    	clear: 'left',
    	float: 'left',
    	width: '50%',
    	height: '100px'
	}
 	return (<div style={bloc_esquerra_style} >
				<a class="anchor_boxes" href={this.props.href} >
				{this.props.href_title} </a>
			</div>);
	}
}	