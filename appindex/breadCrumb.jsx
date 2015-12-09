import './main.css';
import React from 'react';
import Icons_bundle from '../components/icons_bundle.jsx';


export default class BreadCrumb extends React.Component {
  render() {
    var div_left_style = {
      float:'left'
    };
     var div_right_style = {
      float:'right'
    };
  	var breadCrumbNodes = this.props.data.map(function(crumb) {
      return (
        <a href={crumb.link}>{crumb.linkName} </a>
      );
    });

	return (
      <div>
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
