const elixir = require('laravel-elixir');
require('laravel-elixir-vue');
require('laravel-elixir-image-optimize');



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

//enable source maps
elixir.config.sourcemaps = true;
//compile sass
elixir(function(mix) {
    mix.sass('app.scss')
            .version('public/css/app.css')
            .webpack('app.js');

});

//transpile & concat scripts
// elixir(function(mix) {
//     mix.rollup(['app.js'], './public/foo/bar/min.js');
// });

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});
//optimize images
if (elixir.config.production)(function(mix) {
    mix.imageOptimize();
});

// elixir(function(mix) {
//     mix.imageOptimize();
// });

//browser sync
elixir(function(mix) {
    mix.browserSync({proxy: 'icinema.dev'});
});
