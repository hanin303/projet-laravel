const mix = require('laravel-mix');

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
    .sass('resources/sass/app.scss', 'public/css')
    .styles('resources/css/dashboard_Admin.css', 'public/css/dashboard_Admin.css') 
    .styles(['resources/css/welcome.css','resources/css/style.css']
    , 'public/css/welcome.css')
    .styles('resources/css/PanierStyle.css', 'public/css/PanierStyle.css');
