import React from 'react';

export default class Block_with_list extends React.Component {

 render() {
 	var position = 170 + (this.props.column * 240);
 	var bloc_esquerra_style = {
 		position:'absolute',
    	float: 'left',
    	width: '220px',
//    	height: '400px',
    	boxShadow:'0 1px 2px 0 rgba(0,0,0,0.22)',
    	borderRadius:'11px 32px 10px 10px',
    	top:'240px',
    	left:'240px',
 //   	borderColor:'red',
  //  	border:'solid 5px'
  		display: 'inline-block',
  		backgroundColor:'white',
	};
	bloc_esquerra_style.left = position + 'px';
	if( this.props.row == "2")
		bloc_esquerra_style.top = '580px';

	var image_style = {
		width:'100%',
		hight:'100%',
		borderRadius: '15px 15px 0 0'
	};

	var span_style = {
			color:'#717171',
			fontSize: '13px',
			textAlign:'centered'
	};

	var div_style_bottom = {
		backgroundColor:'white',
//		width: '220px',
		margin:'10px'
	}
	var anchor_style = {
		 textDecoration: 'none'
	}

 	return (<div style={bloc_esquerra_style} >
				<a style={anchor_style} href={this.props.href} >
					<div>
						
						<img  style={image_style} src={this.props.image}/>
						<div style ={div_style_bottom}>
							<span style={span_style} >{this.props.href_title}</span>
						</div>	
					</div>
				</a>
			</div>);
	}
}	  