import './main.css';
import React from 'react';
import Icons_bundle from '../components/icons_bundle.jsx';


export default class BreadCrumb extends React.Component {
  render() {
    var div_left_style = {
      float:'left',
      paddingLeft:'20px',
      paddingTop:'20px'
    };
     var div_right_style = {
      float:'right',
      paddingRight:'10px'
    };
    var div_whole_style= {
      backgroundColor:'#f0f0f0',
      position:'fixed',
      left:'0',
      top:'0',
      width:'100%',
      display:'inline',
    }
  	var breadCrumbNodes = this.props.data.map(function(crumb) {
      return (
        <a href={crumb.link}>{crumb.linkName} </a>
      );
    });

	return (
      <div style={div_whole_style}>
        <div style={div_left_style}>
          {breadCrumbNodes}
        </div>
       <div style={div_right_style}>
       <Icons_bundle/>
       </div>
      </div>
    )
  }
}
