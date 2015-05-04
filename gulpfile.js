var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
  mix.less('app.less', 'resources/assets/css');
  mix.sass('app_scss.scss', 'resources/assets/css');

  mix.styles([
    'libs/normalize.css',
    'app.css',
    'libs/css?family=Roboto:400,300',
    'app_scss.css',
    'libs/select2.min.css'
  ],
    null,
    'resources/assets/css');

  mix.version(['public/css/all.css', 'public/js/all.js']);

  mix.scripts([
    'libs/jquery.min.js',
    'libs/bootstrap.min.js',
    'libs/select2.min.js'
  ], null, 'resources/assets/js')
});
