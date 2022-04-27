const mix = require('laravel-mix');
 mix.scripts([
     'resources/js/jquery-3.3.1.slim.min.js',
     'resources/js/popper.min.js',
     'resources/js/bootstrap.min.js',
], 'public/js/my-app.js').version();
