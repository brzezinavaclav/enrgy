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
    mix.styles(['bootstrap.css', 'main.css'], 'public/css/app.min.css');
    mix.scripts(['jquery-2.2.4.min.js', 'bootstrap.js'], 'public/js/app.min.js');
});
