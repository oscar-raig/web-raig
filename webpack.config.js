var path = require('path');


module.exports = {
    entry: path.resolve(__dirname, './app/main.js'),
    output: {
        path: path.resolve(__dirname, './'),
        filename: 'bundle.js',
    },
    module: {
    loaders: [
        { test: /\.js$/, loader: 'babel-loader' },
        { test: /\.css$/, loader: 'style!css' },
        { test: /\.jsx$/, loader: 'babel' }
        ]}
};
