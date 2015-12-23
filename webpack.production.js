var path = require('path');
var webpack = require("webpack");

var definePlugin = new webpack.DefinePlugin({
  __DEBUG__: JSON.stringify(false),
  "process.env": {
    "NODE_ENV": "'production'"
  }
});


module.exports = {
    entry:{ 
	appindex:path.resolve(__dirname, './main.js'),
	apppersonal:path.resolve(__dirname, './personal/main.js'),		
	appenric:path.resolve(__dirname, './enric/main.js'),
	appqueesllegir:path.resolve(__dirname,'./personal/que_es_llegir/main.js')
    },
    output: {
        path: path.resolve(__dirname, './'),
        filename: '[name].bundle.js',
    },
    module: {
    loaders: [
        { test: /\.js$/, loader: 'babel-loader' },
        { test: /\.css$/, loader: 'style!css' },
        { test: /\.jsx$/, loader: 'babel' }
        ]
    },
    plugins: [
    definePlugin,
    new webpack.NoErrorsPlugin()
  ]

};
