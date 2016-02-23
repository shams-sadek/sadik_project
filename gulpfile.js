var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //mix.sass('app.scss');

    /* All Styles */
    mix.styles([
        'font-awesome.min.css',
        'googleapis.css',
        'bootstrap.min.css',
        'bootstrap-datetimepicker.min.css',
        'jquery.dataTables.css',
        'custom.css',

    ], 'public/css/normalize.css');



    /* scripts Files */
    mix.scripts([
        'jquery.min.js',
        'moment.min.js',
        'bootstrap.min.js',
        'bootstrap-datetimepicker.min.js',
        'jquery.dataTables.js',
        'custom.js',
    ], 'public/js/normalize.js');




});
