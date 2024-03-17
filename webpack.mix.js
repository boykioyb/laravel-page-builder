let mix = require('laravel-mix');

let grapesJSAssetsPath = 'src/PageBuilder/Modules/GrapesJS/assets/';
mix.postCss(grapesJSAssetsPath + 'grapes.min.css', 'dist/pagebuilder/app.css')
   .js(grapesJSAssetsPath + 'grapes.min.js', 'dist/pagebuilder/app.js')
   .js(grapesJSAssetsPath + 'grapes-custom.js', 'dist/pagebuilder/app.js');
