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

mix
    /** WEB */
    .styles('resources/views/web/assets/css/tiny-slider.css' , 'public/frontend/css/tiny-slider.css')
    .styles('resources/views/web/assets/css/bootstrap.min.css' , 'public/frontend/css/bootstrap.css')
    .sass('resources/views/web/assets/scss/style.scss' , 'public/frontend/css/style.css')

    .copyDirectory('resources/views/web/assets/images', 'public/frontend/images')
    .copyDirectory('resources/views/web/assets/fonts', 'public/frontend/fonts')


    /** ADMIN */
    .styles('resources/views/admin/assets/css/app.min.css' , 'public/backend/assets/css/app.css')

    .scripts([
        'resources/views/admin/assets/js/vendors.min.js',
        'resources/views/admin/assets/vendors/chartjs/Chart.min.js',
        'resources/views/admin/assets/js/pages/dashboard-default.js',
    ] , 'public/backend/assets/js/libs/libs.css')

    .scripts('resources/views/admin/assets/js/app.min.js' , 'public/backend/assets/js/app.js')

    .copyDirectory('resources/views/admin/assets/images', 'public/backend/assets/images')
    .copyDirectory('resources/views/admin/assets/fonts', 'public/backend/assets/fonts')
    .copyDirectory('resources/views/admin/assets/vendors', 'public/backend/assets/vendors')

    .scripts('resources/views/admin/assets/js/javascript.js' , 'public/backend/assets/js/javascript.js')
    .scripts('resources/views/admin/assets/vendors/quill/quill.min.js' , 'public/backend/assets/js/quill.js')

    