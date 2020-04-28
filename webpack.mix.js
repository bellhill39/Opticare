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
   .sass('resources/sass/app.scss', 'public/css');


mix.styles([

    'resources/assets/css/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
    'resources/assets/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    'resources/assets/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    'resources/assets/css/plugins/jqvmap/jqvmap.min.css',
    'resources/assets/css/dist/css/adminlte.min.css',
    'resources/assets/css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
    'resources/assets/css/plugins/daterangepicker/daterangepicker.css',
    'resources/assets/css/plugins/summernote/summernote-bs4.css',


],'public/css/admin/admin.css');


mix.scripts([

    'resources/assets/css/plugins/jquery/jquery.min.js',
    'resources/assets/css/plugins/jquery-ui/jquery-ui.min.js',
    'resources/assets/css/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/css/plugins/chart.js/Chart.min.js',
    'resources/assets/css/plugins/sparklines/sparkline.js',
    'resources/assets/css/plugins/jqvmap/jquery.vmap.min.js',
    'resources/assets/css/plugins/jqvmap/maps/jquery.vmap.usa.js',
    'resources/assets/css/plugins/jquery-knob/jquery.knob.min.js',
    'resources/assets/css/plugins/moment/moment.min.js',
    'resources/assets/css/plugins/daterangepicker/daterangepicker.js',
    'resources/assets/css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    'resources/assets/css/plugins/summernote/summernote-bs4.min.js',
    'resources/assets/css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
    'resources/assets/css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
    'resources/assets/css/dist/js/adminlte.js',
    'resources/assets/css/dist/js/pages/dashboard.js',
    // 'resources/assets/css/dist/js/pages/dashboard.js',
    // 'resources/assets/css/dist/js/demo.js',

],'public/js/admin/admin.js');


