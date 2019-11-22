const mix = require('laravel-mix')
const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/styles/app.sass', 'public/css')

mix.webpackConfig({
  devServer: {
    proxy: {
      '*': 'http://localhost:8000'
    }
  },
  resolve: {
    extensions: ['.js', '.json', '.vue'],
    alias: {
      '~': path.join(__dirname, './resources/js'),
      '$comp': path.join(__dirname, './resources/js/components'),
      "@": path.resolve(
        __dirname,
        "resources/assets/js"
      )
    }
  },
  plugins: [
    new VuetifyLoaderPlugin()
  ],
  module: {
    rules: [{
      test: /\.js?$/,
      exclude: /(bower_components)/,
      use: [{
        loader: 'babel-loader',
        options: mix.config.babel()
      }]
    }]
  }
})

mix.browserSync(process.env.APP_URL)
