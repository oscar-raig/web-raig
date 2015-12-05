var path = require('path');
var webpack = require("webpack");

var definePlugin = new webpack.DefinePlugin({
  __DEBUG__: JSON.stringify(false),
  "process.env": {
    "NODE_ENV": "'production'"
  }
});


module.exports = {
    entry: path.resolve(__dirname, './apppersonal/main.js'),
    output: {
        path: path.resolve(__dirname, './'),
        filename: 'apppersonal/apppersonal.js',
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