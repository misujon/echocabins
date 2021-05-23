/**
 * Created by monir on 5/22/2021.
 */
let mix = require('laravel-mix');

mix
    .js('src/app.js', 'dist')
    .sass('src/app.sass', 'dist');