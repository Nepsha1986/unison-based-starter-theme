let mix = require('laravel-mix');

mix.babel(['framework-customizations/extensions/shortcodes/shortcodes/*/views/*.js'], 'js/unison-components.js');
mix.js('js/main.js', 'js/bundle.js');

mix.webpackConfig({
    devtool: "inline-source-map",
    module: {
        rules: [{
            test: /\.scss/,
            enforce: "pre",
            loader: 'import-glob-loader'
        }]
    }
}).sass('styles/all.scss', 'styles/all.css').sourceMaps();
