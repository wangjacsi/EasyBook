const { mix } = require('laravel-mix');

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
mix.js('resources/assets/js/app.js', 'public/js')
 .combine([
     'resources/assets/js/plugins/metisMenu/jquery.metisMenu.js',
     'resources/assets/js/plugins/slimscroll/jquery.slimscroll.min.js',
     'resources/assets/js/plugins/pace/pace.min.js',
     'resources/assets/js/plugins/toastr/toastr.min.js',
 ], 'public/js/plugin.js', './')
 .copy('resources/assets/js/admin.js', 'public/js/admin.js')
 .sass('resources/assets/sass/app.scss', 'public/css')
 .sass('resources/assets/sass/admin.scss', 'public/css')
 .combine([
     'resources/assets/vendor/animate/animate.css',
     'resources/assets/vendor/toastr/toastr.min.css'
  ], 'public/css/plugin.css');
