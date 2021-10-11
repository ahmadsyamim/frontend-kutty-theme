const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

const theme = require('./theme.json');
mix.setPublicPath('../../../public').mergeManifest();
// .setPublicPath('../../../public/'+theme['asset-path']);

const path = theme['asset-path'];
const name = theme['name'];
mix.js(__dirname + '/assets/js/app.js', path+'/js/'+name+'.js')
    .postCss(__dirname + '/assets/css/app.css', path+'/css/'+name+'.css', [
        require("tailwindcss"),
    ])
    // .sass( __dirname + '/assets/sass/app.scss', 'css/theme.css', [
    //     require("tailwindcss"),
    // ])
    ;

if (mix.inProduction()) {
    mix.version();
}
