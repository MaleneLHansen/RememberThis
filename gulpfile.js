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
elixir.config.js.folder = 'javascript';
elixir(function(mix) {

	mix.copy('node_modules/selectize/dist/', 'resources/assets/dist/selectize');
	

    mix.sass([
        '../dist/metisMenu/metisMenu.css',
        '../css/timeline.css',
        '../css/sb-admin-2.css',
        '../css/custom.css',
        'app.scss',
        '../dist/selectize/css/selectize.css',
        '../css/select2.css',
        '../dist/morrisjs/morris.css',
        '../dist/font-awesome/scss/font-awesome.scss',


    ]);

        mix.sass([
        '../dist/bootstrap/bootstrap.css',
        'static.scss',
        '../dist/font-awesome/scss/font-awesome.scss',
    ],'public/css/static.css');

    mix.scripts(['jquery.js',
        '../dist/bootstrap/bootstrap.js',
        '../dist/metisMenu/metisMenu.js',
        '../dist/raphael/raphael.js',
        '../dist/selectize/js/standalone/selectize.js',
        '../dist/morrisjs/morris.js',
        
        'moment.js',
        'bootstrap-datetimepicker.js',
        'sb-admin-2.js',
        'select2.js',
    ], 'public/js/application.js')

    mix.scripts(['jquery.js',
        '../dist/bootstrap/bootstrap.js',
        'contactForm.js',
    ], 'public/js/static.js')


    mix.version(['css/app.css', 'js/application.js','css/static.css','js/static.js']);

    mix.copy('resources/assets/dist/font-awesome/fonts', 'public/fonts');

});