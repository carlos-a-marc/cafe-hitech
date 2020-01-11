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

mix.styles(['resourses/views/site/css/style1.css'], 'public/site/css/style.css')
    .scripts(['resourses/views/site/javascript/home.js'], 'public/site/javascript/home.js')

    .version();
