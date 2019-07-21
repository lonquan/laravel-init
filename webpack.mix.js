const mix = require('laravel-mix');

mix
  .js('resources/js/app.js', 'public/app-run/js')
  .extract(['vue', 'element-ui'])

mix
  .copy('node_modules/element-ui/lib/theme-chalk/index.css', 'public/app-run/css/ele.css')


mix
  .styles([
    'resources/css/app.css',
  ], 'public/app-run/css/app.css')

if (mix.inProduction()) {
  mix.version();
}
// mix.disableNotifications();
mix.browserSync('xyjjd.dev');
