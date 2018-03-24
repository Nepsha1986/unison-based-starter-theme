let mix = require('laravel-mix');

mix.babel(['framework-customizations/extensions/shortcodes/shortcodes/*/views/*.js'], 'js/unison-components.js');

mix.webpackConfig({
    module: {
        rules: [{
            test: /\.scss/,
            enforce: "pre",
            loader: 'import-glob-loader'
        }]
    }
}).sass('styles/all.scss', 'styles');
