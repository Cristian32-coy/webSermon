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

mix.styles([
    'resources/vendor/css/index.css',
    'resources/vendor/css/main.css',
    'resources/vendor/css/miestilo.css'
], 'public/css/plantilla.css')
.js('resources/js/app.js', 'public/js')
.scripts([
    'resources/vendor/js/eskju.jquery.scrollflow.js'
], 'public/js/plantilla.js')
.copyDirectory('resources/vendor/imagen', 'public/imagen');
