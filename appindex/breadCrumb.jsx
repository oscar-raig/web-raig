import './main.css';
import React from 'react';

export default class BreadCrumb extends React.Component {
  render() {
  	var breadCrumbNodes = this.props.data.map(function(crumb) {
      return (
        <a href={crumb.link}>{crumb.linkName} </a>
      );
    });

	return (
      <div>
        {breadCrumbNodes}
      </div>
    )
  }
}
