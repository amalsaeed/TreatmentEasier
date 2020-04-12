const mix = require('laravel-mix');
const bower_path = './bower_components/';
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

mix.js('resources/js/app.js', 'public/dist/js')
    .sass('resources/sass/app.scss', 'public/dist/css');

mix.styles([
    './node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css',
], 'public/dist/css/plugins.css');

mix.js([
    './node_modules/popper.js/dist/umd/popper.js',
    './node_modules/bootstrap/dist/js/bootstrap.js'
], 'public/dist/js/vendors.js');

mix.copyDirectory('resources/images/','public/dist/images');
