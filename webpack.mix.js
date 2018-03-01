let mix = require('laravel-mix');

// TODO: fix or change build ( currently 'npm run watch command is not working correctly')
mix.babel(['framework-customizations/extensions/shortcodes/shortcodes/*/views/*.js'], 'js/unison-components.js');
mix.combine(['framework-customizations/extensions/shortcodes/shortcodes/*/views/*.scss'], 'temp/unison-components.scss');

mix.sass('styles/all.scss', 'styles');