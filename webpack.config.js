const path = require('path')
const webpack = require('webpack')

module.exports = {
  entry: './js/index.js',
  mode: 'development',
  watch: true,
  output: {
    path: path.resolve(__dirname, 'js'),
    filename: 'bundle.js'
  },
  module: {
    rules: [
      { test: /\.js$/,
        exclude: /node_modules/,
        loader: "babel-loader"
      }
    ]
  }
}
