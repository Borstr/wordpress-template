const { series, src, dest, watch } = require('gulp');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');

sass.compiler = require('node-sass');

function scss() {
  return src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('./css'));
}

function minifyCSS() {
  return src('./style.css')
    .pipe(cleanCSS())
    .pipe(dest('./css'));
}

function scssWatch() {
  return watch('./scss/**/*.scss', series(scss));
}

exports.build = series(scss, minifyCSS);
exports.default = series(scssWatch);